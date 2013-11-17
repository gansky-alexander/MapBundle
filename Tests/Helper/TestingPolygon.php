<?php

namespace Gansky\MapBundle\Tests\Helper;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Gansky\MapBundle\Helper\Polygon;

class TestingPolygon extends WebTestCase {

    public function testIfSimplePolygonCheckIn() {
        $polygonPointArray = array(
            array(1,2),
            array(1,3),
            array(1,4),
            array(5,7),
            array(8,4)
        );
        $latitude = 0;
        $longitude = 0;

        $result = new Polygon();
        $result->setPolygon($polygonPointArray);
        $this->assertEquals(false, $result->checkIn($latitude, $longitude));
    }

    public function testIfSimplePolygonCheckOut() {
        $polygonPointArray = array(
            array(1,2),
            array(1,3),
            array(1,4),
            array(5,7),
            array(8,4)
        );
        $latitude = 6;
        $longitude = 5;

        $result = new Polygon();
        $result->setPolygon($polygonPointArray);
        $this->assertEquals(true, $result->checkIn($latitude, $longitude));
    }
    
    public function testInBigPolygonCheckOut() {
        $polygonPointArray = json_decode(file_get_contents(__DIR__ . '/../../Resources/test/polygon.json'));
        foreach($polygonPointArray AS $key => $value) {
            $polygonPointArray[$key] = array($value->latitude, $value->longitude);
        }
        
        $latitude = 10.012299;
        $longitude = 36.242979;

        $result = new Polygon();
        $result->setPolygon($polygonPointArray);
        $this->assertEquals(false, $result->checkIn($latitude, $longitude));
    }
    
    public function testInBigPolygonCheckIn() {
        $polygonPointArray = json_decode(file_get_contents(__DIR__ . '/../../Resources/test/polygon.json'));
        foreach($polygonPointArray AS $key => $value) {
            $polygonPointArray[$key] = array($value->latitude, $value->longitude);
        }
        
        $latitude = 49.48805618;
        $longitude = 37.60666656;

        $result = new Polygon();
        $result->setPolygon($polygonPointArray);
        $result->checkIn($latitude, $longitude);
        $this->assertEquals(true, $result->checkIn($latitude, $longitude));
    }
    
}
