<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClientRepository")
 */
class Client
{
    /**
     * @ORM\OneToMany(targetEntity="Activity", mappedBy="client")
     */
    private $activities;

     /**
     * @ORM\OneToMany(targetEntity="Theme", mappedBy="client")
     */
    private $themes;

    public function __construct()
    {
        $this->activities = new ArrayCollection();
        $this->themes = new ArrayCollection();
    }
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
     * @ORM\Column(name="plantTo", type="string", length=255)
     */
    private $plantTo;

    /**
     * @var int
     *
     * @ORM\Column(name="clientOrder", type="integer")
     */
    private $clientOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="formActivated", type="integer")
     */
    private $formActivated;

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
     * @return Client
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
     * Set plantTo
     *
     * @param string $plantTo
     *
     * @return Client
     */
    public function setPlantTo($plantTo)
    {
        $this->plantTo = $plantTo;

        return $this;
    }

    /**
     * Get plantTo
     *
     * @return string
     */
    public function getPlantTo()
    {
        return $this->plantTo;
    }

    /**
     * Set clientOrder
     *
     * @param integer $clientOrder
     *
     * @return Client
     */
    public function setClientOrder($clientOrder)
    {
        $this->clientOrder = $clientOrder;

        return $this;
    }

    /**
     * Get clientOrder
     *
     * @return int
     */
    public function getClientOrder()
    {
        return $this->clientOrder;
    }

    /**
     * Set formActivated
     *
     * @param integer $formActivated
     *
     * @return Client
     */
    public function setFormActivated($formActivated)
    {
        $this->formActivated = $formActivated;

        return $this;
    }

    /**
     * Get formActivated
     *
     * @return int
     */
    public function getFormActivated()
    {
        return $this->formActivated;
    }

    /**
     * Set imageH
     *
     * @param string $imageH
     *
     * @return Client
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
     * @return Client
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
}

