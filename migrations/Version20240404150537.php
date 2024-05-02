<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240404150537 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE badge CHANGE nom_badge nom_badge VARCHAR(255) NOT NULL, CHANGE type type VARCHAR(255) NOT NULL, CHANGE img_badge img_badge VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BFE6ADA943');
        $this->addSql('DROP INDEX fk_404021bfe6ada943 ON formation');
        $this->addSql('CREATE INDEX formation_ibfk_1 ON formation (cat_id)');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BFE6ADA943 FOREIGN KEY (cat_id) REFERENCES categorie (id_cat)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE badge CHANGE nom_badge nom_badge VARCHAR(255) DEFAULT NULL, CHANGE type type VARCHAR(255) DEFAULT NULL, CHANGE img_badge img_badge VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BFE6ADA943');
        $this->addSql('DROP INDEX formation_ibfk_1 ON formation');
        $this->addSql('CREATE INDEX FK_404021BFE6ADA943 ON formation (cat_id)');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BFE6ADA943 FOREIGN KEY (cat_id) REFERENCES categorie (id_cat)');
    }
}
