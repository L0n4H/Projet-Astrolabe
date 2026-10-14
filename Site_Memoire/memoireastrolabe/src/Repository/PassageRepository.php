<?php

namespace App\Repository;

use App\Entity\Passage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Passage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Passage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Passage[]    findAll()
 * @method Passage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PassageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Passage::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Passage $entity, bool $flush = true): void
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
    public function remove(Passage $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findByEtat($etat_id)
    {
        return $this->createQueryBuilder('p')
                    ->join('p.evenement','pe')
                    ->join('p.groupe','pg')
                    ->where('pe.etat = :etat_id')
                    ->andWhere('pg.etat = :etat_id')
                    ->setParameter('etat_id', $etat_id)
                    ->getQuery()
                    ->getResult();
    }
    public function findOneByEtat($id,$etat_id)
    {

        return $this->createQueryBuilder('p')
                    ->join('p.evenement','pe')
                    ->join('p.groupe','pg')
                    ->where('pg.etat = :etat_id')
                    ->where('pe.etat = :etat_id')
                    ->andWhere('p.id = :id')
                    ->setParameter('etat_id', $etat_id)
                    ->setParameter('id', $id)
                    ->getQuery()
                    ->getResult();
    }
    // /**
    //  * @return Passage[] Returns an array of Passage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Passage
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
