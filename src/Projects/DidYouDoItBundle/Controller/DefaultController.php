<?php

namespace Projects\DidYouDoItBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DidYouDoItBundle:Default:index.html.twig', array('name' => $name));
    }
}
