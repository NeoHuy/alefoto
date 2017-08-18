<?php

namespace ORN\CPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ORN\CPBundle\Form\ConfigType;
use ORN\CPBundle\Entity\Config;

class DefaultController extends Controller
{
    /*
    public function indexAction()
    {
        return $this->render('ORNCPBundle:Default:index.html.twig');
    }
    */

    public function configAction(Request $request) {

        $config = $this->getDoctrine()->getRepository('ORNCPBundle:Config')->find(1);

        $form = $this->createForm(ConfigType::class, $config);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($config);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', '<strong>'. $config->getTitle() .'</strong> được sửa thành công.');
            return $this->redirectToRoute('orncp_homepage');
        }

        $viewData['form'] = $form->createView();
        $viewData['config'] = $config;
        return $this->render('ORNCPBundle:Default:index.html.twig', $viewData);
    }


}
