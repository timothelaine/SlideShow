<?php

namespace App\Controller;

use App\Entity\Upload;
use App\Form\UploadType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class UploadController extends AbstractController
{
    /**
     * @Route("/upload", name="upload")
     */
    public function index(Request $request)
    {
        $upload = new Upload();
        $form = $this->createForm(UploadType::class, $upload);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {

            $uploads_directory = $this->getParameter('upload_directory');
            $files = $request->files->get('upload')['name'];
            foreach ($files as $file){

                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($uploads_directory, $fileName);
            }


            return $this->redirectToRoute('upload');

        }
        return $this->render('upload/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
