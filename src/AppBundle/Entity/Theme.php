<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Them
 *
 * @ORM\Table(name="them")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ThemRepository")
 */
class Theme
{
    
    /**
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="themes")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;


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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="imageH", type="string", length=255)
     */
    private $imageH;

    /**
     * @var string
     *
     * @ORM\Column(name="imageV", type="string", length=255)
     */
    private $imageV;

    /**
     * @var string
     *
     * @ORM\Column(name="lastUpdatedBy", type="string", length=255)
     */
    private $lastUpdatedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="lastUpdatedAt", type="string", length=255)
     */
    private $lastUpdatedAt;


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
     * Set name
     *
     * @param string $name
     *
     * @return Them
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
     * Set imageH
     *
     * @param string $imageH
     *
     * @return Them
     */
    public function setImageH($imageH)
    {
        $this->imageH = $imageH;

        return $this;
    }

    /**
     * Get imageH
     *
     * @return string
     */
    public function getImageH()
    {
        return $this->imageH;
    }

    /**
     * Set imageV
     *
     * @param string $imageV
     *
     * @return Them
     */
    public function setImageV($imageV)
    {
        $this->imageV = $imageV;

        return $this;
    }

    /**
     * Get imageV
     *
     * @return string
     */
    public function getImageV()
    {
        return $this->imageV;
    }

    /**
     * Set lastUpdatedBy
     *
     * @param string $lastUpdatedBy
     *
     * @return Them
     */
    public function setLastUpdatedBy($lastUpdatedBy)
    {
        $this->lastUpdatedBy = $lastUpdatedBy;

        return $this;
    }

    /**
     * Get lastUpdatedBy
     *
     * @return string
     */
    public function getLastUpdatedBy()
    {
        return $this->lastUpdatedBy;
    }

    /**
     * Set lastUpdatedAt
     *
     * @param string $lastUpdatedAt
     *
     * @return Them
     */
    public function setLastUpdatedAt($lastUpdatedAt)
    {
        $this->lastUpdatedAt = $lastUpdatedAt;

        return $this;
    }

    /**
     * Get lastUpdatedAt
     *
     * @return string
     */
    public function getLastUpdatedAt()
    {
        return $this->lastUpdatedAt;
    }
}

