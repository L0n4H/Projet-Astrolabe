<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220408090451 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie_musicale (id INT AUTO_INCREMENT NOT NULL, categorie_principale_id INT DEFAULT NULL, nom VARCHAR(50) NOT NULL, UNIQUE INDEX UNIQ_2599F6306C6E55B5 (nom), INDEX IDX_2599F630D639D323 (categorie_principale_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie_musicale_genre_musical (categorie_musicale_id INT NOT NULL, genre_musical_id INT NOT NULL, INDEX IDX_2508C467891F4D5E (categorie_musicale_id), INDEX IDX_2508C467FFFD05DC (genre_musical_id), PRIMARY KEY(categorie_musicale_id, genre_musical_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etat (id INT AUTO_INCREMENT NOT NULL, statut VARCHAR(191) NOT NULL, UNIQUE INDEX UNIQ_55CAF762E564F0BF (statut), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etiquette (id INT AUTO_INCREMENT NOT NULL, etat_id INT NOT NULL, mots_cles VARCHAR(50) NOT NULL, UNIQUE INDEX UNIQ_1E0E195AD4E4C6CA (mots_cles), INDEX IDX_1E0E195AD5E86FF (etat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, type_evenement_id INT DEFAULT NULL, lieu_id INT NOT NULL, etat_id INT NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, description LONGTEXT DEFAULT NULL, titre VARCHAR(191) NOT NULL, image VARCHAR(191) DEFAULT NULL, updated_at DATETIME DEFAULT NULL, lien_image VARCHAR(191) DEFAULT NULL, INDEX IDX_B26681E88939516 (type_evenement_id), INDEX IDX_B26681E6AB213CC (lieu_id), INDEX IDX_B26681ED5E86FF (etat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement_etiquette (evenement_id INT NOT NULL, etiquette_id INT NOT NULL, INDEX IDX_B050158BFD02F13 (evenement_id), INDEX IDX_B050158B7BD2EA57 (etiquette_id), PRIMARY KEY(evenement_id, etiquette_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement_ressource (evenement_id INT NOT NULL, ressource_id INT NOT NULL, INDEX IDX_3DC14995FD02F13 (evenement_id), INDEX IDX_3DC14995FC6CD52A (ressource_id), PRIMARY KEY(evenement_id, ressource_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement_genre_musical (evenement_id INT NOT NULL, genre_musical_id INT NOT NULL, INDEX IDX_1FEC0406FD02F13 (evenement_id), INDEX IDX_1FEC0406FFFD05DC (genre_musical_id), PRIMARY KEY(evenement_id, genre_musical_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE genre_musical (id INT AUTO_INCREMENT NOT NULL, etat_id INT NOT NULL, nom VARCHAR(191) NOT NULL, UNIQUE INDEX UNIQ_9D48DDAB6C6E55B5 (nom), INDEX IDX_9D48DDABD5E86FF (etat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe (id INT AUTO_INCREMENT NOT NULL, nationalite_id INT DEFAULT NULL, etat_id INT NOT NULL, nom VARCHAR(191) NOT NULL, date_creation VARCHAR(10) DEFAULT NULL, biographie LONGTEXT DEFAULT NULL, image VARCHAR(191) DEFAULT NULL, updated_at DATETIME DEFAULT NULL, lien_image VARCHAR(191) DEFAULT NULL, UNIQUE INDEX UNIQ_4B98C216C6E55B5 (nom), INDEX IDX_4B98C211B063272 (nationalite_id), INDEX IDX_4B98C21D5E86FF (etat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe_etiquette (groupe_id INT NOT NULL, etiquette_id INT NOT NULL, INDEX IDX_4E9ACA6D7A45358C (groupe_id), INDEX IDX_4E9ACA6D7BD2EA57 (etiquette_id), PRIMARY KEY(groupe_id, etiquette_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe_genre_musical (groupe_id INT NOT NULL, genre_musical_id INT NOT NULL, INDEX IDX_13D88307A45358C (groupe_id), INDEX IDX_13D8830FFFD05DC (genre_musical_id), PRIMARY KEY(groupe_id, genre_musical_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe_label (groupe_id INT NOT NULL, label_id INT NOT NULL, INDEX IDX_5B0A9EB87A45358C (groupe_id), INDEX IDX_5B0A9EB833B92F39 (label_id), PRIMARY KEY(groupe_id, label_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe_ressource (groupe_id INT NOT NULL, ressource_id INT NOT NULL, INDEX IDX_C30B96737A45358C (groupe_id), INDEX IDX_C30B9673FC6CD52A (ressource_id), PRIMARY KEY(groupe_id, ressource_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE instrument (id INT AUTO_INCREMENT NOT NULL, etat_id INT NOT NULL, nom VARCHAR(191) NOT NULL, UNIQUE INDEX UNIQ_3CBF69DD6C6E55B5 (nom), INDEX IDX_3CBF69DDD5E86FF (etat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `label` (id INT AUTO_INCREMENT NOT NULL, etat_id INT NOT NULL, nom VARCHAR(191) NOT NULL, date_creation VARCHAR(191) NOT NULL, description LONGTEXT DEFAULT NULL, logo VARCHAR(191) DEFAULT NULL, updated_at DATETIME DEFAULT NULL, lien_logo VARCHAR(191) DEFAULT NULL, UNIQUE INDEX UNIQ_EA750E86C6E55B5 (nom), INDEX IDX_EA750E8D5E86FF (etat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lieu (id INT AUTO_INCREMENT NOT NULL, etat_id INT NOT NULL, ville VARCHAR(191) NOT NULL, cp VARCHAR(5) NOT NULL, adresse VARCHAR(191) DEFAULT NULL, nom_batiment VARCHAR(191) NOT NULL, INDEX IDX_2F577D59D5E86FF (etat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE membre (id INT AUTO_INCREMENT NOT NULL, musicien_id INT NOT NULL, groupe_id INT DEFAULT NULL, actif TINYINT(1) NOT NULL, INDEX IDX_F6B4FB2960A30C4A (musicien_id), INDEX IDX_F6B4FB297A45358C (groupe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE membre_instrument (membre_id INT NOT NULL, instrument_id INT NOT NULL, INDEX IDX_6605D3C56A99F74A (membre_id), INDEX IDX_6605D3C5CF11D9C (instrument_id), PRIMARY KEY(membre_id, instrument_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE musicien (id INT AUTO_INCREMENT NOT NULL, nationalite_id INT DEFAULT NULL, etat_id INT NOT NULL, nom_scene VARCHAR(191) DEFAULT NULL, nom VARCHAR(191) DEFAULT NULL, prenom VARCHAR(191) DEFAULT NULL, date_naissance VARCHAR(10) DEFAULT NULL, image VARCHAR(191) DEFAULT NULL, updated_at DATETIME DEFAULT NULL, lien_image VARCHAR(191) DEFAULT NULL, INDEX IDX_551D84231B063272 (nationalite_id), INDEX IDX_551D8423D5E86FF (etat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE musicien_etiquette (musicien_id INT NOT NULL, etiquette_id INT NOT NULL, INDEX IDX_5A12B33D60A30C4A (musicien_id), INDEX IDX_5A12B33D7BD2EA57 (etiquette_id), PRIMARY KEY(musicien_id, etiquette_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nationalite (id INT AUTO_INCREMENT NOT NULL, etat_id INT NOT NULL, nom VARCHAR(50) NOT NULL, code_iso VARCHAR(2) NOT NULL, UNIQUE INDEX UNIQ_9EC4D73F6C6E55B5 (nom), INDEX IDX_9EC4D73FD5E86FF (etat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE passage (id INT AUTO_INCREMENT NOT NULL, groupe_id INT DEFAULT NULL, evenement_id INT DEFAULT NULL, date_debut DATETIME DEFAULT NULL, date_fin DATETIME DEFAULT NULL, INDEX IDX_2B258F677A45358C (groupe_id), INDEX IDX_2B258F67FD02F13 (evenement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ressource (id INT AUTO_INCREMENT NOT NULL, type_id INT DEFAULT NULL, etat_id INT NOT NULL, lien VARCHAR(191) DEFAULT NULL, nom VARCHAR(191) DEFAULT NULL, updated_at DATETIME DEFAULT NULL, titre VARCHAR(191) DEFAULT NULL, credits VARCHAR(191) DEFAULT NULL, INDEX IDX_939F4544C54C8C93 (type_id), INDEX IDX_939F4544D5E86FF (etat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ressource_etiquette (ressource_id INT NOT NULL, etiquette_id INT NOT NULL, INDEX IDX_78469329FC6CD52A (ressource_id), INDEX IDX_784693297BD2EA57 (etiquette_id), PRIMARY KEY(ressource_id, etiquette_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_evenement (id INT AUTO_INCREMENT NOT NULL, etat_id INT NOT NULL, `label` VARCHAR(191) NOT NULL, UNIQUE INDEX UNIQ_BFE0290EEA750E8 (`label`), INDEX IDX_BFE0290ED5E86FF (etat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_ressource (id INT AUTO_INCREMENT NOT NULL, `label` VARCHAR(191) NOT NULL, UNIQUE INDEX UNIQ_27590454EA750E8 (`label`), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(191) NOT NULL, email VARCHAR(191) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE categorie_musicale ADD CONSTRAINT FK_2599F630D639D323 FOREIGN KEY (categorie_principale_id) REFERENCES genre_musical (id)');
        $this->addSql('ALTER TABLE categorie_musicale_genre_musical ADD CONSTRAINT FK_2508C467891F4D5E FOREIGN KEY (categorie_musicale_id) REFERENCES categorie_musicale (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categorie_musicale_genre_musical ADD CONSTRAINT FK_2508C467FFFD05DC FOREIGN KEY (genre_musical_id) REFERENCES genre_musical (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE etiquette ADD CONSTRAINT FK_1E0E195AD5E86FF FOREIGN KEY (etat_id) REFERENCES etat (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E88939516 FOREIGN KEY (type_evenement_id) REFERENCES type_evenement (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E6AB213CC FOREIGN KEY (lieu_id) REFERENCES lieu (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681ED5E86FF FOREIGN KEY (etat_id) REFERENCES etat (id)');
        $this->addSql('ALTER TABLE evenement_etiquette ADD CONSTRAINT FK_B050158BFD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement_etiquette ADD CONSTRAINT FK_B050158B7BD2EA57 FOREIGN KEY (etiquette_id) REFERENCES etiquette (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement_ressource ADD CONSTRAINT FK_3DC14995FD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement_ressource ADD CONSTRAINT FK_3DC14995FC6CD52A FOREIGN KEY (ressource_id) REFERENCES ressource (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement_genre_musical ADD CONSTRAINT FK_1FEC0406FD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement_genre_musical ADD CONSTRAINT FK_1FEC0406FFFD05DC FOREIGN KEY (genre_musical_id) REFERENCES genre_musical (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE genre_musical ADD CONSTRAINT FK_9D48DDABD5E86FF FOREIGN KEY (etat_id) REFERENCES etat (id)');
        $this->addSql('ALTER TABLE groupe ADD CONSTRAINT FK_4B98C211B063272 FOREIGN KEY (nationalite_id) REFERENCES nationalite (id)');
        $this->addSql('ALTER TABLE groupe ADD CONSTRAINT FK_4B98C21D5E86FF FOREIGN KEY (etat_id) REFERENCES etat (id)');
        $this->addSql('ALTER TABLE groupe_etiquette ADD CONSTRAINT FK_4E9ACA6D7A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_etiquette ADD CONSTRAINT FK_4E9ACA6D7BD2EA57 FOREIGN KEY (etiquette_id) REFERENCES etiquette (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_genre_musical ADD CONSTRAINT FK_13D88307A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_genre_musical ADD CONSTRAINT FK_13D8830FFFD05DC FOREIGN KEY (genre_musical_id) REFERENCES genre_musical (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_label ADD CONSTRAINT FK_5B0A9EB87A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_label ADD CONSTRAINT FK_5B0A9EB833B92F39 FOREIGN KEY (label_id) REFERENCES `label` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_ressource ADD CONSTRAINT FK_C30B96737A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_ressource ADD CONSTRAINT FK_C30B9673FC6CD52A FOREIGN KEY (ressource_id) REFERENCES ressource (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE instrument ADD CONSTRAINT FK_3CBF69DDD5E86FF FOREIGN KEY (etat_id) REFERENCES etat (id)');
        $this->addSql('ALTER TABLE `label` ADD CONSTRAINT FK_EA750E8D5E86FF FOREIGN KEY (etat_id) REFERENCES etat (id)');
        $this->addSql('ALTER TABLE lieu ADD CONSTRAINT FK_2F577D59D5E86FF FOREIGN KEY (etat_id) REFERENCES etat (id)');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB2960A30C4A FOREIGN KEY (musicien_id) REFERENCES musicien (id)');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB297A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id)');
        $this->addSql('ALTER TABLE membre_instrument ADD CONSTRAINT FK_6605D3C56A99F74A FOREIGN KEY (membre_id) REFERENCES membre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE membre_instrument ADD CONSTRAINT FK_6605D3C5CF11D9C FOREIGN KEY (instrument_id) REFERENCES instrument (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE musicien ADD CONSTRAINT FK_551D84231B063272 FOREIGN KEY (nationalite_id) REFERENCES nationalite (id)');
        $this->addSql('ALTER TABLE musicien ADD CONSTRAINT FK_551D8423D5E86FF FOREIGN KEY (etat_id) REFERENCES etat (id)');
        $this->addSql('ALTER TABLE musicien_etiquette ADD CONSTRAINT FK_5A12B33D60A30C4A FOREIGN KEY (musicien_id) REFERENCES musicien (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE musicien_etiquette ADD CONSTRAINT FK_5A12B33D7BD2EA57 FOREIGN KEY (etiquette_id) REFERENCES etiquette (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE nationalite ADD CONSTRAINT FK_9EC4D73FD5E86FF FOREIGN KEY (etat_id) REFERENCES etat (id)');
        $this->addSql('ALTER TABLE passage ADD CONSTRAINT FK_2B258F677A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id)');
        $this->addSql('ALTER TABLE passage ADD CONSTRAINT FK_2B258F67FD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ressource ADD CONSTRAINT FK_939F4544C54C8C93 FOREIGN KEY (type_id) REFERENCES type_ressource (id)');
        $this->addSql('ALTER TABLE ressource ADD CONSTRAINT FK_939F4544D5E86FF FOREIGN KEY (etat_id) REFERENCES etat (id)');
        $this->addSql('ALTER TABLE ressource_etiquette ADD CONSTRAINT FK_78469329FC6CD52A FOREIGN KEY (ressource_id) REFERENCES ressource (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ressource_etiquette ADD CONSTRAINT FK_784693297BD2EA57 FOREIGN KEY (etiquette_id) REFERENCES etiquette (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE type_evenement ADD CONSTRAINT FK_BFE0290ED5E86FF FOREIGN KEY (etat_id) REFERENCES etat (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie_musicale_genre_musical DROP FOREIGN KEY FK_2508C467891F4D5E');
        $this->addSql('ALTER TABLE etiquette DROP FOREIGN KEY FK_1E0E195AD5E86FF');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681ED5E86FF');
        $this->addSql('ALTER TABLE genre_musical DROP FOREIGN KEY FK_9D48DDABD5E86FF');
        $this->addSql('ALTER TABLE groupe DROP FOREIGN KEY FK_4B98C21D5E86FF');
        $this->addSql('ALTER TABLE instrument DROP FOREIGN KEY FK_3CBF69DDD5E86FF');
        $this->addSql('ALTER TABLE `label` DROP FOREIGN KEY FK_EA750E8D5E86FF');
        $this->addSql('ALTER TABLE lieu DROP FOREIGN KEY FK_2F577D59D5E86FF');
        $this->addSql('ALTER TABLE musicien DROP FOREIGN KEY FK_551D8423D5E86FF');
        $this->addSql('ALTER TABLE nationalite DROP FOREIGN KEY FK_9EC4D73FD5E86FF');
        $this->addSql('ALTER TABLE ressource DROP FOREIGN KEY FK_939F4544D5E86FF');
        $this->addSql('ALTER TABLE type_evenement DROP FOREIGN KEY FK_BFE0290ED5E86FF');
        $this->addSql('ALTER TABLE evenement_etiquette DROP FOREIGN KEY FK_B050158B7BD2EA57');
        $this->addSql('ALTER TABLE groupe_etiquette DROP FOREIGN KEY FK_4E9ACA6D7BD2EA57');
        $this->addSql('ALTER TABLE musicien_etiquette DROP FOREIGN KEY FK_5A12B33D7BD2EA57');
        $this->addSql('ALTER TABLE ressource_etiquette DROP FOREIGN KEY FK_784693297BD2EA57');
        $this->addSql('ALTER TABLE evenement_etiquette DROP FOREIGN KEY FK_B050158BFD02F13');
        $this->addSql('ALTER TABLE evenement_ressource DROP FOREIGN KEY FK_3DC14995FD02F13');
        $this->addSql('ALTER TABLE evenement_genre_musical DROP FOREIGN KEY FK_1FEC0406FD02F13');
        $this->addSql('ALTER TABLE passage DROP FOREIGN KEY FK_2B258F67FD02F13');
        $this->addSql('ALTER TABLE categorie_musicale DROP FOREIGN KEY FK_2599F630D639D323');
        $this->addSql('ALTER TABLE categorie_musicale_genre_musical DROP FOREIGN KEY FK_2508C467FFFD05DC');
        $this->addSql('ALTER TABLE evenement_genre_musical DROP FOREIGN KEY FK_1FEC0406FFFD05DC');
        $this->addSql('ALTER TABLE groupe_genre_musical DROP FOREIGN KEY FK_13D8830FFFD05DC');
        $this->addSql('ALTER TABLE groupe_etiquette DROP FOREIGN KEY FK_4E9ACA6D7A45358C');
        $this->addSql('ALTER TABLE groupe_genre_musical DROP FOREIGN KEY FK_13D88307A45358C');
        $this->addSql('ALTER TABLE groupe_label DROP FOREIGN KEY FK_5B0A9EB87A45358C');
        $this->addSql('ALTER TABLE groupe_ressource DROP FOREIGN KEY FK_C30B96737A45358C');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB297A45358C');
        $this->addSql('ALTER TABLE passage DROP FOREIGN KEY FK_2B258F677A45358C');
        $this->addSql('ALTER TABLE membre_instrument DROP FOREIGN KEY FK_6605D3C5CF11D9C');
        $this->addSql('ALTER TABLE groupe_label DROP FOREIGN KEY FK_5B0A9EB833B92F39');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E6AB213CC');
        $this->addSql('ALTER TABLE membre_instrument DROP FOREIGN KEY FK_6605D3C56A99F74A');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB2960A30C4A');
        $this->addSql('ALTER TABLE musicien_etiquette DROP FOREIGN KEY FK_5A12B33D60A30C4A');
        $this->addSql('ALTER TABLE groupe DROP FOREIGN KEY FK_4B98C211B063272');
        $this->addSql('ALTER TABLE musicien DROP FOREIGN KEY FK_551D84231B063272');
        $this->addSql('ALTER TABLE evenement_ressource DROP FOREIGN KEY FK_3DC14995FC6CD52A');
        $this->addSql('ALTER TABLE groupe_ressource DROP FOREIGN KEY FK_C30B9673FC6CD52A');
        $this->addSql('ALTER TABLE ressource_etiquette DROP FOREIGN KEY FK_78469329FC6CD52A');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E88939516');
        $this->addSql('ALTER TABLE ressource DROP FOREIGN KEY FK_939F4544C54C8C93');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE categorie_musicale');
        $this->addSql('DROP TABLE categorie_musicale_genre_musical');
        $this->addSql('DROP TABLE etat');
        $this->addSql('DROP TABLE etiquette');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE evenement_etiquette');
        $this->addSql('DROP TABLE evenement_ressource');
        $this->addSql('DROP TABLE evenement_genre_musical');
        $this->addSql('DROP TABLE genre_musical');
        $this->addSql('DROP TABLE groupe');
        $this->addSql('DROP TABLE groupe_etiquette');
        $this->addSql('DROP TABLE groupe_genre_musical');
        $this->addSql('DROP TABLE groupe_label');
        $this->addSql('DROP TABLE groupe_ressource');
        $this->addSql('DROP TABLE instrument');
        $this->addSql('DROP TABLE `label`');
        $this->addSql('DROP TABLE lieu');
        $this->addSql('DROP TABLE membre');
        $this->addSql('DROP TABLE membre_instrument');
        $this->addSql('DROP TABLE musicien');
        $this->addSql('DROP TABLE musicien_etiquette');
        $this->addSql('DROP TABLE nationalite');
        $this->addSql('DROP TABLE passage');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE ressource');
        $this->addSql('DROP TABLE ressource_etiquette');
        $this->addSql('DROP TABLE type_evenement');
        $this->addSql('DROP TABLE type_ressource');
        $this->addSql('DROP TABLE user');
    }
}
