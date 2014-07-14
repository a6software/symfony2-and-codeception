<?php

namespace A6\CodeceptIsAwesomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        $variable = 'Hello';

        return $this->render('A6CodeceptIsAwesomeBundle::index.html.twig', array(
            'ourText'   => $variable
        ));
    }
}
