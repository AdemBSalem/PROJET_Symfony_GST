<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity(repositoryClass="HomeBundle\Repository\ServiceRepository")
 */
class Service
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
     * @ORM\Column(name="TitreService", type="string", length=255)
     */
    private $titreService;

    /**
     * @var int
     *
     * @ORM\Column(name="CodeCategorie", type="integer")
     */
    private $codeCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="DescriptionService", type="string", length=255)
     */
    private $descriptionService;


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
     * Set titreService
     *
     * @param string $titreService
     *
     * @return Service
     */
    public function setTitreService($titreService)
    {
        $this->titreService = $titreService;

        return $this;
    }

    /**
     * Get titreService
     *
     * @return string
     */
    public function getTitreService()
    {
        return $this->titreService;
    }

    /**
     * Set codeCategorie
     *
     * @param integer $codeCategorie
     *
     * @return Service
     */
    public function setCodeCategorie($codeCategorie)
    {
        $this->codeCategorie = $codeCategorie;

        return $this;
    }

    /**
     * Get codeCategorie
     *
     * @return int
     */
    public function getCodeCategorie()
    {
        return $this->codeCategorie;
    }

    /**
     * Set descriptionService
     *
     * @param string $descriptionService
     *
     * @return Service
     */
    public function setDescriptionService($descriptionService)
    {
        $this->descriptionService = $descriptionService;

        return $this;
    }

    /**
     * Get descriptionService
     *
     * @return string
     */
    public function getDescriptionService()
    {
        return $this->descriptionService;
    }
}

