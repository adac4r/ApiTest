<?php

namespace OBN\Api\MemberBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OBNApiMemberBundle:Default:index.html.twig');
    }
}
