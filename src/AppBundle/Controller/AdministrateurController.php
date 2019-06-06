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
     * @Route("/musicien/remove/{id}", name="musicien_remove_id")
     */
    public function removeIdAction($id)
    {
        // récupérer un seul article depuis la base de données
        $em = $this->getDoctrine()->getManager();
        $musicien = $em->getRepository("AppBundle:Musicien")->find($id);

        // supprimer une entité
        if ($musicien != null) {
            $em->remove($musicien);
            $em->flush();
        }
        return $this->redirectToRoute('globalview');
    }




    /*Balise de fin*/
}
