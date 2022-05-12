<?php

namespace App\Controller;
use App\Entity\Activite;
use App\Entity\Reglement;
use App\Form\ActiviteType;
use App\Form\ReglementType;
use App\Repository\ActiviteRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UtilisateurRepository;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Json;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;




use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;


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
            $file=$activite->getImage();
            $filename=md5(uniqid()).'.'.$file->guessExtension();
            try{
                $file->move(
                    $this->getParameter('brochures_directory'),
                    $filename
                );
            }catch (FileException $e){

            }
            $em=$this->getDoctrine()->getManager();
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



    /**
     * @Route("/addact",name="add_act")
     *  @Method("POST")
     */
    public function addact(Request $request,SerializerInterface $serializerInterace,EntityManagerInterface $em)
    {
        $content=$request->getContent();
        $data = $serializerInterace->deserialize($content,Activite::class,'json');
        $em->persist($data);
        $em->flush();
        return new Response('activite added succes');



    }
    /**
     * @Route("/addAct", name="add_act")
     * @Method("POST")
     */

    public function ajouterReclamationAction(Request $request,NormalizerInterface $normalizer)
    {
        $activite = new Activite() ;
        $libele = $request->query->get("libele");
        $prix = $request->query->get("prix");
        $emplacement= $request->query->get("emplacement");
        $description= $request->query->get("description");
        $date =  new \DateTime('now');
        $type= $request->query->get("type");
        $avis= $request->query->get("avis");
        $image= $request->query->get("image");
        $em = $this->getDoctrine()->getManager();


        $activite->setLibele($libele);
        $activite->setPrix($prix);
        $activite->setEmplacement($emplacement);
        $activite->setDescription($description);
        $activite->setDate($date);
        $activite->setType($type);
        $activite->setAvis($avis);
        $activite->setImage($image);


        $em->persist($activite);
        $em->flush();
        $jsonContent=$normalizer->normalize($activite,'json',['groups'=>'post:read']);
           
        return new Response(json_encode($jsonContent)); 

    }

    /**
     * @Route("/deleteAct/{id}", name="delete_act")
     */

    public function deleteReclamationAction(Request $request,NormalizerInterface $normalizer) {
        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $activite = $em->getRepository(Activite::class)->find($id);
        if($activite!=null ) {
            $em->remove($activite);
            $em->flush();

        }
        $jsonContent=$normalizer->normalize($activite,'json',['groups'=>'post:read']);
           
        return new Response(json_encode($jsonContent)); 

    }


    /**
     * @Route("/updateActivite/{id}", name="update_activite")
     */
    public function modifierReclamationAction(Request $request,NormalizerInterface $normalizer) {
        $em = $this->getDoctrine()->getManager();
        $activite = $this->getDoctrine()->getManager()
            ->getRepository(Activite::class)
            ->find($request->get("id"));



        $activite->setLibele($request->get("libele"));
        $activite->setPrix($request->get("prix"));
        $activite->setEmplacement($request->get("emplacement"));
        $activite->setDescription($request->get("description"));
        $date =  new \DateTime('now');


        $activite->setType($request->get("type"));
        $activite->setAvis($request->get("avis"));
        $activite->setImage($request->get("image"));

        $em->persist($activite);
        $em->flush();
        $jsonContent=$normalizer->normalize($activite,'json',['groups'=>'post:read']);
           
        return new Response(json_encode($jsonContent)); 
        

    }
 /**
     * @Route("/Displayjson", name="display_admin")
     */
    public function indexAdminn(NormalizerInterface $normalizer)
    {
        $activites= $this->getDoctrine()->getManager()->getRepository(Activite::class)->findAll();
        $jsonContent=$normalizer->normalize($activites,'json',['groups'=>'post:read']);
           
        return new Response(json_encode($jsonContent)); 
    
    }



    

}
