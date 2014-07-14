<?php

namespace A6\CodeceptIsAwesomeBundle\Controller;

use A6\UserBundle\Form\Type\ProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecuredAreaController extends Controller
{
    public function securedIndexAction()
    {
        $form = $this->createForm(new ProfileType());

        return $this->render('A6CodeceptIsAwesomeBundle::securedIndex.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
