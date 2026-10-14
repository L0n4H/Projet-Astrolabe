<?php

namespace App\Repository;

use App\Entity\Membre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Membre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Membre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Membre[]    findAll()
 * @method Membre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MembreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Membre::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Membre $entity, bool $flush = true): void
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
    public function remove(Membre $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }
    public function findByEtat($etat_id)
    {
        return $this->createQueryBuilder('m')
                    ->join('m.musicien','mm')
                    ->join('m.groupe','mg')
                    ->where('mm.etat = :etat_id')
                    ->andWhere('mg.etat = :etat_id')
                    ->setParameter('etat_id', $etat_id)
                    ->getQuery()
                    ->getResult();
    }
    public function findOneByEtat($id,$etat_id)
    {

        return $this->createQueryBuilder('m')
                    ->join('m.musicien','mm')
                    ->join('m.groupe','mg')
                    ->where('mm.etat = :etat_id')
                    ->andWhere('mg.etat = :etat_id')
                    ->andWhere('m.id = :id')
                    ->setParameter('etat_id', $etat_id)
                    ->setParameter('id', $id)
                    ->getQuery()
                    ->getResult();
    }

    public function findMusiciensByGroupeId($id)
    {
        return $this->createQueryBuilder('m')
                    ->where('m.groupe = :id')
                    ->setParameter('id', $id)
                    ->getQuery()
                    ->getResult();
    }

    // public function findOneByCriteres($musicien_id, $groupe_id, $actif)
    // {
    //     return $this->createQueryBuilder('m')
    //                 ->where('m.groupe = :grId')
    //                 ->andWhere('m.musicien = :mId')
    //                 ->andWhere('m.actif = :actif')
    //                 ->setParameter('grId', $groupe_id)
    //                 ->setParameter('mId', $musicien_id)
    //                 ->setParameter('actif', $actif)
    //                 ->getQuery()
    //                 ->getResult();
    // }

    // /**
    //  * @return Membre[] Returns an array of Membre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Membre
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
