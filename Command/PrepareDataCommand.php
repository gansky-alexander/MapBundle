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
 * 20 m - 18 level for map
 * 20 m - 17 level for map
 * 20 m - 16 level for map
 * 100 m - 15 level for map
 * 100 m - 14 level for map
 * 500 m - 13 level for map
 * 1000 m - 12 level for map
 * 2000 m - 11 level for map    
 * 5000 m - 10 level for map
 * 10000 m - 9 level for map
 * 20000 m - 8 level for map
 * 20000 m - 7 level for map
 * 50000 m - 6 level for map
 * 100000 m - 5 level for map
 * 100000 m - 4 level for map
 * 100000 m - 3 level for map
 * 100000 m - 2 level for map
 * 100000 m - 1 level for map
 */
class PrepareDataCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this->setName('map:prepare-data')
                ->setDescription('Prepare data from row data in database.')
                ->addArgument('distance', InputArgument::REQUIRED, 'Distance between two points?')
                ->addArgument('level', InputArgument::REQUIRED, 'Level of the map?')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getEntityManager();
        $distance = $input->getArgument('distance');
        $level = $input->getArgument('level');

        $ways = $em->getRepository('GanskyMapBundle:Way')
                ->createQueryBuilder('w')
                ->where('w.level = :level')
                ->setParameter('level', 0)
                ->getQuery()
                ->getResult();

        foreach ($ways AS $wayIndex => $wayValue) {
            $way = new Way();
            $way->setName('Copy of way ' . $wayValue->getName());
            $way->setLevel($level);
            $em->persist($way);
            $output->writeln($wayValue->getId());
            $sets = $em->getRepository('GanskyMapBundle:WaySet')
                    ->createQueryBuilder('ws')
                    ->innerJoin('ws.way', 'w')
                    ->where('w.id = :id')
                    ->setParameter('id', $wayValue->getId())
                    ->getQuery()
                    ->getResult();

            $firstWaySet = $sets[0]->copy();
            $firstWaySet->setWay($way);
            $em->persist($firstWaySet);
            $i = 0;
            foreach ($sets AS $key => $value) {
                if ($this->getDistance($firstWaySet->getPoint(), $value->getPoint()) >= $distance) {
                    $firstWaySet->setWay($way);
                    $em->persist($firstWaySet);
                }
                $firstWaySet = $value->copy();
            }
            $em->flush();
        }
    }

    /**
     * Return distance in meters.
     */
    public static function getDistance($point1, $point2)
    {
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
