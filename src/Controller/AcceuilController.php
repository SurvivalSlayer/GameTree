<?php

namespace App\Controller;

use App\Entity\Annonces;
use App\Form\AnnoncesType;
use App\Repository\AnnoncesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AcceuilController extends AbstractController
{
    /**
     * @Route("/Acceuil", name="app_Acceuil")
     */
    public function HomePage(AnnoncesRepository $annoncesRepository){

        return $this->render('acceuil.html.twig', [
            'annonces' => $annoncesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/Post", name="app_post")
     */
    public function Post(AnnoncesRepository $annoncesRepository){

        $user = $this->getUser();

        $userID = $user->getId();

        return $this->render('post.html.twig', [
            'annonces' => $annoncesRepository->findBy($userID),
        ]);
    }


    /**
     * @Route("/Post/new", name="app_post_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $annonce = new Annonces();
        $form = $this->createForm(AnnoncesType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //--------Images---------------
            $images = $form->get('images')->getData();

            foreach($images as $image){

                $fileName = md5(uniqid()) . '.' . $image->guessExtension();
        
                //copie le fichier dans le dossier uploads
                $image->move(
                    $this->getParameter('images_annonces_directory'),
                    $fileName
                );

                //on stocke le nom de l'image dans la bdd
                $img = new ImageAnnonces();
                $img->setName($fileName);
                $annonce->addImages($img);
            }

            //----------Files------------------
            $files = $form->get('files')->getData();

            foreach($files as $file){
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
            }

            

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($annonce);
            $entityManager->flush();

            return $this->redirectToRoute('app_Acceuil');
        }

        return $this->render('post.html.twig', [
            'annonce' => $annonce,
            'form' => $form->createView(),
        ]);
    }
}