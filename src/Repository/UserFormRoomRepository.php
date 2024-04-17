<?php

namespace App\Repository;

use App\Entity\UserFormRoom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UserFormRoom>
 *
 * @method UserFormRoom|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserFormRoom|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserFormRoom[]    findAll()
 * @method UserFormRoom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserFormRoomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserFormRoom::class);
    }

//    /**
//     * @return UserFormRoom[] Returns an array of UserFormRoom objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UserFormRoom
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
