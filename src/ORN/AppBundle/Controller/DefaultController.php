<?php

namespace ORN\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $dataView = [
            'activeHome' => 'active'
        ];
        return $this->render('ORNAppBundle:Default:index.html.twig', $dataView);
    }
    
    public function aboutAction()
    {
        $dataView = [
            'activeAbout' => 'active'
        ];
        return $this->render('ORNAppBundle:Default:about.html.twig', $dataView);
    }

    public function contactAction()
    {
        $user = $this->getDoctrine()->getRepository('ORNCPBundle:User')->find(1);

        $dataView = [
            'activeContact' => 'active',
            'user' => $user
        ];
        return $this->render('ORNAppBundle:Default:contact.html.twig', $dataView);
    }
}
