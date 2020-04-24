<?php

namespace App\Controller;

use App\Entity\Slide;
use App\Entity\SlideUpload;
use App\Entity\Upload;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SlideController extends AbstractController
{
    /**
     * @Route("/slide/create", name="slide_create")
     */
    public function create()
    {
        $entityRepository = $this->getDoctrine()->getRepository(Upload::class);
        $images = $entityRepository->findAll();

        return $this->render('slide/create.html.twig', [
            'images' => $images
        ]);
    }

    /**
     * @Route("/slide/store", name="slide_store")
     */
    public function store(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $slide = new Slide();
        $slide->setName($request->get('name'));
        $slide->setCreatedAt(new \DateTime());

        $entityManager->persist($slide);
        $entityManager->flush();

        $i = 0;
        foreach ($request->get('imageid') as $image) {
            $entityRepository = $this->getDoctrine()->getRepository(Upload::class);
            $imageCurrent = $entityRepository->find($image);

            $slideUpload = new SlideUpload();
            $slideUpload->setSlide($slide);
            $slideUpload->setUpload($imageCurrent);
            $slideUpload->setX1($request->get('x1')[$i]);
            $slideUpload->setY1($request->get('y1')[$i]);
            $slideUpload->setZ1($request->get('z1')[$i]);
            $slideUpload->setX2($request->get('x2')[$i]);
            $slideUpload->setY2($request->get('y2')[$i]);
            $slideUpload->setZ2($request->get('z2')[$i]);

            $entityManager->persist($slideUpload);
            $entityManager->flush();

            $i++;
        }

        return $this->redirectToRoute('slide_create');
    }
}
