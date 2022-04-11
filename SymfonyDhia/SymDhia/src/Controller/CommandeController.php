<?php

namespace App\Controller;

use App\Form\CommandeType;
use App\Repository\CommandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Commande;
use App\Entity\Etablissement;
class CommandeController extends AbstractController
{
    /**
     * @param CommandeRepository $repository
     * @Route("/c", name="display_commande")
     */
    public function index(CommandeRepository $repository): Response
    {
        $Commande = $this->getDoctrine()->getManager()->getRepository(Commande::class)->findAll();

        return $this->render('commande/index.html.twig',
            ['c'=>$Commande]
        );
    }

    /**
     * @Route("/addCommande", name="addCommande")
     */
    public function addCommande(Request $request): Response
    {
        $Commande =new Commande();
        $form = $this->createForm(CommandeType::class,$Commande);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Commande);
            $em->flush();

            return $this->redirectToRoute('display_commande');
        }
        return $this->render('commande/createCommande.html.twig',['f'=>$form->createView()]);

    }

    /**
     * @Route("/removeCommande/{id}", name="supp_commande")
     */
    public function suppressionCommande(Commande  $commande): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($commande);
        $em->flush();

        return $this->redirectToRoute('display_commande');


    }
    /**
     * @Route("/modifCommande/{id}", name="modifCommande")
     */
    public function modifCommande(Request $request,$id): Response
    {
        $commande = $this->getDoctrine()->getManager()->getRepository(Commande::class)->find($id);

        $form = $this->createForm(CommandeType::class,$commande);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('display_commande');
        }
        return $this->render('commande/updateCommande.html.twig',['f'=>$form->createView()]);




    }
}
