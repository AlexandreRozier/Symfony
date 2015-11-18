<?php

namespace Test\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MainController extends Controller
{

    public function indexAction()
    {
        return $this->render('TestMainBundle:Main:index.html.twig');
    }

    public function redirectAction()
    {


        return $this->redirect('http://people.via.ecp.fr/~hx/');

    }
}
