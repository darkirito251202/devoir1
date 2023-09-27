<?php

namespace App\Repository;

use App\Entity\Modelebaterie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Modelebaterie>
 *
 * @method Modelebaterie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Modelebaterie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Modelebaterie[]    findAll()
 * @method Modelebaterie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModelebaterieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Modelebaterie::class);
    }

//    /**
//     * @return Modelebaterie[] Returns an array of Modelebaterie objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Modelebaterie
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
