<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Images;
use App\Form\UserEditProfilType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="app_Profile")
     */
    public function ProfilePage(){

        return $this->render('Users/profil.html.twig');
    }


    /**
     * @Route("/user/edit", name="app_EditProfile")
     */
    public function EditProfilePage(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        if($request->isMethod('POST')){

            if($request->request->get('pass') == $request->request->get('pass2'))
            {
                $user->setPassword($passwordEncoder->encodePassword($user, $request->request->get('pass')));
                $user->setUsername($request->request->get('username'));
                $em->persist($user);
                $em->flush();
                
                return $this->redirectToRoute('app_Profile');
            }
        }
       
        return $this->render('Users/profilModif.html.twig');
    }

     /**
     * @Route("/user/edit/image_profil", name="app_EditProfileImage")
     */
    public function EditProfileImage(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $form = $this->createForm(UserEditProfilType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $image = $form->get('image')->getData();
            $fileName = md5(uniqid()) . '.' . $image->guessExtension();
           
            //copie le fichier dans le dossier uploads
            $image->move(
                $this->getParameter('images_profil_directory'),
                $fileName
            );

            //on stocke le nom de l'image dans la bdd
            $img = new Images();
            $img->setName($fileName);
            $user->addImage($img);

            $em->persist($user);
            $em->flush();
            
            return $this->redirectToRoute('app_Profile');
        }

        return $this->render('Users/profilImageModif.html.twig', ['form' => $form->createView(),]);
    }

    /**
     * @Route("/user/edit/image_profil/supprime/{id}", name="app_EditProfileImage_Delete", methods={"DELETE"})
     */
    public function deleteImage(Images $image, Resquest $request){
        $data = json_decode($request->getContent(), true);

        //on vérifie si le token est valide
        if($this->isCsrfTokenValid('delete'.$image->getId(), $data['_token'])){
            //on récupère le nom de l'image
            $name = $image->getName();

            //on supprime le fichier
            unlink($this->getParameter('images_profil_directory').'/'.$name);

            // On supprime l'entrée de la base
            $em = $this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();

            //on répond en json
            return new JsonResponse(['success' => 1]);
        }else{
            return new JsonResponse(['error' => 'Token invalide'], 400);
        }
    }
}