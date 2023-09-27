<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230927085244 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE borne (id INT AUTO_INCREMENT NOT NULL, date_miseenservice DATETIME NOT NULL, datederniererevision DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contrat (id INT AUTO_INCREMENT NOT NULL, datecontrat DATETIME NOT NULL, noimmatriculation VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modelebaterie (id INT AUTO_INCREMENT NOT NULL, capacite VARCHAR(20) NOT NULL, fabricant VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE operationrechargement (id INT AUTO_INCREMENT NOT NULL, dateheuredebut DATETIME NOT NULL, dateheurefin DATETIME NOT NULL, nbkwheures INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE station (id INT AUTO_INCREMENT NOT NULL, latitude INT NOT NULL, longitude INT NOT NULL, adresserue VARCHAR(255) NOT NULL, adresseville VARCHAR(255) NOT NULL, codepostal VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE supporter (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE typecharge (id INT AUTO_INCREMENT NOT NULL, libelletypecharge VARCHAR(255) NOT NULL, puissancetypecharge VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE borne');
        $this->addSql('DROP TABLE contrat');
        $this->addSql('DROP TABLE modelebaterie');
        $this->addSql('DROP TABLE operationrechargement');
        $this->addSql('DROP TABLE station');
        $this->addSql('DROP TABLE supporter');
        $this->addSql('DROP TABLE typecharge');
    }
}
