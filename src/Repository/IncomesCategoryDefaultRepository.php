<?php

namespace App\Repository;

use App\Entity\IncomesCategoryDefault;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<IncomesCategoryDefault>
 *
 * @method IncomesCategoryDefault|null find($id, $lockMode = null, $lockVersion = null)
 * @method IncomesCategoryDefault|null findOneBy(array $criteria, array $orderBy = null)
 * @method IncomesCategoryDefault[]    findAll()
 * @method IncomesCategoryDefault[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IncomesCategoryDefaultRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IncomesCategoryDefault::class);
    }

//    /**
//     * @return IncomesCategoryDefault[] Returns an array of IncomesCategoryDefault objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?IncomesCategoryDefault
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
