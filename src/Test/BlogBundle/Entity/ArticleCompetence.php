<?php

namespace Test\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleCompetence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Test\BlogBundle\Entity\ArticleCompetenceRepository")
 */
class ArticleCompetence
{


    /**
     *@ORM\Id
     *@ORM\ManyToOne(targetEntity="Test\BlogBundle\Entity\Article")
     *
     */
    private $article;

    /**
     *@ORM\Id
     *@ORM\ManyToOne(targetEntity="Test\BlogBundle\Entity\Competence")
     * 
     */
    private $competence;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=255)
     */
    private $niveau;


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
     * Set article
     *
     * @param string $article
     *
     * @return ArticleCompetence
     */
    public function setArticle($article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return string
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set competence
     *
     * @param string $competence
     *
     * @return ArticleCompetence
     */
    public function setCompetence($competence)
    {
        $this->competence = $competence;

        return $this;
    }

    /**
     * Get competence
     *
     * @return string
     */
    public function getCompetence()
    {
        return $this->competence;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     *
     * @return ArticleCompetence
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
}
