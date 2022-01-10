<?php

namespace App\Repository;

use App\Entity\Diamond;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Diamond|null find($id, $lockMode = null, $lockVersion = null)
 * @method Diamond|null findOneBy(array $criteria, array $orderBy = null)
 * @method Diamond[]    findAll()
 * @method Diamond[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DiamondRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Diamond::class);
    }

    // /**
    //  * @return Diamond[] Returns an array of Diamond objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Diamond
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
