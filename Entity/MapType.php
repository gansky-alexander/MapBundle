<?php

namespace Gansky\MapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MapType
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MapType
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

     /**
     * @ORM\OneToMany(targetEntity="Gansky\MapBundle\Entity\MapTypeValue", mappedBy="mapType")
     */
    private $mapTypeValue;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mapTypeValue = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set name
     *
     * @param string $name
     * @return MapType
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add mapTypeValue
     *
     * @param \Gansky\MapBundle\Entity\MapTypeValue $mapTypeValue
     * @return MapType
     */
    public function addMapTypeValue(\Gansky\MapBundle\Entity\MapTypeValue $mapTypeValue)
    {
        $this->mapTypeValue[] = $mapTypeValue;
    
        return $this;
    }

    /**
     * Remove mapTypeValue
     *
     * @param \Gansky\MapBundle\Entity\MapTypeValue $mapTypeValue
     */
    public function removeMapTypeValue(\Gansky\MapBundle\Entity\MapTypeValue $mapTypeValue)
    {
        $this->mapTypeValue->removeElement($mapTypeValue);
    }

    /**
     * Get mapTypeValue
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMapTypeValue()
    {
        return $this->mapTypeValue;
    }
}