<?php
namespace Test\UserBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Sluggable\Fixture\Issue939\Article;
use Test\UserBundle\Entity\User;
use Test\BlogBundle\Entity\Article as bob;
use Doctrine\Common\DataFixtures\AbstractFixture;

/**
 * Created by PhpStorm.
 * User: hx
 * Date: 11/11/15
 * Time: 16:45
 */
class Users extends AbstractFixture implements \Doctrine\Common\DataFixtures\FixtureInterface,OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager Object manager
     *
     * @return void
     */
    public function load(ObjectManager $manager)
    {
        $adminUser = new User();
        $adminUser

            ->setUserName('admin')
            ->setEmail('admin@monsite.tld')
            ->setEnabled(true)
            ->setPlainPassword('admin')
            ->setLocked(false)
            ->addRole('ROLE_ADMIN'); // Pas obligé, vu que son groupe l'a, mais c'est la
        // définition de ce compte
        $manager->persist($adminUser);
        $manager->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 2;
    }

}