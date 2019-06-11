<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class GestionnaireController extends Controller
{
    /**
     * @Route("/pageGestionnaireInsert", name="pageGestionnaire_Insert")
     */
    //affiche la page de gestion des gestionnaires
    public function gestionnaireInsertAction(Request $request)
    {
     return $this->render('pageAdmin.html.twig');
    }

    /**
     * @Route("/pageGestionnaire ", name="pageGestionnaire")
     */
    //affiche la liste des véhicules dans la page gestionnaire
    public function GestionnaireViewAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $vehicules = $em->getRepository('AppBundle:Vehicule')->findAll();

        $em = $this->getDoctrine()->getManager();
        $response = $this->render('pageGestionnaire.html.twig', [

            'vehicules' => $vehicules]);

        return $response;

    }

    /**
     * @Route("/vehicule/remove/{id}", name="vehicule_remove_id")
     */
    public function removeVehiculeIdAction($id)
    {
        // récupérer un seul article depuis la base de données
        $em = $this->getDoctrine()->getManager();
        $vehicule = $em->getRepository("AppBundle:Vehicule")->find($id);
        // supprimer une entité
        if ($vehicule != null) {
            $em->remove($vehicule);
            $em->flush();
        }
        return $this->redirectToRoute('pageGestionnaire');
    }




/*Balise de fin*/
}
