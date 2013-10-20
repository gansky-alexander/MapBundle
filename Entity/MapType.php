<?php

namespace Gansky\MapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MapType
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MapType {

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
     * @var string
     * @ORM\Column(name="color", type="string", length=8)
     */
    private $color;

    /**
     * @ORM\OneToMany(targetEntity="Gansky\MapBundle\Entity\StatisticData", mappedBy="mapType")
     */
    private $statisticData;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MapType
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->statisticData = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set color
     *
     * @param string $color
     * @return MapType
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
     * Add statisticData
     *
     * @param \Gansky\MapBundle\Entity\StatisticData $statisticData
     * @return MapType
     */
    public function addStatisticData(\Gansky\MapBundle\Entity\StatisticData $statisticData)
    {
        $this->statisticData[] = $statisticData;
    
        return $this;
    }

    /**
     * Remove statisticData
     *
     * @param \Gansky\MapBundle\Entity\StatisticData $statisticData
     */
    public function removeStatisticData(\Gansky\MapBundle\Entity\StatisticData $statisticData)
    {
        $this->statisticData->removeElement($statisticData);
    }

    /**
     * Get statisticData
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStatisticData()
    {
        return $this->statisticData;
    }
}