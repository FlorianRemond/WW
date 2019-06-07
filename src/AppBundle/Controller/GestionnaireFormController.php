<?php

namespace AppBundle\Controller;

use AppBundle\Form\GestionnaireType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Gestionnaire;

class GestionnaireFormController extends Controller
{

    // Afficher le formulaire des gestionnaires
    /**
     * @Route("/pageGestionnaireInsert", name="pageGestionnaire_insert")
     */
    public function insertGestionnaireAction(Request $request)
    {
        //1 creer une instance du gestionnaire
        $gestionnaire = new Gestionnaire();

        //2 utilisation du form.factory pour créer un formBuilder qui va
        // permettre de creer l'objet formulaire
        //Appelle de la méthode createbuilder avec 2 paramètres:
        // 1- la classe formulaire : GestionnaireType:class
        // 2- et l'objet à lié au formulaire : $gestionnaire
        $formBuilder =$this->get('form.factory')->createBuilder(GestionnaireType::class,$gestionnaire);

        //3 avec FormBuilder on génère l'objet formulaire
        $form=$formBuilder->getForm();

        //4 recupération des données envoyée pour "hydrater" l'obet
        $form ->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($gestionnaire);
                $em->flush();
                return $this->redirectToRoute('pageAdmin');
            }
        }
        return $this->render('pageGestionnaireInsert.html.twig', [
            'formGestionnaire' => $form->createView()]);

    }

}
