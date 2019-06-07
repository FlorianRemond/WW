<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class AdministrateurController extends Controller
{
    /**
     * @Route("/pageAdmin", name="pageAdmin")
     */
    //affiche la page de gestion des gestionnaires
    public function GestionnaireViewAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $gestionnaires = $em->getRepository('AppBundle:Gestionnaire')->findAll();
        $techniciens = $em->getRepository('AppBundle:Technicien')->findAll();
        $em = $this->getDoctrine()->getManager();
        $response = $this->render('pageAdmin.html.twig', [
            'gestionnaires' => $gestionnaires,
            'techniciens' => $techniciens]);
        return $response;

    }
    /**
     * @Route("/gestionnaire/remove/{id}", name="gestionnaire_remove_id")
     */
    public function removeGestionnaireIdAction($id)
    {
        // récupérer un seul article depuis la base de données
        $em = $this->getDoctrine()->getManager();
        $gestionnaire = $em->getRepository("AppBundle:Gestionnaire")->find($id);

        // supprimer une entité
        if ($gestionnaire != null) {
            $em->remove($gestionnaire);
            $em->flush();
        }
        return $this->redirectToRoute('pageAdmin');
    }

    /**
     * @Route("/technicien/remove/{id}", name="technicien_remove_id")
     */
    public function removeTechnicienIdAction($id)
    {
        // récupérer un seul article depuis la base de données
        $em = $this->getDoctrine()->getManager();
        $technicien = $em->getRepository("AppBundle:Technicien")->find($id);

        // supprimer une entité
        if ($technicien != null) {
            $em->remove($technicien);
            $em->flush();
        }
        return $this->redirectToRoute('pageAdmin');
    }


    /*Balise de fin*/
}
