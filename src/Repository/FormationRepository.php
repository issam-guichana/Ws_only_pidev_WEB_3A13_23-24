<?php

namespace App\Repository;

use App\Entity\Formation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Formation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Formation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Formation[]    findAll()
 * @method Formation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Formation::class);
    }
    /**
     * Récupère toutes les formations dans une catégorie spécifique.
     *
     * @param int $categoryId L'ID de la catégorie
     * @return Formation[]|null Les formations dans la catégorie donnée
     */
    public function findByCategory(int $categoryId): ?array
    {
        return $this->createQueryBuilder('f')
            ->innerJoin('f.cat', 'c')
            ->where('c.idCat = :categoryId')
            ->setParameter('categoryId', $categoryId)
            ->getQuery()
            ->getResult();
    }
}
