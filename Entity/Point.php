<?php

namespace Gansky\MapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Point - coordinate point.
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Point
{
    /**
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\Column(name="bk", type="integer")
     */
    private $bk;
	
    /**
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

	
    /**
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;

    /**
     * @ORM\OneToMany(targetEntity="Gansky\MapBundle\Entity\WaySet", mappedBy="point")
     */
    private $waySet;

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
     * Set latitude
     *
     * @param float $latitude
     * @return Point
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    
        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Point
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    
        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->waySet = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add waySet
     *
     * @param \Gansky\MapBundle\Entity\WaySet $waySet
     * @return Point
     */
    public function addWaySet(\Gansky\MapBundle\Entity\WaySet $waySet)
    {
        $this->waySet[] = $waySet;
    
        return $this;
    }

    /**
     * Remove waySet
     *
     * @param \Gansky\MapBundle\Entity\WaySet $waySet
     */
    public function removeWaySet(\Gansky\MapBundle\Entity\WaySet $waySet)
    {
        $this->waySet->removeElement($waySet);
    }

    /**
     * Get waySet
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getWaySet()
    {
        return $this->waySet;
    }

    /**
     * Set bk
     *
     * @param integer $bk
     * @return Point
     */
    public function setBk($bk)
    {
        $this->bk = $bk;
    
        return $this;
    }

    /**
     * Get bk
     *
     * @return integer 
     */
    public function getBk()
    {
        return $this->bk;
    }
}