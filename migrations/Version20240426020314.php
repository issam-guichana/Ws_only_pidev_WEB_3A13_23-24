<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240426020314 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BFE6ADA943');
        $this->addSql('DROP INDEX fk_404021bfe6ada943 ON formation');
        $this->addSql('CREATE INDEX IDX_404021BFE6ADA943 ON formation (cat_id)');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BFE6ADA943 FOREIGN KEY (cat_id) REFERENCES categorie (id_cat)');
        $this->addSql('ALTER TABLE user ADD reset_token VARCHAR(180) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BFE6ADA943');
        $this->addSql('DROP INDEX idx_404021bfe6ada943 ON formation');
        $this->addSql('CREATE INDEX FK_404021BFE6ADA943 ON formation (cat_id)');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BFE6ADA943 FOREIGN KEY (cat_id) REFERENCES categorie (id_cat)');
        $this->addSql('ALTER TABLE user DROP reset_token');
    }
}
