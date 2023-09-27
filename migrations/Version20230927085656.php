<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230927085656 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat ADD idusager_id INT NOT NULL');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_60349993312D5909 FOREIGN KEY (idusager_id) REFERENCES usager (id)');
        $this->addSql('CREATE INDEX IDX_60349993312D5909 ON contrat (idusager_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat DROP FOREIGN KEY FK_60349993312D5909');
        $this->addSql('DROP INDEX IDX_60349993312D5909 ON contrat');
        $this->addSql('ALTER TABLE contrat DROP idusager_id');
    }
}
