<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController
{
    /**
     * @Route("/Acceuil", name="app_Acceuil")
     */
    public function HomePage(){

        return $this->render('acceuil.html.twig', []);
    }
}