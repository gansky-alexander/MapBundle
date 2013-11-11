<?php

namespace Gansky\MapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MapTypeValue
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MapTypeValue
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=6)
     */
    private $color;

    /**
     * @ORM\ManyToOne(targetEntity="Gansky\MapBundle\Entity\MapType", inversedBy="mapTypeValue") 
     */
    private $mapType;

    /**
     * @ORM\ManyToOne(targetEntity="Gansky\MapBundle\Entity\Way", inversedBy="mapTypeValue") 
     */
    private $way;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return MapTypeValue
     */
    public function setColor($color)
    {
        $this->color = $color;
    
        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set mapType
     *
     * @param \Gansky\MapBundle\Entity\MapType $mapType
     * @return MapTypeValue
     */
    public function setMapType(\Gansky\MapBundle\Entity\MapType $mapType = null)
    {
        $this->mapType = $mapType;
    
        return $this;
    }

    /**
     * Get mapType
     *
     * @return \Gansky\MapBundle\Entity\MapType 
     */
    public function getMapType()
    {
        return $this->mapType;
    }

    /**
     * Set way
     *
     * @param \Gansky\MapBundle\Entity\Way $way
     * @return MapTypeValue
     */
    public function setWay(\Gansky\MapBundle\Entity\Way $way = null)
    {
        $this->way = $way;
    
        return $this;
    }

    /**
     * Get way
     *
     * @return \Gansky\MapBundle\Entity\Way 
     */
    public function getWay()
    {
        return $this->way;
    }
}