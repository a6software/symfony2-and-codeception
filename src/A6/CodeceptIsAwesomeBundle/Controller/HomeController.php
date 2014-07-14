<?php

namespace A6\CodeceptIsAwesomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    public function indexAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('showFlash', 'checkbox', array('label'=>'Show Flash Message?'))
            ->add('save', 'submit', array('attr'=>array('class'=>'btn btn-large btn-success')))
            ->getForm()
        ;

        $form->handleRequest($request);

        if ($form->isValid() && $form->getData()['showFlash']) {
            $this->get('session')->getFlashBag()->add(
                'info',
                'This is an informational message'
            );
        }

        return $this->render('A6CodeceptIsAwesomeBundle::index.html.twig', array(
            'form'  => $form->createView(),
        ));
    }
}
