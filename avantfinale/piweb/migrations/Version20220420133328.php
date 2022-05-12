<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220420133328 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reglement ADD utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reglement ADD CONSTRAINT FK_EBE4C14CFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_EBE4C14CFB88E14F ON reglement (utilisateur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reglement DROP FOREIGN KEY FK_EBE4C14CFB88E14F');
        $this->addSql('DROP INDEX IDX_EBE4C14CFB88E14F ON reglement');
        $this->addSql('ALTER TABLE reglement DROP utilisateur_id');
    }
}
