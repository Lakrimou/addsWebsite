<?php

namespace Taseera\EndpointBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TaseeraEndpointBundle:Default:index.html.twig');
    }
}
