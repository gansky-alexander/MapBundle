<?php

namespace Gansky\MapBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Gansky\MapBundle\Entity\Way;
use Gansky\MapBundle\Entity\WaySet;
use Gansky\MapBundle\Entity\Point;

/**
* 300000 m - top level for map
*
*/
class PrepareDataCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this
            ->setName('map:prepare-data')
            ->setDescription('Prepare data from row data in database.')
            ->addArgument('distance', InputArgument::REQUIRED, 'Distance between two points?')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getEntityManager();
        $distance = $input->getArgument('distance');
        
        $way = new Way();
        $way->setName('Way for new level');
        $em->persist($way);

        $sets = $em->getRepository('GanskyMapBundle:WaySet')
                            ->createQueryBuilder('ws')
                            ->innerJoin('ws.way', 'w')
                            ->where('w.id = :id')
                            ->setParameter('id', 1)
                            ->getQuery()
                            ->getResult();

        $firstWaySet = $sets[0];
        $firstWaySet->setWay($way);
        $i = 0;
        foreach($sets AS $key => $value) {
            if($this->getDistance($firstWaySet->getPoint(), $value->getPoint()) >= $distance) {
                var_dump($i++);
                $firstWaySet = $value;
            }
        }


        // $em->flush();
    }

public static function getDistance($point1, $point2) {
$M_PI = 3.14159265358979323846264338327950288;
  $lat1 = $point1->getLatitude() * $M_PI / 180;
  $lat2 = $point2->getLatitude() * $M_PI / 180;
  $lon1 = $point1->getLongitude() * $M_PI / 180;
  $lon2 = $point2->getLongitude() * $M_PI / 180;
  
  $d_lon = $lon1 - $lon2;
  
  $slat1 = sin($lat1);
  $slat2 = sin($lat2);
  $clat1 = cos($lat1);
  $clat2 = cos($lat2);
  $sdelt = sin($d_lon);
  $cdelt = cos($d_lon);
  
  $y = pow($clat2 * $sdelt, 2) + pow($clat1 * $slat2 - $slat1 * $clat2 * $cdelt, 2);
  $x = $slat1 * $slat2 + $clat1 * $clat2 * $cdelt;
  
  return atan2(sqrt($y), $x) * 6372795;
}
}