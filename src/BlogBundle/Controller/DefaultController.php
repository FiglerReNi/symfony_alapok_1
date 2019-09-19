<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="default_route")
     */
    public function indexAction()
    {
        return $this->render('@Blog\Default\index.html.twig');
    }


    /**
     * @Route("/home", name="home_route")
     */
    public function HomeAction()
    {
        return $this->render('@Blog\Default\index.html.twig');
    }
}
