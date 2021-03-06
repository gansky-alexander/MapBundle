<?php

namespace Gansky\MapBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Gansky\MapBundle\Entity\Point;
use Gansky\MapBundle\Entity\Way;
use Gansky\MapBundle\Entity\WaySet;

class LoadDataCommand extends ContainerAwareCommand
{
	private $node;
	private $nodeAddress;
	private $entityManager;
//php app/console map:load-data "d:\data\node.osm"
    protected function configure()
    {
        $this
                ->setName('map:load-data')
                ->setDescription('Load data from OSM.')
                ->addArgument('xml_file', InputArgument::REQUIRED, 'Name of xml file in resource  without extension?')
                ->addArgument('reverse', InputArgument::OPTIONAL, 'Reverse first way?')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {	
		echo $input->getArgument('xml_file') . ' starts;';
		$this->nodeAddress = __DIR__ . '/../Resources/osm/' . $input->getArgument('xml_file') . '.xml';
		$this->entityManager = $this->getContainer()->get('doctrine')->getEntityManager();
		
		$way = new Way();
		$way->setName($input->getArgument('xml_file'));
		$way->setLevel(0);
		$this->entityManager->persist($way);
		$this->entityManager->flush();
		
		$xmlFile = new \SimpleXMLElement(file_get_contents($this->nodeAddress));
		$lastPoint = array();
		$memverI = 0;
		
		foreach($xmlFile->relation->member AS $member) {
			if((string)$member['type'] != 'way') {
				continue;
			}
			$i = 0;
			foreach($xmlFile->way AS $wayNode) {
				if((int)$member['ref'] == (int)$wayNode->attributes()['id']) {
					$arrayOfNodes = array();
					foreach($wayNode->nd AS $nd) {
						foreach($xmlFile->node As $key => $value) {
							if((int)$nd['ref'] != $value['id']) {
								continue;
							}
							$arrayOfNodes[$i] = array('id' => (int)$value['id'],'lat' => (float)$value['lat'], 'lon' => (float)$value['lon']);
							$i++;
						}
					}
				}
			}
			if(empty($arrayOfNodes)) {
				continue;
			}
			if(!empty($lastPoint)) {
				if($this->getDistance($lastPoint['lat'], $lastPoint['lon'], $arrayOfNodes[0]['lat'], $arrayOfNodes[0]['lon']) > $this->getDistance($lastPoint['lat'], $lastPoint['lon'], $arrayOfNodes[count($arrayOfNodes) - 1]['lat'], $arrayOfNodes[count($arrayOfNodes) - 1]['lon'])) {
					$arrayOfNodes = array_reverse($arrayOfNodes);
				}
			}
			// for first way in polygon
			if($memverI == 0 && $input->getArgument('reverse') == 'yes') {
				$arrayOfNodes = array_reverse($arrayOfNodes);
			}
			
			foreach($arrayOfNodes AS $key => $value) {
				$point = $this->entityManager->getRepository('GanskyMapBundle:Point')->findOneBy(array('bk' => $value['id']));
				if(!$point) {
					$point = new Point();
					$point->setBk($value['id']);
					$point->setLongitude($value['lon']);
					$point->setLatitude($value['lat']);
					$this->entityManager->persist($point);
					$this->entityManager->flush();
				}
				$waySet = new WaySet();
				$waySet->setPoint($point);
				$waySet->setWay($way);
				$this->entityManager->persist($waySet);	
				$this->entityManager->flush();
			}
			$lastPoint = array();
			$lastPoint['lat'] = $point->getLatitude();
			$lastPoint['lon'] = $point->getLongitude();
			$memverI++;
		}
		echo $input->getArgument('xml_file') . ' finished;';
	}
	
	public static function getDistance($lat1, $lon1, $lat2, $lon2)
    {
        $M_PI = 3.14159265358979323846264338327950288;
        $lat1 = $lat1 * $M_PI / 180;
        $lat2 = $lat2 * $M_PI / 180;
        $lon1 = $lon1 * $M_PI / 180;
        $lon2 = $lon2 * $M_PI / 180;

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
