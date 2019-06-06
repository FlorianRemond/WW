<?php

namespace AppBundle\Controller;

use AppBundle\Form\TechnicienType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Technicien;

class TechnicienFormController extends Controller
{

    // Afficher le formulaire des techniciens
    /**
     * @Route("/pageTechnicienInsert", name="pageTechnicien_insert")
     */
    public function insertTechnicienAction(Request $request)
    {
        //1 creer une instance du gestionnaire
        $technicien = new Technicien();

        //2 utilisation du form.factory pour créer un formBuilder qui va
        // permettre de creer l'objet formulaire
        //Appelle de la méthode createbuilder avec 2 paramètres:
        // 1- la classe formulaire : GestionnaireType:class
        // 2- et l'objet à lié au formulaire : $gestionnaire
        $formBuilder =$this->get('form.factory')->createBuilder(TechnicienType::class,$technicien);

        //3 avec FormBuilder on génère l'objet formulaire
        $form=$formBuilder->getForm();

        //4 recupération des données envoyée pour "hydrater" l'obet
        $form ->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($technicien);
                $em->flush();
                return $this->redirectToRoute('tdb');
            }
        }
        return $this->render('pageTechnicienInsert.html.twig', [
            'formTechnicien' => $form->createView()]);

    }

}
