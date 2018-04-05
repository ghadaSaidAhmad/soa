<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activity
 *
 * @ORM\Table(name="activity")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ActivityRepository")
 */
class Activity
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
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="activities")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;


    /**
     * @ORM\ManyToOne(targetEntity="Brand", inversedBy="activities")
     * @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     */
    private $brand;


    /**
     * @var int
     *
     * @ORM\Column(name="wYear", type="integer")
     */
    private $wYear;

    /**
     * @var int
     *
     * @ORM\Column(name="wMonth", type="integer")
     */
    private $wMonth;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="wHalf", type="integer")
     */
    private $wHalf;

    /**
     * @var int
     *
     * @ORM\Column(name="lastUpdateBy", type="integer")
     */
    private $lastUpdateBy;

    /**
     * @var int
     *
     * @ORM\Column(name="lastUpdateAt", type="integer")
     */
    private $lastUpdateAt;

    /**
     * @var int
     *
     * @ORM\Column(name="offer", type="integer")
     */
    private $offer;


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
     * Set wYear
     *
     * @param integer $wYear
     *
     * @return Activity
     */
    public function setWYear($wYear)
    {
        $this->wYear = $wYear;

        return $this;
    }

    /**
     * Get wYear
     *
     * @return int
     */
    public function getWYear()
    {
        return $this->wYear;
    }

    /**
     * Set wMonth
     *
     * @param integer $wMonth
     *
     * @return Activity
     */
    public function setWMonth($wMonth)
    {
        $this->wMonth = $wMonth;

        return $this;
    }

    /**
     * Get wMonth
     *
     * @return int
     */
    public function getWMonth()
    {
        return $this->wMonth;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Activity
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
     * Set wHalf
     *
     * @param integer $wHalf
     *
     * @return Activity
     */
    public function setWHalf($wHalf)
    {
        $this->wHalf = $wHalf;

        return $this;
    }

    /**
     * Get wHalf
     *
     * @return int
     */
    public function getWHalf()
    {
        return $this->wHalf;
    }

    /**
     * Set lastUpdateBy
     *
     * @param integer $lastUpdateBy
     *
     * @return Activity
     */
    public function setLastUpdateBy($lastUpdateBy)
    {
        $this->lastUpdateBy = $lastUpdateBy;

        return $this;
    }

    /**
     * Get lastUpdateBy
     *
     * @return int
     */
    public function getLastUpdateBy()
    {
        return $this->lastUpdateBy;
    }

    /**
     * Set lastUpdateAt
     *
     * @param integer $lastUpdateAt
     *
     * @return Activity
     */
    public function setLastUpdateAt($lastUpdateAt)
    {
        $this->lastUpdateAt = $lastUpdateAt;

        return $this;
    }

    /**
     * Get lastUpdateAt
     *
     * @return int
     */
    public function getLastUpdateAt()
    {
        return $this->lastUpdateAt;
    }

    /**
     * Set offer
     *
     * @param integer $offer
     *
     * @return Activity
     */
    public function setOffer($offer)
    {
        $this->offer = $offer;

        return $this;
    }

    /**
     * Get offer
     *
     * @return int
     */
    public function getOffer()
    {
        return $this->offer;
    }
}

