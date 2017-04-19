<?php

namespace ConferenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Break
 *
 * @ORM\Table(name="break")
 * @ORM\Entity(repositoryClass="ConferenceBundle\Repository\BreakRepository")
 */
class Break
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
     * @var \DateTime
     *
     * @ORM\Column(name="begin", type="datetime")
     */
    private $begin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="datetime")
     */
    private $end;

    /**
     * @var int
     *
     * @ORM\Column(name="conf_id", type="integer")
     */
    private $confId;


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
     * Set begin
     *
     * @param \DateTime $begin
     *
     * @return Break
     */
    public function setBegin($begin)
    {
        $this->begin = $begin;

        return $this;
    }

    /**
     * Get begin
     *
     * @return \DateTime
     */
    public function getBegin()
    {
        return $this->begin;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return Break
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set confId
     *
     * @param integer $confId
     *
     * @return Break
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
}

