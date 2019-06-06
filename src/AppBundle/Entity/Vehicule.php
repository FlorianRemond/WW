<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VehiculeRepository")
 */
class Vehicule
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
     * @ORM\Column(name="type", type="string", length=100)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAchat", type="datetime")
     */
    private $dateAchat;

    /**
     * @var string
     *
     * @ORM\Column(name="operation", type="string", length=255)
     */
    private $operation;


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
     * Set type
     *
     * @param string $type
     *
     * @return Vehicule
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set dateAchat
     *
     * @param \DateTime $dateAchat
     *
     * @return Vehicule
     */
    public function setDateAchat($dateAchat)
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    /**
     * Get dateAchat
     *
     * @return \DateTime
     */
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    /**
     * Set operation
     *
     * @param string $operation
     *
     * @return Vehicule
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * Get operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**************liaison bdd*******/
    /**
     * @ORM\ManyToMany(targetEntity="Technicien", inversedBy="vehicules")
     */
    private $techniciens;

    /**
     * @ORM\ManyToMany(targetEntity="Gestionnaire", inversedBy="vehicules")
     */
    private $gestionnaire;


}

