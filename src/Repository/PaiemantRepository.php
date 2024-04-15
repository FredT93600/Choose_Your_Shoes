<?php

namespace App\Repository;

use App\Entity\Paiemant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Paiemant>
 *
 * @method Paiemant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Paiemant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Paiemant[]    findAll()
 * @method Paiemant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaiemantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Paiemant::class);
    }

//    /**
//     * @return Paiemant[] Returns an array of Paiemant objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Paiemant
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
