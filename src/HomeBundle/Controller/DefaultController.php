<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/home",name="home")
     */
    public function indexAction()
    {

        return $this->render('@Home/Default/index.html.twig');
    }

    /**
     * @Route("/",name="")
     */
    public function indexAction2()
    {

        return $this->render('@Home/Default/index.html.twig');
    }

}
