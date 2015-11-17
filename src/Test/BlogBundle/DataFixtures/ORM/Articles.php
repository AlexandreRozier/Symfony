<?php

namespace Test\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Test\BlogBundle\Entity\Article as bob;

use Test\BlogBundle\Entity\Categorie;
use Test\UserBundle\Entity\User;

class Articles implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $nom = 'Hx';
        $user= new User();
        $user->setUsername($nom);
        $user->setPassword('test');
        $user->setEmail('test@foo.com');
        $user->setRoles(array('ROLE_AUTEUR'));
        $user->setEnabled(true);


        $article1=new bob();

        $categorie=new Categorie();
        $categorie->setNom("Production de qualité");

        $article1
            ->setTitre('Mon week-end à la mer')
            ->setAuteur($user)
            ->setPublication(false)
            ->setDateEdition(new \DateTime)
            ->addCategory($categorie)
            ->setContenu('C\'était génial !');

        $article2=new bob();
        $categorie2=new Categorie();
        $categorie2->setNom("Blabla inutile");
        $article2
            ->setTitre('Mon week-end à la montagne')
            ->setAuteur($user)
            ->setPublication(false)
            ->setDateEdition(new \DateTime)
            ->addCategory($categorie2)
            ->setContenu('C\'était encore plus trop bien !');

        $article3=new bob();
        $categorie3=new Categorie();
        $categorie3->setNom("Récits de voyage");
        $article3
            ->setTitre('Mon week-end à la plage')
            ->setAuteur($user)
            ->setPublication(false)
            ->setDateEdition(new \DateTime)
            ->addCategory($categorie3)
            ->setContenu('C\'était encore plus trop bien !');

        $categorie4=new Categorie();
        $categorie4->setNom("Mes vacances");
        $article4=new bob();
        $article4
            ->setTitre('Mon week-end au lac')
            ->setAuteur($user)
            ->setPublication(false)
            ->setDateEdition(new \DateTime)
            ->addCategory($categorie4)
            ->setContenu('C\'était encore plus trop bien !');

        $manager->persist($user);
        $manager->persist($article1);
        $manager->persist($article2);
        $manager->persist($article3);
        $manager->persist($article4);
        $manager->flush();



    }
}
