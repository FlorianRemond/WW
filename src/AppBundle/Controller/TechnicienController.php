<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class TechnicienController extends Controller
{

    /**
     * @Route("/pageTechnicien", name="pageTechnicien")
     */
    //affiche la page de gestion des techniciens
    public function TechnicienViewAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $operations = $em->getRepository('AppBundle:Operation')->findAll();
        $vehicules = $em->getRepository('AppBundle:Vehicule')->findAll();

        $em = $this->getDoctrine()->getManager();
        $response = $this->render('pageTechnicien.html.twig', [

            'operations' => $operations,
            'vehicules' => $vehicules]);

        return $response;

    }

/*Balise de fin*/
}
