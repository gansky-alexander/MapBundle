<?php

namespace Gansky\MapBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class LoadDataCommand extends ContainerAwareCommand
{

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
        $node = new \XMLReader();
        $way = new \XMLReader();
        $relation = new \XMLReader();
        $node->open($input->getArgument('node'));
        $way->open($input->getArgument('way'));
        $relation->open($input->getArgument('relation'));
		$relation->read();
        while ($relation->read()) {
			$outerXml = $relation->readOuterXML();
			if(strlen($outerXml) > 3 && $this->isFullRelation($outerXml)) {
				if($this->isBoundary($outerXml)) {
					$this->processXml($outerXml);
					die();
				}
				
			}
		}
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

	public function processXml($outerXml) {
		var_dump($outerXml);
	}
}
