<?php

namespace App\Repository;

use App\Entity\SlideUpload;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SlideUpload|null find($id, $lockMode = null, $lockVersion = null)
 * @method SlideUpload|null findOneBy(array $criteria, array $orderBy = null)
 * @method SlideUpload[]    findAll()
 * @method SlideUpload[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SlideUploadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SlideUpload::class);
    }

    // /**
    //  * @return SlideUpload[] Returns an array of SlideUpload objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SlideUpload
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
