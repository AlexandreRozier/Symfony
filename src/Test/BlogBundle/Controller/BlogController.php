<?php

namespace Test\BlogBundle\Controller;

use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Test\BlogBundle\Entity\Article;
use Test\BlogBundle\Entity\Categorie;
use Test\BlogBundle\Entity\CategoryHolder;
use Test\BlogBundle\Form\ArticleEditType;
use Test\BlogBundle\Form\ArticleType;
use Test\BlogBundle\Form\CategoryHolderType;


class BlogController extends Controller
{
    /**
     * @param $page
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($page)
    {
        $articles = $this->getDoctrine()->getManager()
            ->getRepository('TestBlogBundle:Article')
            ->getArticles(3,$page);

        return $this->render('TestBlogBundle:Blog:index.html.twig',array(
            'articles'=>$articles,
            'page'=>$page,
            'nombrePage'=>ceil(count($articles)/3)
        ) );
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function categorySearchAction()
    {
        $ch = new CategoryHolder();
        $form = $this->createForm(new CategoryHolderType, $ch);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST')
        {
            $form->bind($request);
            if ($form->isValid()) {

                $selected_categories = $form->get('categories')->getData();

                $articles = array();


                    $articles[] = $this->getDoctrine()->getRepository('TestBlogBundle:Article')->findByCategory('symfony2');
               /* foreach ($selected_categories as $categorie){
                    $articles[] = $this->getDoctrine()->getRepository('TestBlogBundle:Article')->findByCategory($categorie);

                    return $this->render('TestBlogBundle:Blog:categorySearchResult.html.twig',array(
                        'articles'=>$articles
                    ));
                }*/


            }
        }
        return $this->render('TestBlogBundle:Blog:categorySearch.html.twig',
            array(
                'form'=>$form->createView(),
            ));
    }

    /**
     *
     */
    public function listeAction()
    {
        $listeArticles = $this->getDoctrine()->getManager()->getRepository('TestBlogBundle:Article')->getArticleAvecCommentaires();
        foreach ($listeArticles as $article)
        {
            $article->getCommentaires();
        }
    }

    public function voirAction(Article $article)
    {
        $listeArticleCompetence = $this->getDoctrine()->getManager()->getRepository('TestBlogBundle:ArticleCompetence')->findByArticle($article->getId());

        return $this->render('TestBlogBundle:Blog:voir.html.twig',
            array(
                'article'=>$article
            ));
    }

    /**
     * @Secure(roles="ROLE_AUTEUR ")
     */
    public function ajouterAction()
    {
        $article = new Article;
        $article->setAuteur($this->getUser());
        $form = $this->createForm(new ArticleType, $article);


        $request = $this->get('request');
        if ($request->getMethod() == 'POST')
        {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($article);
                $em->flush();
                $this->addFlash('info','Article ajouté !');

                return $this->render('TestBlogBundle:Blog:voir.html.twig',
                    array(
                        'article' => $article
                    ));
            }
        }
        return $this->render('TestBlogBundle:Blog:ajouter.html.twig',
            array(
                'form'=>$form->createView(),
            ));
    }

    /**
     * @Secure(roles="ROLE_AUTEUR ")
     */
    public function modifierAction($id)
    {

        $request = $this->get('request');
        $em = $this->getDoctrine()->getManager();
        $article = $em ->getRepository('TestBlogBundle:Article')->find($id);

        if ($article === null) {
            throw $this->createNotFoundException('Article [id='.$id.'] inexistant');
        }
        $form = $this->createForm(new ArticleEditType, $article);
        if ($request->getMethod()=='POST')
        {

            $form->bind($request);
            if ($form->isValid()) {

                $em->persist($article);
                $em->flush();
                $this->addFlash('info','Article modifié');

                return $this->redirect($this->generateUrl('blog_voir',array('id'=>$article->getId())));
            }
        }
        return $this->render('TestBlogBundle:Blog:modifier.html.twig',
            array(
                'article'=>$article,
                'form'=>$form->createView(),
            ));
    }
    /**
     * @Secure(roles="ROLE_ADMIN")
     */
    public function supprimerAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('TestBlogBundle:Article')->findById($id);
        $form = $this->createFormBuilder()->getForm();
        $request = $this->getRequest();
        if ($request->getMethod() =='POST'){
            $form->bind($request);
            if($form->isValid()){

                if ($article ===null) {
                    throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
                }

                $em->remove($article);
                $em->flush();
                $this->addFlash('danger','Article supprimé');
                return $this->redirect($this->generateUrl('blog_accueil',array('page'=>1)));
            }
        }
        return $this->render('TestBlogBundle:Blog:supprimer.html.twig',
            array(
                'article'=>$article,
                'form'=>$form->createView()
            ));

    }

    public function menuAction($articles_number)
    {
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('TestBlogBundle:Article')->findAll();
        $liste = array();
        $size = count($articles);
        $maxIteration = min($size,$articles_number);
        for($i = 0; $i<$maxIteration;$i++){
            $article = $articles[$i];
            array_push($liste, array('id' => $article->getId(), 'titre' => $article->getTitre()));
        }
        return $this->render('TestBlogBundle:Blog:menu.html.twig',array('liste_articles'=>$liste));
    }


}
