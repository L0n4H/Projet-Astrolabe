<?php

namespace App\Repository;

use App\Entity\Etat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Etat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Etat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Etat[]    findAll()
 * @method Etat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Etat::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Etat $entity, bool $flush = true): void
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
    public function remove(Etat $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function getNbEtatEnAttente()
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql  = 'SELECT COUNT(*) AS nb FROM (';
        $sql .=     'SELECT re.id FROM ressource re WHERE re.etat_id IN (:id_attente, :id_import) ';
        $sql .=     'UNION ALL ';
        $sql .=     'SELECT li.id FROM lieu li WHERE li.etat_id IN (:id_attente, :id_import) ';
        $sql .=     'UNION ALL ';
        $sql .=     'SELECT ev.id FROM evenement ev WHERE ev.etat_id IN (:id_attente, :id_import) ';
        $sql .=     'UNION ALL ';
        $sql .=     'SELECT ty.id FROM type_evenement ty WHERE ty.etat_id IN (:id_attente, :id_import) ';
        $sql .=     'UNION ALL ';
        $sql .=     'SELECT gr.id FROM groupe gr WHERE gr.etat_id IN (:id_attente, :id_import) ';
        $sql .=     'UNION ALL ';
        $sql .=     'SELECT ge.id FROM genre_musical ge WHERE ge.etat_id IN (:id_attente, :id_import) ';
        $sql .=     'UNION ALL ';
        $sql .=     'SELECT ins.id FROM instrument ins WHERE ins.etat_id IN (:id_attente, :id_import) ';
        $sql .=     'UNION ALL ';
        $sql .=     'SELECT mu.id FROM musicien mu WHERE mu.etat_id IN (:id_attente, :id_import) ';
        $sql .=     'UNION ALL ';
        $sql .=     'SELECT na.id FROM nationalite na WHERE na.etat_id IN (:id_attente, :id_import) ';
        $sql .=     'UNION ALL ';
        $sql .=     'SELECT la.id FROM label la WHERE la.etat_id IN (:id_attente, :id_import) ';
        $sql .=     'UNION ALL ';
        $sql .=     'SELECT et.id FROM etiquette et WHERE et.etat_id IN (:id_attente, :id_import) ';
        $sql .= ') c';
        
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery(['id_attente' => 4, 'id_import' => 3]);
        return $resultSet->fetchAllAssociative()[0]["nb"];
    }

    // /**
    //  * @return Etat[] Returns an array of Etat objects
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
    public function findOneBySomeField($value): ?Etat
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
