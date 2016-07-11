<?php

namespace OBN\Api\CategoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OBNApiCategoryBundle:Default:index.html.twig');
    }
}
