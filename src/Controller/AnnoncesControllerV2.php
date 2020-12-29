<?php

namespace App\Controller;

use App\Entity\Annonces;
use App\Entity\Files;
use App\Entity\ImageAnnonces;
use App\Form\AnnoncesType;
use App\Repository\AnnoncesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AnnoncesControllerV2 extends AbstractController
{

    /**
     * @Route("/post", name="app_post")
     */
    public function Post(AnnoncesRepository $annoncesRepository){

        $user = $this->getUser();
        $userID = $user->getId();

        return $this->render('post.html.twig', [
            'annonces' => $annoncesRepository->YourPost($userID),
        ]);    
    }


    /**
     * @Route("/post/new", name="app_post_new")
     */
    public function new(Request $request): Response
    {
        $annonce = new Annonces();
        $user = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        $form = $this->createForm(AnnoncesType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //--------Images---------------
            $image = $form->get('images')->getData();
            $imageName = md5(uniqid()) . '.' . $image->guessExtension();

            //copie le fichier dans le dossier uploads
            $image->move(
                $this->getParameter('images_annonces_directory'),
                $imageName
            );

            //on stocke le nom de l'image dans la bdd
            $img = new ImageAnnonces();
            $img->setName($imageName);
            $annonce->addImageAnnonce($img);

            //----------Files------------------
            $files = $form->get('files')->getData();
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();

            //copie le fichier dans le dossier uploads
            $file->move(
                $this->getParameter('file_annonces_directory'),
                $fileName
            );

            //on stocke le nom des fichier dans la bdd
            $File = new Files();
            $File->setName($fileName);
            $annonce->addFile($File);
            
            $user->addAnnonce($annonce);

            
            $entityManager->persist($annonce);
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_post');
        }

        return $this->render('postJeu.html.twig', [
            'annonce' => $annonce,
            'form' => $form->createView(),
        ]);
    }
}