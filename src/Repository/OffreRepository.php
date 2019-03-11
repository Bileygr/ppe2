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
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT o.id, o.libelle nomO, u.nom nomU, f.nom nomF, o.description, o.adresse, o.ville, o.codepostal, o.debut, o.fin, o.dateajout
                FROM App\Entity\Offre o ,App\Entity\User u, App\Entity\Formation f 
                WHERE o.iduser_id = u.id  
                AND o.idformation = f.id';

        $stmt = $conn->prepare($sql);
        
        return $stmt->fetchAll();
    }

    public function findById($id)
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT o.id, o.nom nomO, u.nom nomU, f.nom nomF, o.description, o.adresse, o.ville, o.codepostal, o.debut, o.fin, o.dateajout
                FROM App\Entity\Offre o, App\Entity\User u, App\Entity\Formation f 
                WHERE o.idpartenaire = u.id  
                AND o.idformation = f.id 
                AND o.idpartenaire = :id';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id' => $id]);

        return $stmt->fetchAll();
    }

    public function countFormation()
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT formation.nom, COUNT(*) AS \'nombre\' FROM offre JOIN formation ON offre.idformation_id = formation.id GROUP BY formation.nom';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function countPartenaire()
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT user.nom, COUNT(*) AS \'nombre\' FROM offre JOIN user ON offre.iduser_id = user.id WHERE user.roles LIKE "%ROLE_PARTENAIRE%" GROUP BY user.nom';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
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
