<?php

namespace Test\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Test\BlogBundle\Validator\AntiFlood;


/**
* Commentaire
*
* @ORM\Table()
* @ORM\Entity(repositoryClass="Test\BlogBundle\Entity\CommentaireRepository")
*/
class Commentaire
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
  * [$article description]
  * @var [type]
  * @ORM\ManyToOne(targetEntity="Test\BlogBundle\Entity\Article", inversedBy="article")
  * @ORM\JoinColumn(nullable=false)
  */
  private $article;

  /**
  * @var string
  *
  * @ORM\Column(name="auteur", type="string", length=255)
  */
  private $auteur;


  /**
  * @var string
  * @AntiFlood()
  * @ORM\Column(name="contenu", type="string", length=255)
  */
  private $contenu;

  /**
   * @ORM\PrePersist
   */
  public function increase()
  {
    $nbCommentaires = $this->getArticle()->getNbCommentaires();
    $this->getArticle()->setNbCommentaires($nbCommentaires+1);
  }

  /**
   * @ORM\PreRemove
   */
  public function decrease()
  {
    $nbCommentaires = $this->getArticle()->getNbCommentaires();
    $this->getArticle()->setNbCommentaires($nbCommentaires-1);
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
  * Set contenu
  *
  * @param string $contenu
  *
  * @return Commentaire
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
  * Set article
  *
  * @param \Test\BlogBundle\Entity\Article $article
  *
  * @return Commentaire
  */
  public function setArticle(\Test\BlogBundle\Entity\Article $article)
  {
    $this->article = $article;

    return $this;
  }

  /**
  * Get article
  *
  * @return \Test\BlogBundle\Entity\Article
  */
  public function getArticle()
  {
    return $this->article;
  }

    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Commentaire
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

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
}
