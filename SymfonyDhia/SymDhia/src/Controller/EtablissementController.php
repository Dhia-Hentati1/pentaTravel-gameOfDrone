<?php

namespace App\Controller;

use App\Form\EtablissementType;
use App\Repository\EtablissementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Etablissement;

class EtablissementController extends AbstractController
{
    /**
     * @param EtablissementRepository $repository
     * @Route("/", name="display_etablissement")
     */
    public function index( ): Response
    {
        $Etablissements = $this->getDoctrine()->getManager()->getRepository(Etablissement::class)->findAll();

        return $this->render('etablissement/index.html.twig',
    ['e'=>$Etablissements]
        );
    }

    /**
     * @Route("/admin", name="display_admin")
     */
    public function indexAdmin(): Response
    {

        return $this->render('Admin/index.html.twig'
        );
    }

    /**
     * @Route("/addEtablissement", name="addEtablissement")
     */
    public function addEtablissement(Request $request): Response
    {
        $Etablissement =new Etablissement();
        $form = $this->createForm(EtablissementType::class,$Etablissement);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Etablissement);
            $em->flush();

            return $this->redirectToRoute('display_etablissement');
        }
        return $this->render('etablissement/createEtablissement.html.twig',['f'=>$form->createView()]);

    }

    /**
     * @Route("/removeEtablissement/{id}", name="supp_etablissement")
     */
    public function suppressionEtablissement(Etablissement  $etablissement): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($etablissement);
        $em->flush();

        return $this->redirectToRoute('display_etablissement');


    }
    /**
     * @Route("/modifEtablissement/{id}", name="modifEtablissement")
     */
    public function modifEtablissement(Request $request,$id): Response
    {
        $etablissement = $this->getDoctrine()->getManager()->getRepository(Etablissement::class)->find($id);

        $form = $this->createForm(EtablissementType::class,$etablissement);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('display_etablissement');
        }
        return $this->render('etablissement/updateEtablissement.html.twig',['f'=>$form->createView()]);




    }

}
