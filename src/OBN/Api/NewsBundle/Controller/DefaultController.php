<?php

namespace OBN\Api\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OBNApiNewsBundle:Default:index.html.twig');
    }
}
