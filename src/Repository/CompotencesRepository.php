<?php

namespace App\Repository;

use App\Entity\Compotences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Compotences|null find($id, $lockMode = null, $lockVersion = null)
 * @method Compotences|null findOneBy(array $criteria, array $orderBy = null)
 * @method Compotences[]    findAll()
 * @method Compotences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompotencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Compotences::class);
    }

    // /**
    //  * @return Compotences[] Returns an array of Compotences objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Compotences
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
