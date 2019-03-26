<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190325090019 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE candidature (id INT AUTO_INCREMENT NOT NULL, idoffre_id INT NOT NULL, iduserjeune_id INT NOT NULL, iduserpartenaire_id INT NOT NULL, status INT DEFAULT NULL, dateajout DATE NOT NULL, INDEX IDX_E33BD3B8E61D1857 (idoffre_id), INDEX IDX_E33BD3B87F78CE6B (iduserjeune_id), INDEX IDX_E33BD3B88022D62 (iduserpartenaire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE document (id INT AUTO_INCREMENT NOT NULL, iduser_id INT NOT NULL, libelle VARCHAR(255) NOT NULL, chemin VARCHAR(255) NOT NULL, dateajout DATETIME NOT NULL, INDEX IDX_D8698A76786A81FB (iduser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offre (id INT AUTO_INCREMENT NOT NULL, iduser_id INT NOT NULL, idformation_id INT NOT NULL, libelle VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, adresse VARCHAR(38) NOT NULL, ville VARCHAR(32) NOT NULL, codepostal VARCHAR(5) NOT NULL, debut DATE NOT NULL, fin DATE NOT NULL, dateajout DATETIME NOT NULL, INDEX IDX_AF86866F786A81FB (iduser_id), INDEX IDX_AF86866F14AF5727 (idformation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) DEFAULT NULL, username VARCHAR(50) NOT NULL, siret VARCHAR(9) DEFAULT NULL, telephone VARCHAR(10) NOT NULL, adresse VARCHAR(38) NOT NULL, ville VARCHAR(32) NOT NULL, codepostal VARCHAR(5) NOT NULL, dateajout DATE NOT NULL, cv VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B8E61D1857 FOREIGN KEY (idoffre_id) REFERENCES offre (id)');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B87F78CE6B FOREIGN KEY (iduserjeune_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B88022D62 FOREIGN KEY (iduserpartenaire_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A76786A81FB FOREIGN KEY (iduser_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866F786A81FB FOREIGN KEY (iduser_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE offre ADD CONSTRAINT FK_AF86866F14AF5727 FOREIGN KEY (idformation_id) REFERENCES formation (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866F14AF5727');
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B8E61D1857');
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B87F78CE6B');
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B88022D62');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A76786A81FB');
        $this->addSql('ALTER TABLE offre DROP FOREIGN KEY FK_AF86866F786A81FB');
        $this->addSql('DROP TABLE candidature');
        $this->addSql('DROP TABLE document');
        $this->addSql('DROP TABLE formation');
        $this->addSql('DROP TABLE offre');
        $this->addSql('DROP TABLE user');
    }
}
