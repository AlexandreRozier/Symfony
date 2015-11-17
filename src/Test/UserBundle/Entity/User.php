<?php

namespace Test\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Test\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\OneToMany(targetEntity="\Test\BlogBundle\Entity\Article", mappedBy="auteur", cascade={"remove","persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    protected $articles;

    public function __construct()
    {
        parent::__construct();
        $this->articles = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getArticles()
    {
        return $this->articles;
    }

    public function addArticle(\Test\BlogBundle\Entity\Article $article)
    {
        $this->articles[] = $article;
        return $this;
    }

    public function removeArticle(\Test\BlogBundle\Entity\Article $article)
    {
        $this->articles->removeElement($article);
    }



}
