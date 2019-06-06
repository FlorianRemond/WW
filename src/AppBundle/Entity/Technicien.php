<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Technicien
 *
 * @ORM\Table(name="technicien")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TechnicienRepository")
 */
class Technicien
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
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Technicien
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }


    //********* liaison des bdd *****//
    /**
     * @ORM\ManyToOne (targetEntity="Administrateur",inversedBy="techniciens")
     * @ORM\JoinColumn(name="administrateur_id", referencedColumnName="id")
     */
    private $administrateur;

    /**
     * @ORM\ManyToMany(targetEntity="Vehicule", inversedBy="techniciens")
     */
    private $vehicules;

    /**
     * @ORM\ManyToMany(targetEntity="Operation", inversedBy="techniciens")
     */
    private $operations;


}

