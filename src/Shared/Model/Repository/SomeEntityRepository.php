<?php

namespace App\Shared\Model\Repository;

use App\Shared\Model\Entity\SomeEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SomeEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method SomeEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method SomeEntity[]    findAll()
 * @method SomeEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SomeEntityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SomeEntity::class);
    }

    // /**
    //  * @return SomeEntity[] Returns an array of SomeEntity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SomeEntity
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
