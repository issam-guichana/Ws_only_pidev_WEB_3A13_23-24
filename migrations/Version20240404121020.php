<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240404121020 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE badge CHANGE nom_badge nom_badge VARCHAR(255) DEFAULT NULL, CHANGE type type VARCHAR(255) DEFAULT NULL, CHANGE img_badge img_badge VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY formation_ibfk_1');
        $this->addSql('ALTER TABLE formation CHANGE cat_id cat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BFE6ADA943 FOREIGN KEY (cat_id) REFERENCES categorie (id_cat)');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY message_ibfk_1');
        $this->addSql('ALTER TABLE message CHANGE room_id room_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F54177093 FOREIGN KEY (room_id) REFERENCES room (id_room)');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY question_ibfk_1');
        $this->addSql('ALTER TABLE question CHANGE quiz_id quiz_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E853CD175 FOREIGN KEY (quiz_id) REFERENCES quiz (id_quiz)');
        $this->addSql('ALTER TABLE quiz DROP FOREIGN KEY quiz_ibfk_1');
        $this->addSql('ALTER TABLE quiz CHANGE nom_quiz nom_quiz VARCHAR(20) NOT NULL, CHANGE image image VARCHAR(5000) NOT NULL');
        $this->addSql('ALTER TABLE quiz ADD CONSTRAINT FK_A412FA925200282E FOREIGN KEY (formation_id) REFERENCES formation (id_form)');
        $this->addSql('ALTER TABLE user_form_room DROP FOREIGN KEY user_form_room_ibfk_3');
        $this->addSql('ALTER TABLE user_form_room DROP FOREIGN KEY user_form_room_ibfk_1');
        $this->addSql('ALTER TABLE user_form_room DROP FOREIGN KEY user_form_room_ibfk_2');
        $this->addSql('ALTER TABLE user_form_room CHANGE user_id user_id INT DEFAULT NULL, CHANGE form_id form_id INT DEFAULT NULL, CHANGE room_id room_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user_form_room ADD CONSTRAINT FK_E65ED868A76ED395 FOREIGN KEY (user_id) REFERENCES user (id_user)');
        $this->addSql('ALTER TABLE user_form_room ADD CONSTRAINT FK_E65ED8685FF69B7D FOREIGN KEY (form_id) REFERENCES formation (id_form)');
        $this->addSql('ALTER TABLE user_form_room ADD CONSTRAINT FK_E65ED86854177093 FOREIGN KEY (room_id) REFERENCES room (id_room)');
        $this->addSql('ALTER TABLE user_formation DROP FOREIGN KEY user_formation_ibfk_4');
        $this->addSql('ALTER TABLE user_formation DROP FOREIGN KEY user_formation_ibfk_1');
        $this->addSql('ALTER TABLE user_formation DROP FOREIGN KEY user_formation_ibfk_2');
        $this->addSql('ALTER TABLE user_formation CHANGE user_id user_id INT DEFAULT NULL, CHANGE form_id form_id INT DEFAULT NULL, CHANGE certif_id certif_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user_formation ADD CONSTRAINT FK_40A0AC5BE3C72804 FOREIGN KEY (certif_id) REFERENCES certificat (id_certif)');
        $this->addSql('ALTER TABLE user_formation ADD CONSTRAINT FK_40A0AC5BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id_user)');
        $this->addSql('ALTER TABLE user_formation ADD CONSTRAINT FK_40A0AC5B5FF69B7D FOREIGN KEY (form_id) REFERENCES formation (id_form)');
        $this->addSql('ALTER TABLE user_quiz DROP FOREIGN KEY user_quiz_ibfk_1');
        $this->addSql('ALTER TABLE user_quiz DROP FOREIGN KEY user_quiz_ibfk_2');
        $this->addSql('ALTER TABLE user_quiz CHANGE user_id user_id INT DEFAULT NULL, CHANGE quiz_id quiz_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user_quiz ADD CONSTRAINT FK_DE93B65B853CD175 FOREIGN KEY (quiz_id) REFERENCES quiz (id_quiz)');
        $this->addSql('ALTER TABLE user_quiz ADD CONSTRAINT FK_DE93B65BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id_user)');
        $this->addSql('ALTER TABLE usr_badge DROP FOREIGN KEY usr_badge_ibfk_1');
        $this->addSql('ALTER TABLE usr_badge DROP FOREIGN KEY usr_badge_ibfk_2');
        $this->addSql('ALTER TABLE usr_badge CHANGE id_badge id_badge INT DEFAULT NULL, CHANGE id_user id_user INT DEFAULT NULL');
        $this->addSql('ALTER TABLE usr_badge ADD CONSTRAINT FK_C01FC0671075092D FOREIGN KEY (id_badge) REFERENCES badge (id_badge)');
        $this->addSql('ALTER TABLE usr_badge ADD CONSTRAINT FK_C01FC0676B3CA4B FOREIGN KEY (id_user) REFERENCES user (id_user)');
        $this->addSql('ALTER TABLE usr_evt DROP FOREIGN KEY usr_evt_ibfk_2');
        $this->addSql('ALTER TABLE usr_evt DROP FOREIGN KEY usr_evt_ibfk_1');
        $this->addSql('ALTER TABLE usr_evt CHANGE user_id user_id INT DEFAULT NULL, CHANGE event_id event_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE usr_evt ADD CONSTRAINT FK_DEE7915871F7E88B FOREIGN KEY (event_id) REFERENCES evenement (id_event)');
        $this->addSql('ALTER TABLE usr_evt ADD CONSTRAINT FK_DEE79158A76ED395 FOREIGN KEY (user_id) REFERENCES user (id_user)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE badge CHANGE nom_badge nom_badge VARCHAR(255) NOT NULL, CHANGE type type VARCHAR(255) NOT NULL, CHANGE img_badge img_badge VARCHAR(500) NOT NULL');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BFE6ADA943');
        $this->addSql('ALTER TABLE formation CHANGE cat_id cat_id INT NOT NULL');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT formation_ibfk_1 FOREIGN KEY (cat_id) REFERENCES categorie (id_cat) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F54177093');
        $this->addSql('ALTER TABLE message CHANGE room_id room_id INT NOT NULL');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT message_ibfk_1 FOREIGN KEY (room_id) REFERENCES room (id_room) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E853CD175');
        $this->addSql('ALTER TABLE question CHANGE quiz_id quiz_id INT NOT NULL');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT question_ibfk_1 FOREIGN KEY (quiz_id) REFERENCES quiz (id_quiz) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE quiz DROP FOREIGN KEY FK_A412FA925200282E');
        $this->addSql('ALTER TABLE quiz CHANGE nom_quiz nom_quiz VARCHAR(20) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE image image VARCHAR(5000) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE quiz ADD CONSTRAINT quiz_ibfk_1 FOREIGN KEY (formation_id) REFERENCES formation (id_form) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_formation DROP FOREIGN KEY FK_40A0AC5BE3C72804');
        $this->addSql('ALTER TABLE user_formation DROP FOREIGN KEY FK_40A0AC5BA76ED395');
        $this->addSql('ALTER TABLE user_formation DROP FOREIGN KEY FK_40A0AC5B5FF69B7D');
        $this->addSql('ALTER TABLE user_formation CHANGE certif_id certif_id INT NOT NULL, CHANGE user_id user_id INT NOT NULL, CHANGE form_id form_id INT NOT NULL');
        $this->addSql('ALTER TABLE user_formation ADD CONSTRAINT user_formation_ibfk_4 FOREIGN KEY (certif_id) REFERENCES certificat (id_certif) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_formation ADD CONSTRAINT user_formation_ibfk_1 FOREIGN KEY (user_id) REFERENCES user (id_user) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_formation ADD CONSTRAINT user_formation_ibfk_2 FOREIGN KEY (form_id) REFERENCES formation (id_form) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_form_room DROP FOREIGN KEY FK_E65ED868A76ED395');
        $this->addSql('ALTER TABLE user_form_room DROP FOREIGN KEY FK_E65ED8685FF69B7D');
        $this->addSql('ALTER TABLE user_form_room DROP FOREIGN KEY FK_E65ED86854177093');
        $this->addSql('ALTER TABLE user_form_room CHANGE user_id user_id INT NOT NULL, CHANGE form_id form_id INT NOT NULL, CHANGE room_id room_id INT NOT NULL');
        $this->addSql('ALTER TABLE user_form_room ADD CONSTRAINT user_form_room_ibfk_3 FOREIGN KEY (user_id) REFERENCES user (id_user) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_form_room ADD CONSTRAINT user_form_room_ibfk_1 FOREIGN KEY (form_id) REFERENCES formation (id_form) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_form_room ADD CONSTRAINT user_form_room_ibfk_2 FOREIGN KEY (room_id) REFERENCES room (id_room) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_quiz DROP FOREIGN KEY FK_DE93B65B853CD175');
        $this->addSql('ALTER TABLE user_quiz DROP FOREIGN KEY FK_DE93B65BA76ED395');
        $this->addSql('ALTER TABLE user_quiz CHANGE quiz_id quiz_id INT NOT NULL, CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE user_quiz ADD CONSTRAINT user_quiz_ibfk_1 FOREIGN KEY (quiz_id) REFERENCES quiz (id_quiz) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_quiz ADD CONSTRAINT user_quiz_ibfk_2 FOREIGN KEY (user_id) REFERENCES user (id_user) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE usr_badge DROP FOREIGN KEY FK_C01FC0671075092D');
        $this->addSql('ALTER TABLE usr_badge DROP FOREIGN KEY FK_C01FC0676B3CA4B');
        $this->addSql('ALTER TABLE usr_badge CHANGE id_badge id_badge INT NOT NULL, CHANGE id_user id_user INT NOT NULL');
        $this->addSql('ALTER TABLE usr_badge ADD CONSTRAINT usr_badge_ibfk_1 FOREIGN KEY (id_badge) REFERENCES badge (id_badge) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE usr_badge ADD CONSTRAINT usr_badge_ibfk_2 FOREIGN KEY (id_user) REFERENCES user (id_user) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE usr_evt DROP FOREIGN KEY FK_DEE7915871F7E88B');
        $this->addSql('ALTER TABLE usr_evt DROP FOREIGN KEY FK_DEE79158A76ED395');
        $this->addSql('ALTER TABLE usr_evt CHANGE event_id event_id INT NOT NULL, CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE usr_evt ADD CONSTRAINT usr_evt_ibfk_2 FOREIGN KEY (event_id) REFERENCES evenement (id_event) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE usr_evt ADD CONSTRAINT usr_evt_ibfk_1 FOREIGN KEY (user_id) REFERENCES user (id_user) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
