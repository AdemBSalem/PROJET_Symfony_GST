<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table(name="demande")
 * @ORM\Entity(repositoryClass="HomeBundle\Repository\DemandeRepository")
 */
class Demande
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
     * @ORM\Column(name="TitreDemande", type="string", length=255)
     */
    private $titreDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionDemande", type="text")
     */
    private $descriptionDemande;

    /**
     * @var datetime
     *
     * @ORM\Column(name="dateIntervention", type="date")
     */
    private $dateIntervention;

    /**
     * @var datetime
     *
     * @ORM\Column(name="datePublication", type="date")
     */
    private $datePublication;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;


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
     * Set titreDemande
     *
     * @param string $titreDemande
     *
     * @return Demande
     */
    public function setTitreDemande($titreDemande)
    {
        $this->titreDemande = $titreDemande;

        return $this;
    }

    /**
     * Get titreDemande
     *
     * @return string
     */
    public function getTitreDemande()
    {
        return $this->titreDemande;
    }

    /**
     * Set descriptionDemande
     *
     * @param string $descriptionDemande
     *
     * @return Demande
     */
    public function setDescriptionDemande($descriptionDemande)
    {
        $this->descriptionDemande = $descriptionDemande;

        return $this;
    }

    /**
     * Get descriptionDemande
     *
     * @return string
     */
    public function getDescriptionDemande()
    {
        return $this->descriptionDemande;
    }

    /**
     * Set dateIntervention
     *
     * @param date $dateIntervention
     *
     * @return Demande
     */
    public function setDateIntervention($dateIntervention)
    {
        $this->dateIntervention = $dateIntervention;

        return $this;
    }

    /**
     * Get dateIntervention
     *
     * @return date
     */
    public function getDateIntervention()
    {
        return $this->dateIntervention;
    }

    /**
     * Set datePublication
     *
     * @param date $datePublication
     *
     * @return Demande
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return date
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Demande
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Demande
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
}
