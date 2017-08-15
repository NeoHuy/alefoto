<?php

namespace ORN\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ORNAppBundle:Default:index.html.twig');
    }
    
    public function aboutAction()
    {
        return $this->render('ORNAppBundle:Default:about.html.twig');
    }
}
