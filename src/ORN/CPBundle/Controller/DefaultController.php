<?php

namespace ORN\CPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ORNCPBundle:Default:index.html.twig');
    }
}
