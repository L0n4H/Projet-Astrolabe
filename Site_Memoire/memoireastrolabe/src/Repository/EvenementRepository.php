<?php

namespace App\Repository;

use App\Entity\Evenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Evenement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Evenement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Evenement[]    findAll()
 * @method Evenement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenement::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Evenement $entity, bool $flush = true): void
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
    public function remove(Evenement $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function getTypesEvent()
    {
        return $this->createQueryBuilder('e')
                    ->join('e.typeEvenement','t')
                    ->select('t.id, t.label')
                    ->where('t.etat = :etat')
                    ->setParameter('etat', 1)
                    ->distinct()
                    ->getQuery()
                    ->getResult();
    }

    public function getTagsEvent()
    {
        return $this->createQueryBuilder('e')
                    ->join('e.etiquettes','t')
                    ->select('t.id, t.motsCles')
                    ->where('t.etat = :etat')
                    ->setParameter('etat', 1)
                    ->distinct()
                    ->getQuery()
                    ->getResult();
    }

    public function getLieux()
    {
        return $this->createQueryBuilder('e')
                    ->join('e.lieu','l')
                    ->select('l.id, l.CP, l.ville, l.nomBatiment')
                    ->where('l.etat = :etat')
                    ->setParameter('etat', 1)
                    ->distinct()
                    ->getQuery()
                    ->getResult();
    }
    
    public function applySearch($filters)
    {
        $query = $this->createQueryBuilder('e');
        
        /** YEAR */
        $annee = $filters["annee"] != "" ? $filters["annee"] : null;
        if ( $annee )
        {
            $query = $query->where('YEAR(e.dateDebut) = :year')->setParameter('year', $annee);
        }

        /** TRIMESTRE */
        $trimestre = $filters["trimestre"] != "" ? 
            explode(",", str_replace("]", "", str_replace("[", "", $filters["trimestre"]))) : 
            null;
        if ( $trimestre )
        {
            $query = $query->andWhere('MONTH(e.dateDebut) IN (:month)')->setParameter('month', $trimestre);
        }

        $genre = $filters["genre"] != "" ? $filters["genre"] : null;
        if ( $genre )
        {
            $query = $query->andWhere(':genre MEMBER OF e.genresMusicaux')->setParameter('genre', $genre);
        }

        /** TYPE */
        $type = $filters["type"] != "" ? $filters["type"] : null;
        if ( $type )
        {
            $query = $query->andWhere('e.typeEvenement = :type')->setParameter('type', $type);
        }

        /** LIEUX */
        $lieu = $filters["lieu"] != "" ? $filters["lieu"] : null;
        if ( $lieu )
        {
            $query = $query->join('e.lieu', 'l')
                  ->andWhere('l.id = :lieu')
                  ->setParameter('lieu', $lieu);
        }

        /** SEARCH */
        $search = $filters["search"] != "" ? $filters["search"] : null;
        if ( $search )
        {
            $query = $query->join('e.etiquettes', 'et')
                            ->andWhere("e.titre LIKE :search OR et.motsCles LIKE :search")
                            ->setParameter("search", "%$search%")
                            ;
        }

        return $query->andWhere('e.etat = :etat')->setParameter('etat',1)->getQuery()->getResult();
    }

    public function findByEtat($etat, $limit = null, $offset = null)
    {
        $query = $this->createQueryBuilder('e')
                    ->where('e.etat = :etat')
                    ->setParameter(':etat',$etat);
        if ($limit) $query = $query->setMaxResults($limit);
        if ($offset) $query = $query->setFirstResult($offset);

        return $query->getQuery()->getResult();
    }
    public function findByTitreDate($titre,$dateDebut)
    {
        return $this->createQueryBuilder('a')
        ->where('upper(a.titre) = upper(:titre)')
        ->andWhere('a.dateDebut = :dateDebut')
        ->setParameter('titre',$titre)
        ->setParameter('dateDebut',$dateDebut)
        ->getQuery()
        ->getOneOrNullResult();
    }

    public function findOneByEtat($id,$etat_id)
    {
        return $this->createQueryBuilder('e')
                    ->where('e.etat = :etat_id')
                    ->andWhere('e.id = :id')
                    ->setParameter('etat_id', $etat_id)
                    ->setParameter('id', $id)
                    ->getQuery()
                    ->getResult();
    }

    // /**
    //  * @return Evenement[] Returns an array of Evenement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Evenement
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
