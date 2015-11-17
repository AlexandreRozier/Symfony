<?php

namespace Test\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Test\BlogBundle\Entity\ArticleRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Article
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
     * Relation one to one avec image
     * @ORM\OneToOne(targetEntity="Test\BlogBundle\Entity\Image",cascade={"persist","remove"})
     * @var Image
     * @Assert\Valid()
     */
    private $image;



    /**
     *[$commentaires description]
     *@ORM\OneToMany(targetEntity="Test\BlogBundle\Entity\Commentaire",mappedBy="article")
     *
     */
    private $commentaires;



    /**
     * Indique si l'article apparaît sur l'accueil ou non.
     * @var [type]
     *
     * @ORM\Column(name="publication", type="boolean",nullable=true)
     */
    private $publication;

    /**
     *
     * @ORM\ManyToMany(targetEntity="Categorie", inversedBy="articles",cascade={"persist","remove"})
     * @ORM\JoinTable(
     *     name="categorie_article",
     *     joinColumns={@ORM\JoinColumn(name="article_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="categorie_id",
     * referencedColumnName="id")}
     * )
     */
    private $categories;





    /**
     * @Gedmo\Slug(fields={"titre"})
     * @ORM\Column(length=128, unique=true)
     *
     */
    private $slug;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     * @Assert\DateTime()
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     * @Assert\Length(min = 10)
     */
    private $titre;

    /**
     *
     * @ORM\ManyToOne(targetEntity="\Test\UserBundle\Entity\User", inversedBy="articles")
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     * @Assert\NotBlank()
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEdition", type="datetime")
     */
    private $dateEdition;

    /**
     * Permet de mettre la date actuelle automatiquement lors de la
     * création de l'article.
     */
    public function __construct()
    {
        $this->date = new \DateTime();
        $this->dateEdition = new \DateTime();
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();



    }

    /**
     * @ORM\PreUpdate
     */
    public function updateDate()
    {
        $this->setDateEdition(new \DateTime());
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
     * Set date
     *
     * @param \DateTime $date
     * @return Article
     */
    public function setDate($date)
    {

        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Article
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        $auteur->addArticle($this);

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Article
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set publication
     *
     * @param boolean $publication
     *
     * @return Article
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return boolean
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Set image
     *
     * @param \Test\BlogBundle\Entity\Image $image
     *
     * @return Article
     */
    public function setImage(\Test\BlogBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }



    /**
     * Get image
     *
     * @return \Test\BlogBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }




    /**
     * Add commentaire
     *
     * @param \Test\BlogBundle\Entity\Commentaire $commentaire
     *
     * @return Article
     */
    public function addCommentaire(\Test\BlogBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires[] = $commentaire;
        $commentaire->setArticle($this);
        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \Test\BlogBundle\Commentaire $commentaire
     */
    public function removeCommentaire(\Test\BlogBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires->removeElement($commentaire);
        // Pas besoin d'enlever l'article au commentaire, on a mis nullable = true.
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set dateEdition
     *
     * @param \DateTime $dateEdition
     *
     * @return Article
     */
    public function setDateEdition($dateEdition)
    {
        $this->dateEdition = $dateEdition;

        return $this;
    }

    /**
     * Get dateEdition
     *
     * @return \DateTime
     */
    public function getDateEdition()
    {
        return $this->dateEdition;
    }



    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Article
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Add category
     *
     * @param Categorie $category
     *
     * @return Article
     */
    public function addCategory(Categorie $category)
    {
        $this->categories[] = $category;
        $category->addArticle($this);

        return $this;
    }

    /**
     * Remove category
     *
     * @param Categorie $category
     */
    public function removeCategory(Categorie $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
