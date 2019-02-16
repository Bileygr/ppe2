<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190216074519 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX FK_offre_idpartenaire ON offre');
        $this->addSql('DROP INDEX id ON offre');
        $this->addSql('DROP INDEX FK_offre_idformation ON offre');
        $this->addSql('ALTER TABLE offre CHANGE codepostal codepostal VARCHAR(5) NOT NULL, CHANGE dateajout dateajout DATE NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE offre CHANGE codepostal codepostal INT NOT NULL, CHANGE dateajout dateajout DATETIME NOT NULL');
        $this->addSql('CREATE INDEX FK_offre_idpartenaire ON offre (idpartenaire)');
        $this->addSql('CREATE UNIQUE INDEX id ON offre (id)');
        $this->addSql('CREATE INDEX FK_offre_idformation ON offre (idformation)');
    }
}
