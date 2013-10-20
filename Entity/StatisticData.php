<?php

namespace Gansky\MapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatisticData
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class StatisticData {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="value", type="decimal")
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity="Gansky\MapBundle\Entity\MapType", inversedBy="statisticData")
     */
    private $mapType;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set value
     *
     * @param float $value
     * @return StatisticData
     */
    public function setValue($value) {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return float 
     */
    public function getValue() {
        return $this->value;
    }


    /**
     * Set mapType
     *
     * @param \Gansky\MapBundle\Entity\MapType $mapType
     * @return StatisticData
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
}