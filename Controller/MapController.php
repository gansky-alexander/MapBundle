<?php

namespace Gansky\MapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Gansky\MapBundle\Entity\Point;
use JMS\DiExtraBundle\Annotation as DI;
use Doctrine\ORM\Query;

/**
 * @Route("/map")
 */
class MapController extends Controller {

    /**
     * @DI\Inject("doctrine.orm.entity_manager")
     */
    private $em;

    /**
     * @Route("/index", name="index_action")
     * @Template()
     */
    public function indexAction() {
        return array();
    }

    /**
     * Controller for getting bounds by zoom and corner coordinates.
     * North East - right top corner;
     * South West - left bottom corner;
     * Latitude - horisontal;
     * Longitude - vertical;
     * @Route("/get-bounds", name="get_bounds_action")
     */
    public function getBoundsAction() {
        $zoom = $this->getRequest()->get('zoom');
        $south_west_latitude = $this->getRequest()->get('south_west_latitude');
        $south_west_longitude = $this->getRequest()->get('south_west_longitude');
        $north_east_latitude = $this->getRequest()->get('north_east_latitude');
        $north_east_longitude = $this->getRequest()->get('north_east_longitude');

        $bounds = $this->em->getRepository('GanskyMapBundle:Point')
                ->createQueryBuilder('p')
                ->select('p.latitude, p.longitude')
                ->innerJoin('p.waySet', 'ws')
                ->innerJoin('ws.way', 'w')
                ->andWhere('w.level = :way_level')
                ->andWhere('p.latitude > :south_west_latitude OR p.latitude < :north_east_latitude')
                ->andWhere('p.longitude > :south_west_longitude OR p.longitude < :north_east_longitude')
                ->setParameters(array(
                    'way_level' => $zoom,
                    'south_west_latitude' => $south_west_latitude,
                    'north_east_latitude' => $north_east_latitude,
                    'south_west_longitude' => $south_west_longitude,
                    'north_east_longitude' => $north_east_longitude))
                ->getQuery()
                ->getResult(Query::HYDRATE_ARRAY);
        return new \Symfony\Component\HttpFoundation\JsonResponse($bounds);
    }

}
