<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230927085950 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat ADD idmodelebatterie_id INT NOT NULL');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_603499939CA6FAA3 FOREIGN KEY (idmodelebatterie_id) REFERENCES modelebaterie (id)');
        $this->addSql('CREATE INDEX IDX_603499939CA6FAA3 ON contrat (idmodelebatterie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat DROP FOREIGN KEY FK_603499939CA6FAA3');
        $this->addSql('DROP INDEX IDX_603499939CA6FAA3 ON contrat');
        $this->addSql('ALTER TABLE contrat DROP idmodelebatterie_id');
    }
}
