<?php

namespace App\Repository;

use App\Entity\Badge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class BadgeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Badge::class);
    }

    public function countTotalBadges(): int
    {
        return $this->createQueryBuilder('b')
            ->select('COUNT(b.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }


    public function getTopBadgeName(): ?string
    {
        $qb = $this->createQueryBuilder('b');
        $qb->select('b.nomBadge, COUNT(ub.idUB) as total')
            ->leftJoin('b.usrBadges', 'ub')
            ->groupBy('b.id')
            ->orderBy('total', 'DESC')
            ->setMaxResults(1);

        $result = $qb->getQuery()->getResult();

        // Si un résultat est trouvé, retournez le nom du badge le plus obtenu
        if (!empty($result)) {
            return $result[0]['nomBadge'];
        }

        return null;
    }

    public function countTotalAssignedBadges(): int
    {
        return $this->createQueryBuilder('b')
            ->select('COUNT(ub.idUB)')
            ->leftJoin('b.usrBadges', 'ub')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countTotalAssignedUsers(): int
{
    $qb = $this->createQueryBuilder('b');
    $qb->select('COUNT(DISTINCT ub.idUser)')
        ->leftJoin('b.usrBadges', 'ub')
        ->getQuery()
        ->getSingleScalarResult();

    return $qb->getQuery()->getSingleScalarResult();
}
}
