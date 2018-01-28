<?php

namespace colocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('colocBundle:Default:index.html.twig');
    }
}
