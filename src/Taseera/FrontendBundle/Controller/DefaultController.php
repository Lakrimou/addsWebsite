<?php

namespace Taseera\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TaseeraFrontendBundle:Default:index.html.twig');
    }
}
