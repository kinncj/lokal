<?php

namespace Lokal\Bundle\MarketBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('MarketBundle:Default:index.html.twig', 
        		array('homeActive' => true));
    }
}
