<?php

namespace App\Controller;

use App\Entity\Slide;
use App\Entity\SlideUpload;
use App\Entity\Upload;
use App\Repository\UploadRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SlideCreationController extends AbstractController
{
    /**
     * @Route("/creation", name="creation")
     */
    public function index(UploadRepository $repo)
    {
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
        $imageSelected = $repo->find($image);
        return $this->json(['imageName' => $imageSelected->getName()]);

    }

    /**
     * @Route("/slide/store", name="slide_store")
     */
    public function store(Request $request) {
        $entityManager = $this->getDoctrine()->getManager();

        //return $this->json(['imageName' => $request->get('nameOfSlide')]);

        $nameSlide = $request->get('nameOfSlide');
        $content = $request->get('listSlide');

        $slide = new Slide();
        $slide->setName($nameSlide);
        $slide->setCreatedAt(new \DateTime());

        $entityManager->persist($slide);
        $entityManager->flush();


        foreach ($content as $image) {
            $entityRepository = $this->getDoctrine()->getRepository(Upload::class);

            $imageCurrent = $entityRepository->find($image['id']);


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

        $slides = $entityRepository->findAll();

        return $this->render('slide_creation/list.html.twig', [
            'slides' => $slides
        ]);
    }
}
