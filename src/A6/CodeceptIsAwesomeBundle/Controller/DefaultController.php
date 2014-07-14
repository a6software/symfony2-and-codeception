<?php

namespace A6\CodeceptIsAwesomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('A6CodeceptIsAwesomeBundle:Default:index.html.twig', array('name' => $name));
    }
}
