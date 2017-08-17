<?php

namespace ORN\CPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use ORN\CPBundle\Form\Usertype;

class ProfileController extends Controller
{
    public function indexAction(Request $request)
    {
        $user = $this->getUser();
        if(!$user)
            throw $this->createNotFoundException();

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', '<strong>' . $user->getEmail() . '</strong> được sửa thành công.');
            return $this->redirectToRoute('orncp_profile');
        }
        $viewData['form'] = $form->createView();
        $viewData['user'] = $user;

        return $this->render('ORNCPBundle:Profile:index.html.twig', $viewData);
    }

}
