<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Images;
use App\Form\EditProfilType;
use App\Form\ImageUploadType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/User", name="app_Profile")
     */
    public function ProfilePage(){

        return $this->render('Users/Profil.html.twig', []);
    }


    /**
     * @Route("/User/Edit", name="app_EditProfile")
     */
    public function EditProfilePage(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $form = $this->createForm(ImageUploadType::class, $user);
        $form->handleRequest($request);

        if($request->isMethod('POST')){


            //on vérifie si les 2 mdp son identiques
            if($request->request->get('pass') == $request->request->get('pass2')){
                $user->setPassword($passwordEncoder->encodePassword($user, $request->request->get('pass')));
                $user->setUsername($request->request->get('username'));

                if($form->isSubmitted() && $form->isValid()){

                    $image = $form->get('img_profil')->getData();
                    $fileName = md5(uniqid()) . '.' . $image->guessExtension();
                
                    //copie le fichier dans le dossier uploads
                    $image->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );

                    //on stocke le nom de l'image dans la bdd
                    $img = new Images();
                    $img->setName($fichier);
                    $user->addImages($img);
                }
                
                $em->persist($user);
                $em->flush();
                
                return $this->redirectToRoute('app_Profile');
            }
        }

        return $this->render('Users/ProfilModif.html.twig', ['ImageUpload' => $form->createView(),]);
    }
}