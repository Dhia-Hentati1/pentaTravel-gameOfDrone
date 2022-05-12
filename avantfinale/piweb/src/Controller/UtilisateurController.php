<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class UtilisateurController extends AbstractController
{
    /**
     * @Route("/utilisateur", name="app_utilisateur")
     */
    public function index(): Response
    {
        $utilisateur= $this->getDoctrine()->getManager()->getRepository(Utilisateur::class)->findAll();
        return $this->render('utilisteur/index.html.twig', [
            'a'=>$utilisateur
        ]);
    }
    /**
     * @Route ("/listeutilisateur", name="list_utilisateur")
     */
    public function getUtilisateur(UtilisateurRepository $repo,SerializerInterface $serializerInterface)
    {
        $utilisateur=$repo->findAll();
        $json=$serializerInterface->serialize($utilisateur,'json',['groups'=>'Utilisateur']);
        dump($utilisateur);
        die;

    }

    /**
     * @Route ("/addutilisateur", name="add_utilisateur")
     */
    public function addutilisateur(Request $request)
    {


    }








}
