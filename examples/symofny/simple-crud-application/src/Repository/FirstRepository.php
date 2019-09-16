<?php

namespace App\Repository;

use App\Entity\First;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method First|null find($id, $lockMode = null, $lockVersion = null)
 * @method First|null findOneBy(array $criteria, array $orderBy = null)
 * @method First[]    findAll()
 * @method First[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FirstRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, First::class);
    }

    // /**
    //  * @return First[] Returns an array of First objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?First
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
