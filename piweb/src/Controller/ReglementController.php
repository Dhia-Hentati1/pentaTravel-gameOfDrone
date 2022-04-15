<?php

namespace App\Controller;

use App\Entity\Reglement;
use App\Form\ReglementType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReglementController extends AbstractController
{
    /**
     * @Route("/reglement", name="display_reglement")
     */
    public function index(): Response
    {
        $reglement= $this->getDoctrine()->getManager()->getRepository(Reglement::class)->findAll();
        return $this->render('reglement/index.html.twig', [
            'a'=>$reglement
        ]);
    }


    /**
     * @Route("/addReglement", name="app_reglement")
     */
    public function addReglement(Request $request): Response
    {
        $reglement=new Reglement();
        $form=$this->createForm(ReglementType::class,$reglement);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($reglement);
            $em->flush();

            return $this->redirectToRoute('display_admin');
        }
        return $this->render('reglement/createReglement.html.twig',['ff'=>$form->createView()]);
    }



    /**
     * @Route("/removeReglement/{id}", name="supp_reglement")
     */
    public function suppressionActivite(Reglement $reglement): Response
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($reglement);
        $em->flush();

        return $this->redirectToRoute('display_reglement');

    }
    /**
     * @Route("/modifRegelement{id}", name="modifReglement")
     */
    public function modifReglement(Request $request,$id): Response
    {
        $reglement= $this->getDoctrine()->getManager()->getRepository(Reglement::class)->find($id);

        $form=$this->createForm(ReglementType::class,$reglement);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();

            $em->flush();

            return $this->redirectToRoute('display_reglement');
        }
        return $this->render('reglement/updateReglement.html.twig',['ff'=>$form->createView()]);
    }








}
