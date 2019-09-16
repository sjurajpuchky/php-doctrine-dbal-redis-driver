<?php

namespace App\Repository;

use App\Entity\Second;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Second|null find($id, $lockMode = null, $lockVersion = null)
 * @method Second|null findOneBy(array $criteria, array $orderBy = null)
 * @method Second[]    findAll()
 * @method Second[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SecondRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Second::class);
    }

    // /**
    //  * @return Second[] Returns an array of Second objects
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
    public function findOneBySomeField($value): ?Second
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
