<?php

namespace App\Repository;

use App\Entity\TypeEvenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeEvenement|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeEvenement|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeEvenement[]    findAll()
 * @method TypeEvenement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeEvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeEvenement::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(TypeEvenement $entity, bool $flush = true): void
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
    public function remove(TypeEvenement $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findByEtat($etat_id)
    {
        return $this->createQueryBuilder('t')
                    ->where('t.etat = :etat_id')
                    ->setParameter('etat_id', $etat_id)
                    ->getQuery()
                    ->getResult();
    }
    public function findByLabel($label)
    {
        return $this->createQueryBuilder('a')
        ->where('upper(a.label) = upper(:label)')
        ->setParameter('label',$label)
        ->getQuery()
        ->getOneOrNullResult();
    }
    public function findOneByEtat($id,$etat_id)
    {
        return $this->createQueryBuilder('t')
                    ->where('t.etat = :etat_id')
                    ->andWhere('t.id = :id')
                    ->setParameter('etat_id', $etat_id)
                    ->setParameter('id', $id)
                    ->getQuery()
                    ->getResult();
    }

    // /**
    //  * @return TypeEvenement[] Returns an array of TypeEvenement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeEvenement
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
