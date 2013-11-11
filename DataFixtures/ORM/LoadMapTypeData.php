<?php

namespace Nitra\PosBundle\DataFixture\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Gansky\MapBundle\Entity\MapType;

class LoadMapTypeData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $em)
    {
        $mapType = new MapType();
        $mapType->setName('Test data 1');
        $mapType->setColor('#FF7F50');
        $em->persist($mapType);

        $mapType1 = new MapType();
        $mapType1->setName('Test data 2');
        $mapType1->setColor('#9932CC');
        $em->persist($mapType1);

        $em->flush();
    }

    public function getOrder()
    {
        return 100;
    }

}
