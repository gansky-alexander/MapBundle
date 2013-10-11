<?php

namespace Gansky\MapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

    /**
     * @Route("/map")
     */
class DefaultController extends Controller
{
    /**
     * @Route("/index")
     * @Template()
     */
    public function indexAction()
    {
      $text = file_get_contents('D:\www\map\web\map_bkp.osm');
      foreach(explode(PHP_EOL, $text) AS $key => $value) {
        
      }
    }
}
