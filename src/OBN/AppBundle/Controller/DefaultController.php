<?php

namespace OBN\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OBNAppBundle:Default:index.html.twig');
    }
}
