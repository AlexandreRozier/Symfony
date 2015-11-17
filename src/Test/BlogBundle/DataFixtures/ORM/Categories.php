<?php

namespace Test\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Test\BlogBundle\Entity\Categorie;

class Categories implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $noms = array('Symfony2','Doctrine2','Tutoriel','Evenement');
    foreach ($noms as $i => $nom) {
      $liste_categories[$i] = new Categorie();
      $liste_categories[$i]->setNom($nom);
      $manager->persist($liste_categories[$i]);
    }
    $manager->flush();
  }
}
