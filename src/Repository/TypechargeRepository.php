<?php

namespace App\Repository;

use App\Entity\Typecharge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Typecharge>
 *
 * @method Typecharge|null find($id, $lockMode = null, $lockVersion = null)
 * @method Typecharge|null findOneBy(array $criteria, array $orderBy = null)
 * @method Typecharge[]    findAll()
 * @method Typecharge[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypechargeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Typecharge::class);
    }

//    /**
//     * @return Typecharge[] Returns an array of Typecharge objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Typecharge
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
