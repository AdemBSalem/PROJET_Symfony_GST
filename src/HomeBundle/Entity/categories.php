<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="HomeBundle\Repository\categoriesRepository")
 */
class categories
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
     * @ORM\Column(name="nomCat", type="string", length=255)
     */
    private $nomCat;

    /**
     * @var text
     *
     * @ORM\Column(name="Description", type="text", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="imgCat", type="string", length=255)
     */
    private $imgCat;


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
     * Set nomCat
     *
     * @param string $nomCat
     *
     * @return categories
     */
    public function setNomCat($nomCat)
    {
        $this->nomCat = $nomCat;

        return $this;
    }

    /**
     * Get nomCat
     *
     * @return string
     */
    public function getNomCat()
    {
        return $this->nomCat;
    }

    /**
     * Set description
     *
     * @param text $description
     *
     * @return categories
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return text
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set imgCat
     *
     * @param string $imgCat
     *
     * @return categories
     */
    public function setImgCat($imgCat)
    {
        $this->imgCat = $imgCat;

        return $this;
    }

    /**
     * Get imgCat
     *
     * @return string
     */
    public function getImgCat()
    {
        return $this->imgCat;
    }
}

