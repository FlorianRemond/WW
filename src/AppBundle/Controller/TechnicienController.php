<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Operation;
use AppBundle\Form\OperationType;
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

    /**
     * @Route ("/edit/{id}", name="operation_edit")
     * @return Response
     */
    public function edit(Request $request, Operation $operation)
    {

        $formBuilder = $this->get('form.factory')->createBuilder(OperationType::class, $operation);
        $form = $formBuilder->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($operation);
                $em->flush();
                return $this->redirectToRoute('pageTechnicien');
            }
        }
        return $this->render('pageOperationInsert.html.twig', [
            'formOperation' => $form->createView()
        ]);
    }
/*Balise de fin*/
}
