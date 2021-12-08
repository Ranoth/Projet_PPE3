<?php

namespace App\Repository;

use App\Entity\Medoc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Medoc|null find($id, $lockMode = null, $lockVersion = null)
 * @method Medoc|null findOneBy(array $criteria, array $orderBy = null)
 * @method Medoc[]    findAll()
 * @method Medoc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MedocRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Medoc::class);
    }

    // /**
    //  * @return Medoc[] Returns an array of Medoc objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Medoc
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
