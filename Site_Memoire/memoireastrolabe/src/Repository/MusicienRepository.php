<?php

namespace App\Repository;

use App\Entity\Musicien;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Musicien|null find($id, $lockMode = null, $lockVersion = null)
 * @method Musicien|null findOneBy(array $criteria, array $orderBy = null)
 * @method Musicien[]    findAll()
 * @method Musicien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MusicienRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Musicien::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Musicien $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Musicien $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findByEtat($etat_id)
    {
        return $this->createQueryBuilder('m')
                    ->where('m.etat = :etat_id')
                    ->setParameter('etat_id', $etat_id)
                    ->getQuery()
                    ->getResult();
    }
    public function findOneByEtat($id,$etat_id)
    {
        return $this->createQueryBuilder('m')
                    ->where('m.etat = :etat_id')
                    ->andWhere('m.id = :id')
                    ->setParameter('etat_id', $etat_id)
                    ->setParameter('id', $id)
                    ->getQuery()
                    ->getResult();
    }
    // /**
    //  * @return Musicien[] Returns an array of Musicien objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Musicien
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
