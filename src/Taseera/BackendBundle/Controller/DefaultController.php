<?php

namespace Taseera\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TaseeraBackendBundle:Default:index.html.twig');
    }
}
