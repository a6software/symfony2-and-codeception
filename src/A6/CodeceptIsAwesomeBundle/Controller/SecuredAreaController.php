<?php

namespace A6\CodeceptIsAwesomeBundle\Controller;

use A6\UserBundle\Entity\Profile;
use A6\UserBundle\Form\Type\ProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class SecuredAreaController
 * @package A6\CodeceptIsAwesomeBundle\Controller
 */
class SecuredAreaController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function securedIndexAction(Request $request)
    {
        $form = $this->createForm(new ProfileType(), $this->getProfile());

        $form->handleRequest($request);

        if ($form->isValid()) {
            $this->saveForm($form);
            $this->get('session')->getFlashBag()->add('notice','Your changes were saved!');
        }

        return $this->render('A6CodeceptIsAwesomeBundle::securedIndex.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @return Profile
     */
    private function getProfile()
    {
        return $this->getProfileById($this->getUserId());
    }

    /**
     * @return null
     */
    private function getUserId()
    {
        $id = null;

        $user = $this->getUser();

        if (method_exists($user, 'getId')) {
            $id = $user->getId();
        }

        return $id;
    }

    /**
     * @param $id
     * @return Profile
     */
    private function getProfileById($id)
    {
        return $this->getDoctrine()->getRepository('A6UserBundle:Profile')->find($id);
    }

    /**
     * @param $form
     */
    private function saveForm(Form $form)
    {
        $em = $this->getDoctrine()->getManager();
        $em->persist($form->getData());
        $em->flush();
    }


}
