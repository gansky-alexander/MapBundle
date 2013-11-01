<?php

namespace Gansky\MapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Way - name of point sets.
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Way
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * Level of the map.
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @ORM\OneToMany(targetEntity="Gansky\MapBundle\Entity\WaySet", mappedBy="way")
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
     * Set name
     *
     * @param string $name
     * @return Way
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
     * @return Way
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
     * Set level
     *
     * @param integer $level
     * @return Way
     */
    public function setLevel($level)
    {
        $this->level = $level;
    
        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }
}