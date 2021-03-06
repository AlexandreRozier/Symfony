<?php

namespace Test\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * Categorie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Test\BlogBundle\Entity\CategorieRepository")
 */
class Categorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="Article",mappedBy="categories", cascade={"persist"})
     */
    private $articles;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $nom;

    /**
     * @var categoryHolder
     *
     * @ORM\ManyToOne(targetEntity="Test\BlogBundle\Entity\CategoryHolder",inversedBy="categories")
     * @ORM\JoinColumn(nullable=true)
     */
    private $categoryHolder;

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Categorie
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

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Add article
     *
     * @param \Test\BlogBundle\Entity\Article $article
     *
     * @return Categorie
     */
    public function addArticle(\Test\BlogBundle\Entity\Article $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \Test\BlogBundle\Entity\Article $article
     */
    public function removeArticle(\Test\BlogBundle\Entity\Article $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set categoryHolder
     *
     * @param \Test\BlogBundle\Entity\CategoryHolder $categoryHolder
     *
     * @return Categorie
     */
    public function setCategoryHolder(\Test\BlogBundle\Entity\CategoryHolder $categoryHolder = null)
    {
        $this->categoryHolder = $categoryHolder;

        return $this;
    }

    /**
     * Get categoryHolder
     *
     * @return \Test\BlogBundle\Entity\CategoryHolder
     */
    public function getCategoryHolder()
    {
        return $this->categoryHolder;
    }
}
