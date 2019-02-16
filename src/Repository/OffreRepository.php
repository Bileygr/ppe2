<?php

namespace App\Repository;

use App\Entity\Offre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Offre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Offre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Offre[]    findAll()
 * @method Offre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffreRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Offre::class);
    }

    public function findAll()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
            'SELECT o.id, o.nom nomO, u.nom nomU, f.nom nomF, o.description, o.adresse, o.ville, o.codepostal, o.debut, o.fin, o.dateajout
             FROM App\Entity\Offre o ,App\Entity\User u, App\Entity\Formation f where o.idpartenaire = u.id  and o.idformation = f.id'
        );
        $offres = $query->execute();

        return $offres;
    }

    public function vaTeFaireFoutre($id)
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT o.id, o.nom nomO, u.nom nomU, f.nom nomF, o.description, o.adresse, o.ville, o.codepostal, o.debut, o.fin, o.dateajout
                FROM App\Entity\Offre o, App\Entity\User u, App\Entity\Formation f 
                WHERE o.idpartenaire = u.id  
                AND o.idformation = f.id 
                AND o.idpartenaire = :id';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id' => $id]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();

        /*
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
               'SELECT o.id, o.nom nomO, u.nom nomU, f.nom nomF, o.description, o.adresse, o.ville, o.codepostal, o.debut, o.fin, o.dateajout
                FROM App\Entity\Offre o, App\Entity\User u, App\Entity\Formation f 
                WHERE o.idpartenaire = u.id  
                AND o.idformation = f.id 
                AND o.idpartenaire = :id')
                ->setParameter('id', $id)
                ->getResult();    

        $test = $query->execute();
        dump($test);

        return $test;
        */
    }

    // /**
    //  * @return Offre[] Returns an array of Offre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Offre
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
