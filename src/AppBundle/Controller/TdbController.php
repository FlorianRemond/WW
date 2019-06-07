<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class TdbController extends Controller
{
    /**
     * @Route("/tdb", name="tdb")
     */
    //affiche la page principale
    public function tdbAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $operations = $em->getRepository('AppBundle:Operation')->findAll();
        $vehicules = $em->getRepository('AppBundle:Vehicule')->findAll();

        $em = $this->getDoctrine()->getManager();
        $response = $this->render('tdb.html.twig', [

            'operations' => $operations,
            'vehicules' => $vehicules]);

        return $response;


    }


    //Page de l'administrateur
    /**
     * @Route ("/pageAdmin", name="pageAdmin")
     */
    public function adminAction (Request $request)
    {
        return $this->render('pageAdmin.html.twig');
    }

    //Page des gestionnaires
    /**
     * @Route ("/pageGestionnaire", name="pageGestionnaire")
     */
    public function gestionnaireAction (Request $request)
    {
        return $this->render('pageGestionnaire.html.twig');
    }

    //Pages des techniciens
    /**
     * @Route ("/pageTechnicien", name="pageTechnicien")
     */
    public function technicienAction (Request $request)
    {
        return $this->render('pageTechnicien.html.twig');
    }

    //Liste des voitures
    /**
     * @Route ("/pageVoiture", name="pageVoiture")
     */
    public function voitureAction (Request $request)
    {
        return $this->render('pageVoiture.html.twig');
    }

    //Liste des opérations
    /**
     * @Route ("/pageOperation", name="pageOperation")
     */
    public function operationAction (Request $request)
    {
        return $this->render('pageOperation.html.twig');
    }





/*Balise de fin*/
}
