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

    public function findAllOffres()
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT offre.id AS \'id\', offre.libelle AS \'libelle\', user.nom AS \'nompartenaire\', formation.nom AS \'nomformation\', offre.description AS \'description\', offre.adresse AS \'adresse\', offre.ville AS \'ville\', offre.codepostal AS \'codepostal\', offre.debut AS \'debut\', offre.fin AS \'fin\', offre.dateajout AS \'dateajout\'
            FROM offre 
            JOIN user ON user.id = offre.iduser_id 
            JOIN formation ON formation.id = offre.idformation_id';

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

    public function findById($id)
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT offre.id AS \'id\', offre.libelle AS \'libelle\', user.id AS \'idpartenaire\', user.nom AS \'nomU\', formation.nom AS \'nomF\', offre.description AS \'description\', offre.adresse AS \'adresse\', offre.ville AS \'ville\', offre.codepostal AS \'codepostal\', offre.debut AS \'debut\', offre.fin AS \'fin\', offre.dateajout AS \'dateajout\'
            FROM offre 
            JOIN user ON user.id = offre.iduser_id 
            JOIN formation ON formation.id = offre.idformation_id
            WHERE offre.iduser_id = :id';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id' => $id]);

        return $stmt->fetchAll();
    }

    public function findByOffreId($id)
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT offre.id AS \'id\', offre.libelle AS \'libelle\', user.id AS \'idpartenaire\', user.nom AS \'nomU\', formation.id AS \'formationId\', formation.nom AS \'nomF\', offre.description, offre.adresse, offre.ville, offre.codepostal, offre.debut, offre.fin, offre.dateajout AS \'dateajout\'
            FROM offre 
            JOIN user ON user.id = offre.iduser_id 
            JOIN formation ON formation.id = offre.idformation_id
            WHERE offre.id = :id';
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