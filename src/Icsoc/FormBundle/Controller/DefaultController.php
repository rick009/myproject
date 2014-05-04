<?php

namespace Icsoc\FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IcsocFormBundle:Default:index.html.twig', array('name' => $name));
    }
}
