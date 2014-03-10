<?php

namespace Map2u\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Map2uWebBundle:Default:index.html.twig', array('name' => $name));
    }
}
