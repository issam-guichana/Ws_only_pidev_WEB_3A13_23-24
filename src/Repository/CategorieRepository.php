<?php

namespace App\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Categorie;

class CategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categorie::class);
    }

    // Add your custom repository methods here

    /**
     * Find categories by name.
     *
     * @param string $name The category name
     * @return Categorie[]|null The categories
     */
    public function findByName(string $name): ?array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.name = :name')
            ->setParameter('name', $name)
            ->getQuery()
            ->getResult();
    }

    /**
     * Find categories by status.
     *
     * @param string $status The category status
     * @return Categorie[]|null The categories
     */
    public function findByStatus(string $status): ?array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.status = :status')
            ->setParameter('status', $status)
            ->getQuery()
            ->getResult();
    }

    // You can add more custom methods as needed
}
