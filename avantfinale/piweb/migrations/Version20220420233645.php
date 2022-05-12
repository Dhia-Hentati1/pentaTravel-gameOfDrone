<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220420233645 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activite (id INT AUTO_INCREMENT NOT NULL, libele VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, emplacement VARCHAR(255) NOT NULL, description VARCHAR(1000) NOT NULL, date DATE NOT NULL, type VARCHAR(255) NOT NULL, avis VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reglement (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, dateoperation DATE NOT NULL, montant DOUBLE PRECISION NOT NULL, modedepaiement VARCHAR(255) NOT NULL, echeancier DATE NOT NULL, INDEX IDX_EBE4C14CFB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, activite_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, datedenaissance DATE NOT NULL, role VARCHAR(255) NOT NULL, login VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, INDEX IDX_1D1C63B39B0F88B1 (activite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reglement ADD CONSTRAINT FK_EBE4C14CFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B39B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B39B0F88B1');
        $this->addSql('ALTER TABLE reglement DROP FOREIGN KEY FK_EBE4C14CFB88E14F');
        $this->addSql('DROP TABLE activite');
        $this->addSql('DROP TABLE reglement');
        $this->addSql('DROP TABLE utilisateur');
    }
}
