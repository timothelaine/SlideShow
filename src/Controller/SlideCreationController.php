<?php

namespace App\Controller;

use App\Entity\Slide;
use App\Entity\SlideUpload;
use App\Entity\Upload;
use App\Repository\UploadRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SlideCreationController extends AbstractController
{
    /**
     * @Route("/creation", name="creation")
     */
    public function index(UploadRepository $repo)
    {
        // Récupération de toutes les images
        $upload = $repo->findAll();

        return $this->render('slide_creation/index.html.twig', [
            'controller_name' => 'SlideCreationController', 'imagesUploaded' => $upload
        ]);
    }

    /**
     * @Route("/add", name="add")
     */
    public function addImage(Request $request, UploadRepository $repo)
    {
        $image =  $request->request->get('id');

        // Récupération de l'image séléctionnée
        $imageSelected = $repo->find($image);

        return $this->json(['imageName' => $imageSelected->getName()]);
    }

    /**
     * @Route("/slide/store", name="slide_store")
     */
    public function store(Request $request) {
        $entityManager = $this->getDoctrine()->getManager();

        $errors = [];

        // Récupération du nom du slide
        $nameSlide = $request->get('nameOfSlide');

        // Vérification de la longueur du nom
        if(strlen($nameSlide) < 2 || strlen($nameSlide) > 20) {
            array_push($errors, "Le nom du slide doit avoir une longueur comprise entre 2 et 20 caractères.");
        }

        // Récupération des informations des images du slide
        $content = $request->get('listSlide');

        // Vérification du nombre d'image
        if(sizeof($content) < 2) {
            array_push($errors, "Le slide doit comprendre 2 images au minimum.");
        }

        if(!empty($errors)) {
            return $this->json(['result' => 'error', 'errors' => $errors]);
        }

        // Création du slide
        $slide = new Slide();
        $slide->setName($nameSlide);
        $slide->setCreatedAt(new \DateTime());

        $entityManager->persist($slide);
        $entityManager->flush();

        foreach ($content as $image) {
            $entityRepository = $this->getDoctrine()->getRepository(Upload::class);

            // Récupération de l'image courante
            $imageCurrent = $entityRepository->find($image['id']);

            // Association de l'image avec le slide
            $slideUpload = new SlideUpload();
            $slideUpload->setSlide($slide);
            $slideUpload->setUpload($imageCurrent);
            $slideUpload->setX1($image['x']);
            $slideUpload->setY1($image['y']);
            $slideUpload->setZ1($image['z']);
            $slideUpload->setX2($image['x']);
            $slideUpload->setY2($image['y']);
            $slideUpload->setZ2($image['z']);

            $slideUpload->setTimer($image['timer']);
            $slideUpload->setKenburnTimer($image['kenburnTimer']);

            $entityManager->persist($slideUpload);
            $entityManager->flush();
        }

        return new Response(json_encode(array('result' => 'success')));
    }

    /**
     * @Route("/slide", name="slide_list")
     */
    public function list() {
        $entityRepository = $this->getDoctrine()->getRepository(Slide::class);

        // Récupération de tous les slides
        $slides = $entityRepository->findAll();

        return $this->render('slide_creation/list.html.twig', [
            'slides' => $slides
        ]);
    }

    /**
     * @Route("/slide/show/{id}", name="slide_show")
     */
    public function show($id, Request $request) {

        $entityRepository = $this->getDoctrine()->getRepository(Slide::class);

        // Récupération du slide séléctionné
        $slide = $entityRepository->find($id);

        $entityRepository = $this->getDoctrine()->getRepository(SlideUpload::class);

        // Récupération des images de la slide
        $slideUpload = $entityRepository->findBy(['slide' => $slide]);

        //dd($slideUpload);

        return $this->render('slide_creation/show.html.twig', [
            'slide' => $slide, 'slide_uploads' => $slideUpload
        ]);
    }

    /**
     * @Route("/slide/show/start", name="slide_start")
     */
    public function start() {

////        try {
////            $req = $request->request->get('start');
//            return $this->json(["test" => 'ok']);
////        }catch (Exception $e){
////            return $this->json(["test" => "nop"]);
////
////        }

    }


}
