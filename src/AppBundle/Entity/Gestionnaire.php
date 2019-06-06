<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gestionnaire
 *
 * @ORM\Table(name="gestionnaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GestionnaireRepository")
 */
class Gestionnaire
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
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100)
     */
    private $prenom;

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
     * @return Gestionnaire
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


    //********* Route *****//
    /**
     * @ORM\ManyToOne (targetEntity="Administrateur",inversedBy="gestionnaires")
     * @ORM\JoinColumn(name="administrateur_id", referencedColumnName="id")
     */
    private $administrateur;


    /**
    * @ORM\ManyToMany(targetEntity="Vehicule", inversedBy="gestionnaires")
    */
        private $vehicules;







    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vehicules = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set prenom.
     *
     * @param string $prenom
     *
     * @return Gestionnaire
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set administrateur.
     *
     * @param \AppBundle\Entity\Administrateur|null $administrateur
     *
     * @return Gestionnaire
     */
    public function setAdministrateur(\AppBundle\Entity\Administrateur $administrateur = null)
    {
        $this->administrateur = $administrateur;

        return $this;
    }

    /**
     * Get administrateur.
     *
     * @return \AppBundle\Entity\Administrateur|null
     */
    public function getAdministrateur()
    {
        return $this->administrateur;
    }

    /**
     * Add vehicule.
     *
     * @param \AppBundle\Entity\Vehicule $vehicule
     *
     * @return Gestionnaire
     */
    public function addVehicule(\AppBundle\Entity\Vehicule $vehicule)
    {
        $this->vehicules[] = $vehicule;

        return $this;
    }

    /**
     * Remove vehicule.
     *
     * @param \AppBundle\Entity\Vehicule $vehicule
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeVehicule(\AppBundle\Entity\Vehicule $vehicule)
    {
        return $this->vehicules->removeElement($vehicule);
    }

    /**
     * Get vehicules.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVehicules()
    {
        return $this->vehicules;
    }
}
