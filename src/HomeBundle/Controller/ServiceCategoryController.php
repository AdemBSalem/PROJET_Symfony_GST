<?php

namespace HomeBundle\Controller;

use HomeBundle\Entity\categories;
use HomeBundle\Entity\Service;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Category;

class ServiceCategoryController extends Controller
{

    /**
     * @Route("/services", name="services")
     */
    public function GetCat()
    {
        $categories= $this->getDoctrine()->getRepository(categories::class)->findAll();
        return $this->render('@Home/Default/Services.html.twig', array('categories' => $categories));

        // return $this->render('Events/Users.html.twig');
    }

    /**
     * @Route("/ServiceDetails", name="ServiceDetails")
     */
    public function ServiceDetails()
    {
        return $this->render('@Home/Default/ServiceDetails.html.twig');
    }

    /**
     * @Route("/ShowCategoryDetails/{id}", name="ShowCategoryDetails")
     */
    public function show($id)
    {
        $categories= $this->getDoctrine()->getRepository(categories::class)->find($id);
        $Service= $this->getDoctrine()->getRepository(Service::class)->findBy(['codeCategorie' => $id]);
        return $this->render('@Home/Default/ServiceDetails.html.twig',array('categories' => $categories,'Service' => $Service));

    }


}
