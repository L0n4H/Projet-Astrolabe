<?php

namespace App\Repository;

use App\Entity\GenreMusical;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GenreMusical|null find($id, $lockMode = null, $lockVersion = null)
 * @method GenreMusical|null findOneBy(array $criteria, array $orderBy = null)
 * @method GenreMusical[]    findAll()
 * @method GenreMusical[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GenreMusicalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GenreMusical::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(GenreMusical $entity, bool $flush = true): void
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
    public function remove(GenreMusical $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findByEtat($etat_id)
    {
        return $this->createQueryBuilder('g')
                    ->where('g.etat = :etat_id')
                    ->setParameter('etat_id', $etat_id)
                    ->getQuery()
                    ->getResult();
    }
    public function findOneByEtat($id,$etat_id)
    {
        return $this->createQueryBuilder('g')
                    ->where('g.etat = :etat_id')
                    ->andWhere('g.id = :id')
                    ->setParameter('etat_id', $etat_id)
                    ->setParameter('id', $id)
                    ->getQuery()
                    ->getResult();
    }
    public function findByNom($nom)
    {
        return $this->createQueryBuilder('a')
        ->where('upper(a.nom) = upper(:nom)')
        ->setParameter('nom',$nom)
        ->getQuery()
        ->getOneOrNullResult();
    }


    // /**
    //  * @return GenreMusical[] Returns an array of GenreMusical objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GenreMusical
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
