<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190607024425 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE document (id INT AUTO_INCREMENT NOT NULL, iduser_id INT NOT NULL, libelle VARCHAR(255) NOT NULL, chemin VARCHAR(255) NOT NULL, dateajout DATETIME NOT NULL, INDEX IDX_D8698A76786A81FB (iduser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A76786A81FB FOREIGN KEY (iduser_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD preference_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D81022C0 FOREIGN KEY (preference_id) REFERENCES formation (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649D81022C0 ON user (preference_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE document');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D81022C0');
        $this->addSql('DROP INDEX IDX_8D93D649D81022C0 ON user');
        $this->addSql('ALTER TABLE user DROP preference_id');
    }
}
