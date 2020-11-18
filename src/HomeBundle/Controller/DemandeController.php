<?php

namespace HomeBundle\Controller;


use HomeBundle\Entity\Demande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DemandeController extends Controller
{


    /**
     * @Route("/Demande",name="Demande")
     */
    public function indexAction()
    {

        return $this->render('@Home/Default/Demandes.html.twig');
    }


    /**
     * @Route("/DemandeForm", name="DemandeForm")
     */
    public function FormDemande()
    {
        return $this->render('@Home/Default/Form_Demande.html.twig');
    }





    /**
     * @Route("/Post_Demande", name="Post_Demande")
     * * Method({"GET", "POST"})
     */
    public function Poster_Demande(Request $request )
    {


        $params = $request->query->all();
        $entityManager = $this->getDoctrine()->getManager();
        $demande = new Demande();

        $demande->setTitreDemande($request->get('TitreDemande'));
        $demande->setDescriptionDemande($request->get('DescriptionDemande'));
        $demande->setAdresse($request->get('Adresse'));

        $date = new \DateTime();
        $demande->setDatePublication($date);
        $demande->setDateIntervention(new \DateTime($request->get('DateIntervention')));
        $demande->setCategory("Plomberie");

        $entityManager->persist($demande);
        $entityManager->flush();
        $this->addFlash('success','Votre demande est ajouté avec succes');
        return $this->redirectToRoute('DemandeForm');
    }



}
