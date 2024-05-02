<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240417223514 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE usr_badge (id_u_b INT AUTO_INCREMENT NOT NULL, id_badge INT DEFAULT NULL, id_user INT DEFAULT NULL, INDEX id_user (id_user), INDEX id_badge (id_badge), PRIMARY KEY(id_u_b)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE usr_badge ADD CONSTRAINT FK_C01FC0671075092D FOREIGN KEY (id_badge) REFERENCES badge (id_badge)');
        $this->addSql('ALTER TABLE usr_badge ADD CONSTRAINT FK_C01FC0676B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user)');
        $this->addSql('ALTER TABLE badge CHANGE nom_badge nom_badge VARCHAR(255) NOT NULL, CHANGE type type VARCHAR(255) NOT NULL, CHANGE img_badge img_badge VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BFE6ADA943');
        $this->addSql('DROP INDEX fk_404021bfe6ada943 ON formation');
        $this->addSql('CREATE INDEX formation_ibfk_1 ON formation (cat_id)');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BFE6ADA943 FOREIGN KEY (cat_id) REFERENCES categorie (id_cat)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE usr_badge DROP FOREIGN KEY FK_C01FC0671075092D');
        $this->addSql('ALTER TABLE usr_badge DROP FOREIGN KEY FK_C01FC0676B3CA4B');
        $this->addSql('DROP TABLE usr_badge');
        $this->addSql('ALTER TABLE badge CHANGE nom_badge nom_badge VARCHAR(255) DEFAULT NULL, CHANGE type type VARCHAR(255) DEFAULT NULL, CHANGE img_badge img_badge VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BFE6ADA943');
        $this->addSql('DROP INDEX formation_ibfk_1 ON formation');
        $this->addSql('CREATE INDEX FK_404021BFE6ADA943 ON formation (cat_id)');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BFE6ADA943 FOREIGN KEY (cat_id) REFERENCES categorie (id_cat)');
    }
}
