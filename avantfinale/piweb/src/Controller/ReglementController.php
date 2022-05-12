<?php

namespace App\Controller;

use App\Entity\Reglement;
use App\Form\ReglementType;
use App\Repository\ReglementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Dompdf\Dompdf;
use Dompdf\Options;



use MercurySeries\FlashyBundle\FlashyNotifier;




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
     * @Route("/addReglement/{idPrix}", name="app_reglement")
     */
    public function addReglement(Request $request , $idPrix): Response
    {
        $reglement=new Reglement();
        $form=$this->createForm(ReglementType::class,$reglement);
        $form->get('montant')->setData($idPrix);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {

            $em=$this->getDoctrine()->getManager();
            $em->persist($reglement);
            $em->flush();

           // $MessageBird = new \MessageBird\Client('ZpVtnXmV199U5tNipKMb7QSOl'); //test


            $MessageBird = new \MessageBird\Client('0XuFdExb0ke7kVyYENIW4pUVk');
            $Message = new \MessageBird\Objects\Message();
            $Message->originator = 'TestMessage';
            $Message->recipients = array(+21658406858);
            $Message->body = 'This is a test message';

            $MessageBird->messages->create($Message);




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


    /**
     * @Route("reglement/recherche",name="recherche")
     */
    function Recherche (ReglementRepository $rep,Request $request)
    {
        $data =$request->get('search');

        $reglement=$rep->findBy(['id'=>$data]);

        return $this->render('reglement/index.html.twig', [
            'a'=>$reglement]);



    }


    /**
     * @Route("/listr", name="reglement_list" , methods={"GET"})
     */
    public function listr(ReglementRepository $reglementRepository): Response
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $reglement = new Reglement();
        $reglement = $reglementRepository->findAll();



        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('reglement/listr.html.twig', [
            'a' => $reglement,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }










}
