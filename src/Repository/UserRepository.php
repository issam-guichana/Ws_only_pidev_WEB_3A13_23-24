<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;

/**
 * @extends ServiceEntityRepository<User>
 *
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Find a user by username.
     *
     * @param string $username
     * @return User|null
     */

    public function findOneByUsername(string $username): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.username = :username')
            ->setParameter('username', $username)
            ->getQuery()
            ->getOneOrNullResult();
    }


    public function numberOfUsers()
    {
        $entitymanager = $this->getEntityManager();
        $query = $entitymanager->createQuery("SELECT COUNT(u) FROM APP\Entity\User u");
        return $query->getSingleScalarResult();
    }

    // UserRepository.php
    public function searchUsers(string $searchQuery, string $filterCriteria = null): Query
    {
        $queryBuilder = $this->createQueryBuilder('u')
            ->where('u.username LIKE :query')
            ->orWhere('u.email LIKE :query')
            ->orWhere('u.role LIKE :query')
            ->orWhere('u.age LIKE :query')
            ->orWhere('u.gender LIKE :query')
            ->setParameter('query', '%' . $searchQuery . '%');

        // Apply filter criteria if provided
        if ($filterCriteria !== null) {
            switch ($filterCriteria) {
                case 'username':
                    $queryBuilder->andWhere('u.username LIKE :searchQuery');
                    break;
                case 'email':
                    $queryBuilder->andWhere('u.email LIKE :searchQuery');
                    break;
                case 'role':
                    $queryBuilder->andWhere('u.role LIKE :searchQuery');
                    break;
                case 'age':
                    $queryBuilder->andWhere('u.age LIKE :searchQuery');
                    break;
                case 'gender':
                    $queryBuilder->andWhere('u.gender LIKE :searchQuery');
                    break;
                // Add more cases for additional filter criteria if needed
            }
            $queryBuilder->setParameter('searchQuery', '%' . $searchQuery . '%');
        }

        return $queryBuilder->getQuery();
    }
}
