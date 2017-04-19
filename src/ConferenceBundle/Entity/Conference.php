<?php

namespace ConferenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conference
 *
 * @ORM\Table(name="conference")
 * @ORM\Entity(repositoryClass="ConferenceBundle\Repository\ConferenceRepository")
 */
class Conference
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_on", type="datetime")
     */
    private $createOn;

    /**
     * @var bool
     *
     * @ORM\Column(name="must_visit", type="boolean")
     */
    private $mustVisit;

    /**
     * @var int
     *
     * @ORM\Column(name="venue_id", type="integer")
     */
    private $venueId;

    /**
     * @var int
     *
     * @ORM\Column(name="lecture_id", type="integer")
     */
    private $lectureId;

    /**
     * @var int
     *
     * @ORM\Column(name="break_id", type="integer")
     */
    private $breakId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;


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
     * Set title
     *
     * @param string $title
     *
     * @return Conference
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Conference
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
     * Set createOn
     *
     * @param \DateTime $createOn
     *
     * @return Conference
     */
    public function setCreateOn($createOn)
    {
        $this->createOn = $createOn;

        return $this;
    }

    /**
     * Get createOn
     *
     * @return \DateTime
     */
    public function getCreateOn()
    {
        return $this->createOn;
    }

    /**
     * Set mustVisit
     *
     * @param boolean $mustVisit
     *
     * @return Conference
     */
    public function setMustVisit($mustVisit)
    {
        $this->mustVisit = $mustVisit;

        return $this;
    }

    /**
     * Get mustVisit
     *
     * @return bool
     */
    public function getMustVisit()
    {
        return $this->mustVisit;
    }

    /**
     * Set venueId
     *
     * @param integer $venueId
     *
     * @return Conference
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

    /**
     * Set lectureId
     *
     * @param integer $lectureId
     *
     * @return Conference
     */
    public function setLectureId($lectureId)
    {
        $this->lectureId = $lectureId;

        return $this;
    }

    /**
     * Get lectureId
     *
     * @return int
     */
    public function getLectureId()
    {
        return $this->lectureId;
    }

    /**
     * Set breakId
     *
     * @param integer $breakId
     *
     * @return Conference
     */
    public function setBreakId($breakId)
    {
        $this->breakId = $breakId;

        return $this;
    }

    /**
     * Get breakId
     *
     * @return int
     */
    public function getBreakId()
    {
        return $this->breakId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Conference
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }
}

