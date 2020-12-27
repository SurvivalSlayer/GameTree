<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/User", name="app_Profile")
     */
    public function ProfilePage(){

        return $this->render('Users/Profile.html.twig', []);
    }
}