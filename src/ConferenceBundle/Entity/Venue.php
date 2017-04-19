<?php

namespace ConferenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Venue
 *
 * @ORM\Table(name="venue")
 * @ORM\Entity(repositoryClass="ConferenceBundle\Repository\VenueRepository")
 */
class Venue
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
     * @ORM\Column(name="venue_name", type="string", length=255)
     */
    private $venueName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="conf_id", type="integer")
     */
    private $confId;

    /**
     * @var int
     *
     * @ORM\Column(name="hall_id", type="integer")
     */
    private $hallId;


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
     * Set venueName
     *
     * @param string $venueName
     *
     * @return Venue
     */
    public function setVenueName($venueName)
    {
        $this->venueName = $venueName;

        return $this;
    }

    /**
     * Get venueName
     *
     * @return string
     */
    public function getVenueName()
    {
        return $this->venueName;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Venue
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set confId
     *
     * @param integer $confId
     *
     * @return Venue
     */
    public function setConfId($confId)
    {
        $this->confId = $confId;

        return $this;
    }

    /**
     * Get confId
     *
     * @return int
     */
    public function getConfId()
    {
        return $this->confId;
    }

    /**
     * Set hallId
     *
     * @param integer $hallId
     *
     * @return Venue
     */
    public function setHallId($hallId)
    {
        $this->hallId = $hallId;

        return $this;
    }

    /**
     * Get hallId
     *
     * @return int
     */
    public function getHallId()
    {
        return $this->hallId;
    }
}

