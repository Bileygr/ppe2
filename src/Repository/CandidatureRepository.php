<?php

namespace App\Repository;

use App\Entity\Candidature;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Candidature|null find($id, $lockMode = null, $lockVersion = null)
 * @method Candidature|null findOneBy(array $criteria, array $orderBy = null)
 * @method Candidature[]    findAll()
 * @method Candidature[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CandidatureRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Candidature::class);
    }

    public function findPartenaireId($id)
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT candidature.id AS \'id\', offre.libelle AS \'libelle\', user.nom AS \'nom\', user.prenom AS \'prenom\', offre.debut AS \'debut\', offre.fin \'fin\', candidature.status AS \'status\', offre.dateajout AS \'dateajout\' FROM candidature JOIN offre ON offre.id = candidature.idoffre_id JOIN user ON user.id = candidature.iduserjeune_id WHERE candidature.iduserpartenaire_id = :id';

        $stmt = $conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        
        return $stmt->fetchAll();
    }

    public function updateCandidatureStatus($id)
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'UPDATE candidature SET status = 1 WHERE id = :id';

        $stmt = $conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        
        return $stmt->fetchAll();
    }

    // /**
    //  * @return Candidature[] Returns an array of Candidature objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Candidature
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
