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
            ->addArgument('filename', InputArgument::REQUIRED, 'File name for loading?')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $filename = $input->getArgument('filename');
        
        $output->writeln($filename);
    }
}