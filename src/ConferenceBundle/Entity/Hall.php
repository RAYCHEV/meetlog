<?php

namespace ConferenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hall
 *
 * @ORM\Table(name="hall")
 * @ORM\Entity(repositoryClass="ConferenceBundle\Repository\HallRepository")
 */
class Hall
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="hall_name", type="string", length=255)
     */
    private $hallName;

    /**
     * @var int
     *
     * @ORM\Column(name="capacity", type="integer")
     */
    private $capacity;

    /**
     * @var int
     *
     * @ORM\Column(name="venue_id", type="integer")
     */
    private $venueId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set hallName
     *
     * @param string $hallName
     *
     * @return Hall
     */
    public function setHallName($hallName)
    {
        $this->hallName = $hallName;

        return $this;
    }

    /**
     * Get hallName
     *
     * @return string
     */
    public function getHallName()
    {
        return $this->hallName;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return Hall
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return int
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set venueId
     *
     * @param integer $venueId
     *
     * @return Hall
     */
    public function setVenueId($venueId)
    {
        $this->venueId = $venueId;

        return $this;
    }

    /**
     * Get venueId
     *
     * @return int
     */
    public function getVenueId()
    {
        return $this->venueId;
    }
}

