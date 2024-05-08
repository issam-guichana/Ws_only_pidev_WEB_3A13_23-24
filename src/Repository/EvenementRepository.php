<?php

namespace App\Repository;

use App\Entity\Evenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class EvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenement::class);
    }

    public function findBySearchTerm(string $searchTerm): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.nomEvent LIKE :term OR e.description LIKE :term')
            ->setParameter('term', '%'.$searchTerm.'%')
            ->getQuery()
            ->getResult();
    }
}
