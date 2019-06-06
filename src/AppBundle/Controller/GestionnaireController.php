<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class GestionnaireController extends Controller
{
    /**
     * @Route("/pageGestionnaire/insert", name="pageGestionnaire_Insert")
     */
    //affiche la page de gestion des gestionnaires
    public function gestionnaireInsertAction(Request $request)
    {
     return $this->render('pageGestionnaireInsert.html.twig');
    }



/*Balise de fin*/
}
