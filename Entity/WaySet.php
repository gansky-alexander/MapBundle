<?php

namespace Gansky\MapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WaySet - poin set for way.
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class WaySet
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
     * @ORM\ManyToOne(targetEntity="Gansky\MapBundle\Entity\Point", inversedBy="waySet") 
     */
    private $point;

    /**
     * @ORM\ManyToOne(targetEntity="Gansky\MapBundle\Entity\Way", inversedBy="waySet") 
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
     * Set point
     *
     * @param \Gansky\MapBundle\Entity\Point $point
     * @return WaySet
     */
    public function setPoint(\Gansky\MapBundle\Entity\Point $point = null)
    {
        $this->point = $point;
    
        return $this;
    }

    /**
     * Get point
     *
     * @return \Gansky\MapBundle\Entity\Point 
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * Set way
     *
     * @param \Gansky\MapBundle\Entity\Way $way
     * @return WaySet
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