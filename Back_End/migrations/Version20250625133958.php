<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250625133958 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE action (id INT AUTO_INCREMENT NOT NULL, type_action VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE associer_contenu (id INT AUTO_INCREMENT NOT NULL, id_contenu_id INT NOT NULL, INDEX IDX_D658726A9996445F (id_contenu_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE associer_tarif (id INT AUTO_INCREMENT NOT NULL, id_container_id INT NOT NULL, id_tarif_id INT NOT NULL, INDEX IDX_4BC8158F9FE08230 (id_container_id), INDEX IDX_4BC8158F65A7E6CC (id_tarif_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE container (id INT AUTO_INCREMENT NOT NULL, associer_contenu_id INT NOT NULL, nom_container VARCHAR(100) NOT NULL, designation_container VARCHAR(255) DEFAULT NULL, INDEX IDX_C7A2EC1B5BB849A2 (associer_contenu_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE contenir (id INT AUTO_INCREMENT NOT NULL, id_page_web_id INT NOT NULL, id_container_id INT NOT NULL, INDEX IDX_3C914DFD89DC7CA4 (id_page_web_id), INDEX IDX_3C914DFD9FE08230 (id_container_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE contenu (id INT AUTO_INCREMENT NOT NULL, description_contenu LONGTEXT DEFAULT NULL, adresse_image_contenu VARCHAR(255) DEFAULT NULL, contenu_texte_contenu LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, nom_message VARCHAR(100) NOT NULL, prenom_message VARCHAR(100) NOT NULL, adresse_message LONGTEXT NOT NULL, adresse_mail_message VARCHAR(150) NOT NULL, telephone_message VARCHAR(50) NOT NULL, texte_message LONGTEXT NOT NULL, statut_message VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE modifier_contenu (id INT AUTO_INCREMENT NOT NULL, id_contenu_id INT NOT NULL, id_user_admin_id INT NOT NULL, date_modifier_contenu DATETIME NOT NULL, INDEX IDX_4BD4A9689996445F (id_contenu_id), INDEX IDX_4BD4A9683A8EB775 (id_user_admin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE modifier_tarif (id INT AUTO_INCREMENT NOT NULL, id_tarif_id INT NOT NULL, id_user_admin_id INT NOT NULL, INDEX IDX_399C9EF765A7E6CC (id_tarif_id), INDEX IDX_399C9EF73A8EB775 (id_user_admin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE page_web (id INT AUTO_INCREMENT NOT NULL, adresse_url VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, nom_profil VARCHAR(100) NOT NULL, prenom_profil VARCHAR(100) NOT NULL, adresse_profil LONGTEXT NOT NULL, adresse_mail_profil VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE tarif (id INT AUTO_INCREMENT NOT NULL, designation_tarif VARCHAR(255) NOT NULL, prix_tarif VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE traiter (id INT AUTO_INCREMENT NOT NULL, id_user_admin_id INT NOT NULL, id_message_id INT NOT NULL, id_action_id INT NOT NULL, date_traiter DATETIME NOT NULL, INDEX IDX_D4A42E863A8EB775 (id_user_admin_id), INDEX IDX_D4A42E86F6F093FE (id_message_id), INDEX IDX_D4A42E861D074C12 (id_action_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user_admin (id INT AUTO_INCREMENT NOT NULL, profil_id_profil_id INT NOT NULL, user_user_admin VARCHAR(100) NOT NULL, password_user_admin VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_6ACCF62ED1ED13D6 (profil_id_profil_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', available_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE associer_contenu ADD CONSTRAINT FK_D658726A9996445F FOREIGN KEY (id_contenu_id) REFERENCES contenu (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE associer_tarif ADD CONSTRAINT FK_4BC8158F9FE08230 FOREIGN KEY (id_container_id) REFERENCES container (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE associer_tarif ADD CONSTRAINT FK_4BC8158F65A7E6CC FOREIGN KEY (id_tarif_id) REFERENCES tarif (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE container ADD CONSTRAINT FK_C7A2EC1B5BB849A2 FOREIGN KEY (associer_contenu_id) REFERENCES associer_contenu (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE contenir ADD CONSTRAINT FK_3C914DFD89DC7CA4 FOREIGN KEY (id_page_web_id) REFERENCES page_web (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE contenir ADD CONSTRAINT FK_3C914DFD9FE08230 FOREIGN KEY (id_container_id) REFERENCES container (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE modifier_contenu ADD CONSTRAINT FK_4BD4A9689996445F FOREIGN KEY (id_contenu_id) REFERENCES contenu (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE modifier_contenu ADD CONSTRAINT FK_4BD4A9683A8EB775 FOREIGN KEY (id_user_admin_id) REFERENCES user_admin (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE modifier_tarif ADD CONSTRAINT FK_399C9EF765A7E6CC FOREIGN KEY (id_tarif_id) REFERENCES tarif (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE modifier_tarif ADD CONSTRAINT FK_399C9EF73A8EB775 FOREIGN KEY (id_user_admin_id) REFERENCES user_admin (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE traiter ADD CONSTRAINT FK_D4A42E863A8EB775 FOREIGN KEY (id_user_admin_id) REFERENCES user_admin (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE traiter ADD CONSTRAINT FK_D4A42E86F6F093FE FOREIGN KEY (id_message_id) REFERENCES message (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE traiter ADD CONSTRAINT FK_D4A42E861D074C12 FOREIGN KEY (id_action_id) REFERENCES action (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_admin ADD CONSTRAINT FK_6ACCF62ED1ED13D6 FOREIGN KEY (profil_id_profil_id) REFERENCES profil (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE associer_contenu DROP FOREIGN KEY FK_D658726A9996445F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE associer_tarif DROP FOREIGN KEY FK_4BC8158F9FE08230
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE associer_tarif DROP FOREIGN KEY FK_4BC8158F65A7E6CC
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE container DROP FOREIGN KEY FK_C7A2EC1B5BB849A2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE contenir DROP FOREIGN KEY FK_3C914DFD89DC7CA4
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE contenir DROP FOREIGN KEY FK_3C914DFD9FE08230
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE modifier_contenu DROP FOREIGN KEY FK_4BD4A9689996445F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE modifier_contenu DROP FOREIGN KEY FK_4BD4A9683A8EB775
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE modifier_tarif DROP FOREIGN KEY FK_399C9EF765A7E6CC
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE modifier_tarif DROP FOREIGN KEY FK_399C9EF73A8EB775
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE traiter DROP FOREIGN KEY FK_D4A42E863A8EB775
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE traiter DROP FOREIGN KEY FK_D4A42E86F6F093FE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE traiter DROP FOREIGN KEY FK_D4A42E861D074C12
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user_admin DROP FOREIGN KEY FK_6ACCF62ED1ED13D6
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE action
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE associer_contenu
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE associer_tarif
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE container
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE contenir
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE contenu
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE message
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE modifier_contenu
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE modifier_tarif
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE page_web
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE profil
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE tarif
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE traiter
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user_admin
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
    }
}
