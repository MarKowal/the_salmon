<?php

namespace App\Repository;

use App\Entity\IncomesCategoryAssignedToUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<IncomesCategoryAssignedToUsers>
 *
 * @method IncomesCategoryAssignedToUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method IncomesCategoryAssignedToUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method IncomesCategoryAssignedToUsers[]    findAll()
 * @method IncomesCategoryAssignedToUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IncomesCategoryAssignedToUsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IncomesCategoryAssignedToUsers::class);
    }

//    /**
//     * @return IncomesCategoryAssignedToUsers[] Returns an array of IncomesCategoryAssignedToUsers objects
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

//    public function findOneBySomeField($value): ?IncomesCategoryAssignedToUsers
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }


    
}
