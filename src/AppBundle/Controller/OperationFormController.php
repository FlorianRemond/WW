<?php

namespace AppBundle\Controller;

use AppBundle\Form\OperationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Operation;

class OperationFormController extends Controller
{

    // Afficher le formulaire des operations
    /**
     * @Route("/pageOperationInsert", name="pageOperation_insert")
     */
    public function insertOperationAction(Request $request)
    {
        //1 creer une instance du gestionnaire
        $operation = new Operation();

        //2 utilisation du form.factory pour créer un formBuilder qui va
        // permettre de creer l'objet formulaire
        //Appelle de la méthode createbuilder avec 2 paramètres:
        // 1- la classe formulaire : OperationType:class
        // 2- et l'objet à lié au formulaire : $operation
        $formBuilder =$this->get('form.factory')->createBuilder(OperationType::class,$operation);

        //3 avec FormBuilder on génère l'objet formulaire
        $form=$formBuilder->getForm();

        //4 recupération des données envoyée pour "hydrater" l'obet
        $form ->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($operation);
                $em->flush();
                return $this->redirectToRoute('pageTechnicien');
            }
        }
        return $this->render('pageOperationInsert.html.twig', [
            'formOperation' => $form->createView()]);

    }

}
