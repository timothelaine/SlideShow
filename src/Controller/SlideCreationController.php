<?php

namespace App\Controller;

use App\Entity\Upload;
use App\Repository\UploadRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
}
