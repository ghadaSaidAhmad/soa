<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brand
 *
 * @ORM\Table(name="brand")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BrandRepository")
 */
class Brand
{
    /**
     * @ORM\OneToMany(targetEntity="Activity", mappedBy="brand")
     */
    private $activities;

    public function __construct()
    {
        $this->activities = new ArrayCollection();
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
     * @ORM\Column(name="shortName", type="string", length=255)
     */
    private $shortName;

    /**
     * @var int
     *
     * @ORM\Column(name="brandOrder", type="integer")
     */
    private $brandOrder;

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
     * @return Brand
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
     * Set shortName
     *
     * @param string $shortName
     *
     * @return Brand
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get shortName
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set brandOrder
     *
     * @param integer $brandOrder
     *
     * @return Brand
     */
    public function setBrandOrder($brandOrder)
    {
        $this->brandOrder = $brandOrder;

        return $this;
    }

    /**
     * Get brandOrder
     *
     * @return int
     */
    public function getBrandOrder()
    {
        return $this->brandOrder;
    }

    /**
     * Set imageH
     *
     * @param string $imageH
     *
     * @return Brand
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
     * @return Brand
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

