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
     * @Route("/acceuil", name="app_Acceuil")
     */
    public function HomePage(AnnoncesRepository $annoncesRepository){

        return $this->render('acceuil.html.twig', [
            'annonces' => $annoncesRepository->findAll(),
        ]);
    }

}