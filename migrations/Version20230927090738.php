<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230927090738 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE borne ADD codetypecharge_id INT NOT NULL, ADD idstation_id INT NOT NULL');
        $this->addSql('ALTER TABLE borne ADD CONSTRAINT FK_D7465BA52764BB44 FOREIGN KEY (codetypecharge_id) REFERENCES typecharge (id)');
        $this->addSql('ALTER TABLE borne ADD CONSTRAINT FK_D7465BA5EC14AF0F FOREIGN KEY (idstation_id) REFERENCES station (id)');
        $this->addSql('CREATE INDEX IDX_D7465BA52764BB44 ON borne (codetypecharge_id)');
        $this->addSql('CREATE INDEX IDX_D7465BA5EC14AF0F ON borne (idstation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE borne DROP FOREIGN KEY FK_D7465BA52764BB44');
        $this->addSql('ALTER TABLE borne DROP FOREIGN KEY FK_D7465BA5EC14AF0F');
        $this->addSql('DROP INDEX IDX_D7465BA52764BB44 ON borne');
        $this->addSql('DROP INDEX IDX_D7465BA5EC14AF0F ON borne');
        $this->addSql('ALTER TABLE borne DROP codetypecharge_id, DROP idstation_id');
    }
}
