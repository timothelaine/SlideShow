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

        // Création du formulaire
        $form = $this->createForm(UploadType::class, $uploadForm);

        // Récupération de la requête
        $form->handleRequest($request);

        // Si le formulaire a été soumis
        if($form->isSubmitted() && $form->isValid()) {
            try {
                $uploads_directory = $this->getParameter('upload_directory');
                $files = $request->files->get('upload')['name'];
                foreach ($files as $file) {
                    // Validation du type de fichier (SVG, PNG, JPG)
                    if ($file->guessExtension() == 'jpeg' || $file->guessExtension() == 'png' || $file->guessExtension() == 'svg') {
                        // Renommer le fichier en un nom unique
                        $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                        $file->move($uploads_directory, $fileName);

                        // Push le nom du fichier en BDD
                        $upload = new Upload();
                        $upload->setName($fileName);
                        $manager->persist($upload);
                    }
                }

                $manager->flush();
                $upload = $repo->findAll();
            } catch (Exception $e) {
                return $this->render('upload/index.html.twig', [
                    'form' => $form->createView(), 'imagesUploaded' => $upload, 'message' => ['content' => "Une erreur est survenue lors de l'upload des images, veuillez réessayer.", 'title' => 'Erreur', 'type' => 'ko']
                ]);
            }

            return $this->render('upload/index.html.twig', [
                'form' => $form->createView(), 'imagesUploaded' => $upload, 'message' => ['content' => "Les images ont bien étés mise en ligne.", 'title' => 'Upload Réussi', 'type' => 'ok']
            ]);
        }

        // Récuperation de toutes les images
        $upload = $repo->findAll();

        return $this->render('upload/index.html.twig', [
            'form' => $form->createView(), 'imagesUploaded' => $upload, 'message' => ['type' => 'none']
        ]);
    }

    /**
     * @Route("/deleteimage", name="deleteimage")
     */
    public function deleteImage(Request $request, UploadRepository $repo, EntityManagerInterface $manager)
    {
        try {
            $imagesId = $request->request->get('id');
            $manager = $this->getDoctrine()->getManager();

            // Récupération de l'image à supprimer
            $images = $manager->getRepository(Upload::class)->find($imagesId);

            // Suppression de l'image en BDD
            $manager->remove($images);
            $manager->flush();

            // Suppression de l'image sur le serveur
            $fileName = './uploads/' . $images->getName();
            unlink($fileName); // Delete file

        } catch (Exception $e){
            return $this->json(['imageName' => $images->getName(), 'message' => ['content' => "Une erreur est survenue lors de la suppression des images.", 'title' => 'Erreur', 'type' => 'ko']]);
        }

        return $this->json(['imageName' => $images->getName(), 'message' => ['content' => "Les images sélectionnées ont bien été supprimées.", 'title' => 'Suppression réussie !', 'type' => 'ok']]);
    }
}
