<?php

namespace App\Controller;
use App\Entity\Activite;
use App\Form\ActiviteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActiviteController extends AbstractController
{
    /**
     * @Route("/", name="display_activite")
     */
    public function index(): Response
    {
        $activites= $this->getDoctrine()->getManager()->getRepository(Activite::class)->findAll();
        return $this->render('activite/index.html.twig', [
            'a'=>$activites
        ]);
    }


    /**
     * @Route("/front", name="display_admin")
     */
    public function indexAdmin(): Response
    {
        $activites= $this->getDoctrine()->getManager()->getRepository(Activite::class)->findAll();
        return $this->render('Admin/index1.html.twig', [
            'a'=>$activites
        ]);
    }





    /**
     * @Route("/addActivite", name="addActivite")
     */
    public function addActivite(Request $request): Response
    {
        $activite= new Activite();

        $form=$this->createForm(ActiviteType::class,$activite);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($activite);
            $em->flush();

            return $this->redirectToRoute('display_activite');
        }
        return $this->render('activite/createActivite.html.twig',['f'=>$form->createView()]);
    }


    /**
     * @Route("/removeActivite/{id}", name="supp_activite")
     */
    public function suppressionActivite(Activite $activite): Response
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($activite);
        $em->flush();

        return $this->redirectToRoute('display_activite');

    }

    /**
     * @Route("/modifActivite{id}", name="modifActivite")
     */
    public function modifActivite(Request $request,$id): Response
    {
        $activite= $this->getDoctrine()->getManager()->getRepository(Activite::class)->find($id);

        $form=$this->createForm(ActiviteType::class,$activite);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();

            $em->flush();

            return $this->redirectToRoute('display_activite');
        }
        return $this->render('activite/updateActivite.html.twig',['f'=>$form->createView()]);
    }


}
