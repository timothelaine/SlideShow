<?php

namespace App\Controller;

use App\Entity\Upload;
use App\Form\UploadType;
use App\Repository\UploadRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class UploadController extends AbstractController
{
    /**
     * @Route("/upload", name="upload")
     */
    public function index(Request $request, EntityManagerInterface $manager, UploadRepository $repo)
    {
        $uploadForm = new Upload();
        $form = $this->createForm(UploadType::class, $uploadForm);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {

            $uploads_directory = $this->getParameter('upload_directory');
            $files = $request->files->get('upload')['name'];
            foreach ($files as $file){
//                Allow only upload of SVG, PNG, JPG type file
                if ($file->guessExtension()  == 'jpeg' || $file->guessExtension()  == 'png' || $file->guessExtension() == 'svg'){

                    $fileName = md5(uniqid()).'.'.$file->guessExtension();
                    $file->move($uploads_directory, $fileName);

                    $upload = new Upload();
                    $upload->setName($fileName);
                    $manager->persist($upload);

                }
            }

            $manager->flush();

        }

        $upload = $repo->findAll();
        return $this->render('upload/index.html.twig', [
            'form' => $form->createView(), 'imagesUploaded' => $upload
        ]);
    }


}
