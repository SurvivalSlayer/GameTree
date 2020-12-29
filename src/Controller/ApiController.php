<?php



namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\AnnoncesRepository;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


/**
 * @Route("/api", name="api_")
 */
class ApiController extends AbstractController
{

    /**
     * @Route("/recherche_post", name="recherche_post", methods={"GET"})
     */
    public function list(AnnoncesRepository $annoncesRepository){
        //on récupère la liste des annonces
        $annonces = $annoncesRepository->findAll();
        
        //encodage json
        $encoders = [new JsonEncoder()];

        //normaliser converti collection to array
        $normalizers = [new OjectNormalizer()];

        //on fait la convertion
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($annonces, 'json');
        dd($jsonContent);
    }

}   