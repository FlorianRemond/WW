<?php

namespace AppBundle\Controller;

use AppBundle\Form\VehiculeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Vehicule;

class VehiculeFormController extends Controller
{

    // Afficher le formulaire des véhicules
    /**
     * @Route("/pageVehiculeInsert", name="pageVehicule_insert")
     */
    public function insertVehiculeAction(Request $request)
    {
        //1 creer une instance du gestionnaire
        $vehicule = new Vehicule();

        //2 utilisation du form.factory pour créer un formBuilder qui va
        // permettre de creer l'objet formulaire
        //Appelle de la méthode createbuilder avec 2 paramètres:
        // 1- la classe formulaire : VehiculeType:class
        // 2- et l'objet à lié au formulaire : $vehicule
        $formBuilder =$this->get('form.factory')->createBuilder(VehiculeType::class,$vehicule);

        //3 avec FormBuilder on génère l'objet formulaire
        $form=$formBuilder->getForm();

        //4 recupération des données envoyée pour "hydrater" l'obet
        $form ->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($vehicule);
                $em->flush();
                return $this->redirectToRoute('pageGestionnaire');
            }
        }
        return $this->render('pageVehiculeInsert.html.twig', [
            'formVehicule' => $form->createView()]);

    }

}
