<?php

namespace HomeBundle\Controller;

use HomeBundle\Entity\Bricoleur;
use HomeBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\ORM\EntityManager;


class RegisterController extends Controller
{

    /**
     * @Route("/Register_Client",name="Register_Client")
     */
    public function indexAction()
    {

        return $this->render('@Home/Default/Register_Client.html.twig');
    }



    /**
     * @Route("/Register_Bricoleur",name="Register_Bricoleur")
     */
    public function indexAction2()
    {

        return $this->render('@Home/Default/Register_Bricoleur.html.twig');
    }



    /**
     * @Route("/Reg_Client", name="Reg_Client")
     * * Method({"GET", "POST"})
     */
    public function Register_Client(Request $request )
    {
        $params = $request->query->all();
        $entityManager = $this->getDoctrine()->getManager();
        $user = new Client();

        $user->setUsername($request->get('Username'));
        $user->setPhone($request->get('phone'));
        $user->setAdresse("M'saken");
        $user->setemail($request->get('email'));
        //$user->setpassword($request->get('password'));
        // $password =  $encoder->encodePassword($user, $request->get('password'));
        $user->setPassword($request->get('password'));

       // $plainPassword =$request->get('password');
       // $encoded = $encoder->encodePassword($user, $plainPassword);
        //$user->setPassword($encoded);

        $entityManager->persist($user);
        $entityManager->flush();
        $this->addFlash('success','inscription réussi');
        return $this->redirectToRoute('Register_Client');
    }


    /**
     * @Route("/Reg_Bricoleur", name="Reg_Bricoleur")
     * * Method({"GET", "POST"})
     */
    public function Register_Bricoleur(Request $request )
    {
        $params = $request->query->all();
        $entityManager = $this->getDoctrine()->getManager();
        $user = new Bricoleur();

        $user->setPhone($request->get('phone'));
        $user->setAdresse("M'saken");
        $user->setNom($request->get('nom'));
        $user->setPrenom($request->get('prenom'));
        $user->setUsername($request->get('prenom').' '.$request->get('nom'));
        $user->setServiceType($request->get('TypeService'));
        $user->setStatus('Active');
        $user->setemail($request->get('email'));
        //$user->setpassword($request->get('password'));
        // $password =  $encoder->encodePassword($user, $request->get('password'));
        $user->setPassword($request->get('password'));

        // $plainPassword =$request->get('password');
        // $encoded = $encoder->encodePassword($user, $plainPassword);
        //$user->setPassword($encoded);

        $entityManager->persist($user);
        $entityManager->flush();
         $this->addFlash('success','inscription réussi');
        return $this->redirectToRoute('Register_Bricoleur');

    }
}
