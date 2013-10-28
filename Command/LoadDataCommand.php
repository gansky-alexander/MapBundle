<?php

namespace Gansky\MapBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class LoadDataCommand extends ContainerAwareCommand
{
	private $node;
	private $way;
	private $wayAddress;
	private $relation;
//php app/console map:load-data "d:\data\node.osm" "d:\data\way.osm" "d:\data\relation.osm"
    protected function configure()
    {
        $this
                ->setName('map:load-data')
                ->setDescription('Load data from OSM.')
                ->addArgument('node', InputArgument::REQUIRED, 'Type of data file?')
                ->addArgument('way', InputArgument::REQUIRED, 'File name for loading?')
                ->addArgument('relation', InputArgument::REQUIRED, 'File name for loading?')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->node = new \XMLReader();
        $this->way = new \XMLReader();
        $this->relation = new \XMLReader();
        $this->node->open($input->getArgument('node'));
        $this->way->open($input->getArgument('way'));
		$this->wayAddress = $input->getArgument('way');
        $this->relation->open($input->getArgument('relation'));
		
		$this->relation->read();
		$relations = array();
        while ($this->relation->read()) {
			$outerXml = $this->relation->readOuterXML();
			if(strlen($outerXml) > 3 && $this->isFullRelation($outerXml)) {
				if($this->isBoundary($outerXml)) {
					$result = $this->processXml($outerXml);
					$outerXml = new \SimpleXMLElement($outerXml);
					
					// $relations[(int)$outerXml['id']->__toString()] = $result;
				}
			}
		}
    }

	public function saveResults() {
		// save nodes and ways
	}
	
	public function isFullRelation($str) {
		return (strpos($str,'<relation') >=0) && (strpos($str,'</relation>') >=0);
	}
	
    public function isBoundary($relation_node)
    {
		$relation_node = new \SimpleXMLElement($relation_node);
			foreach($relation_node->tag AS $key => $value) {
				if($value['k'] == 'boundary' && $value['v'] == 'administrative')
				{
					unset($relation_node);
					return true;
				}
			}
		unset($relation_node);
		return false;
    }

	public function processXml($relation_node) {
		$waysNodes = array();
		$relation_node = new \SimpleXMLElement($relation_node);
		foreach($relation_node->member AS $key => $value) {
			if($value['type'] == 'way') {
				$result = $this->findNodeIdsByWayId((int)$value['ref']->__toString());
				if(!empty($result)) {
					$waysNodes = array_merge($waysNodes, $result);
				}
			}
		}
		return $waysNodes;
	}
	
	public function findNodeIdsByWayId($wayId) {
		$this->way->read();
		$node = null;
		$way = array();
		while($this->way->read()) {
			$wayOuterXml = $this->way->readOuterXML();
			if(strlen($wayOuterXml) > 3 && $this->isFullWay($wayOuterXml)) {
				if(strpos($wayOuterXml, 'id="' . $wayId . '"') > 0) {
					$node = new \SimpleXMLElement($wayOuterXml);
					foreach($node->nd As $key => $value) {
						$result = $this->findNodeById($value['ref']);
						if(!empty($result)) {
							$way[] = $result;
						}
					}
				}
			}
		}
		$this->way->open($this->wayAddress);
		return $way;
	}
	
	public function isFullWay($wayOuterXml) {
		if(!strpos($wayOuterXml,'</way>')) {
			return false;
		}
		return (strpos($wayOuterXml,'<way') >=0) && (strpos($wayOuterXml,'</way>') >=0);
	}
	
	public function findNodeById($nodeId) {
		$this->node->read();
		while($this->node->read()) {
			$nodeOuterXml = $this->node->readOuterXML();
			if(strlen($nodeOuterXml) > 3 && $this->isFullNode($nodeOuterXml)) {
				$nodeOuterXml = new \SimpleXMLElement($nodeOuterXml);
				$returns[(int)$nodeOuterXml['id']->__toString()] = array('lon' => $nodeOuterXml['lon']->__toString(), 'lat' => $nodeOuterXml['lat']->__toString());
				return $returns;
			}
		}
	}
	
	public function isFullNode($nodeOuterXml) {
		if(strpos($nodeOuterXml, '<tag') !== false) {
			if(!strpos($nodeOuterXml,'</node>')) {
				return false;
			}
			return (strpos($nodeOuterXml,'<node') >=0) && (strpos($nodeOuterXml,'</node>') >=0) && (strpos($nodeOuterXml,'osm') === false);
		} else {
			return (strpos($nodeOuterXml,'<node ') >=0) && (strpos($nodeOuterXml,'/>') >=0) && (strpos($nodeOuterXml,'osm') === false);
		}
	}
}
