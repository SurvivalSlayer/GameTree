<?php

namespace App\Repository;

use App\Entity\ImageAnnonces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ImageAnnonces|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageAnnonces|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageAnnonces[]    findAll()
 * @method ImageAnnonces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageAnnoncesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageAnnonces::class);
    }

    // /**
    //  * @return ImageAnnonces[] Returns an array of ImageAnnonces objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ImageAnnonces
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
