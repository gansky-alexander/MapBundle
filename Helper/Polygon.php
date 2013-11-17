<?php

namespace Gansky\MapBundle\Helper;

class Polygon {

    protected $polygon = array();

    /**
     * Polygon itself, with basic vector-based structure
     * Array: [ [1,1], [2,1], [3,0], [2,-1] ]
     *
     * @var $polygon array
     */
    public function setPolygon($polygon) {
        if (count($polygon) < 3)
            throw new \Exception('Polygon mast contain more three points');
        foreach ($polygon as $key => $point) {
            $polygon[$key] = array('lon' => $point[1], 'lat' => $point[0]);
        }
        $this->polygon = $polygon;
    }

    /**
     * Check if $polygon contains $test value
     *
     * @var $lon - latitude
     * @var $lat - longotude
     */
    public function checkIn($lat, $lon) {
        $intersections = 0;
        $vertices_count = count($this->polygon);
        for ($i=1; $i < $vertices_count; $i++) {
            $vertex1 = $this->polygon[$i-1]; 
            $vertex2 = $this->polygon[$i];
//            if ($vertex1['y'] == $vertex2['y'] and $vertex1['y'] == $point['y'] and $point['x'] > min($vertex1['x'], $vertex2['x']) and $point['x'] < max($vertex1['x'], $vertex2['x'])) {
//                return "boundary";
//            }
            if ($lon > min($vertex1['lon'], $vertex2['lon']) and $lon <= max($vertex1['lon'], $vertex2['lon']) and $lat <= max($vertex1['lat'], $vertex2['lat']) and $vertex1['lon'] != $vertex2['lon']) { 
                $xinters = ($lon - $vertex1['lon']) * ($vertex2['lat'] - $vertex1['lat']) / ($vertex2['lon'] - $vertex1['lon']) + $vertex1['lat']; 
//                if ($xinters == $point['x']) {
//                    return "boundary";
//                }
                if ($vertex1['lat'] == $vertex2['lat'] || $lat <= $xinters) {
                    $intersections++; 
                }
            } 
        }
        if ($intersections % 2 != 0) {
            return true;
        } else {
            return false;
        }
    }
}
