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
class MapController extends Controller
{

    /**
     * @DI\Inject("doctrine.orm.entity_manager")
     */
    private $em;

    /**
     * @Route("/index/{id}", name="index_action")
     * @Template()
     */
    public function indexAction($id)
    {
        $types = $this->em->getRepository('GanskyMapBundle:MapType')
                ->createQueryBuilder('mt')
                ->getQuery()
                ->getResult();

        return array('types' => $types, 'id' => $id);
    }

    /**
     * Controller for getting bounds by zoom and corner coordinates.
     * North East - right top corner;
     * South West - left bottom corner;
     * Latitude - horisontal;
     * Longitude - vertical;
     * @Route("/get-bounds", name="get_bounds_action")
     */
    public function getBoundsAction()
    {
        $zoom = $this->getRequest()->get('zoom');
        $south_west_latitude = $this->getRequest()->get('south_west_latitude');
        $south_west_longitude = $this->getRequest()->get('south_west_longitude');
        $north_east_latitude = $this->getRequest()->get('north_east_latitude');
        $north_east_longitude = $this->getRequest()->get('north_east_longitude');
        $id = $this->getRequest()->get('id');

        $returns = array();
        $bounds = $this->em->getRepository('GanskyMapBundle:Way')
                ->createQueryBuilder('w')
                ->select('w.id, mtv.color')
                ->innerJoin('w.mapTypeValue', 'mtv')
                ->where('mtv.mapType = :id')
                ->setParameters(array('id' => $id))
                ->getQuery()
                ->getResult(Query::HYDRATE_ARRAY);

        $points = array();
        foreach ($bounds AS $value) {
            $points[] = $value['id'];
        }

        foreach ($bounds AS $value) {
            if (!isset($returns[$value['id']])) {
                $returns[$value['id']] = array('color' => $value['color'], 'points' => array());
            }
        }

        $points = $this->em->getRepository('GanskyMapBundle:Point')
                ->createQueryBuilder('p')
                ->select('p.latitude, p.longitude, w.id')
                ->innerJoin('p.waySet', 'ws')
                ->innerJoin('ws.way', 'w')
                ->where('w.id IN (:ids)')
                ->setParameters(array('ids' => $points))
                ->getQuery()
                ->getResult(Query::HYDRATE_ARRAY);

        foreach ($points AS $key => $value) {
            $returns[$value['id']]['points'][$key]['lat'] = $value['latitude'];
            $returns[$value['id']]['points'][$key]['lon'] = $value['longitude'];
        }

        return new \Symfony\Component\HttpFoundation\JsonResponse($returns);
    }

    /**
     * Controller for creating new custom polygon.
     * 
     * @Route("/new-polygon", name="new_custom_polygon")
     * @Template()
     */
    public function newAction() {
        return array();
    }
    
}
