<?php

namespace Gansky\MapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Gansky\MapBundle\Entity\Point;
use JMS\DiExtraBundle\Annotation as DI;

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
     * @Route("/index")
     * @Template()
     */
    public function indexAction()
    {
      return array();
    }
}
