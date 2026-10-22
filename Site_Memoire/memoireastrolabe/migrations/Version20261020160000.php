<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20261020160000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Separate event start and end dates from their times.';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE evenement ADD heure_debut TIME DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement ADD heure_fin TIME DEFAULT NULL');

        if ($this->connection->getDatabasePlatform()->getName() === 'sqlite') {
            $this->addSql('UPDATE evenement SET heure_debut = substr(date_debut, 12, 8), heure_fin = substr(date_fin, 12, 8)');
            $this->addSql('UPDATE evenement SET date_debut = substr(date_debut, 1, 10), date_fin = substr(date_fin, 1, 10)');

            return;
        }

        $this->addSql('UPDATE evenement SET heure_debut = TIME(date_debut), heure_fin = TIME(date_fin)');
        $this->addSql('UPDATE evenement SET date_debut = DATE(date_debut), date_fin = DATE(date_fin)');
        $this->addSql('ALTER TABLE evenement MODIFY date_debut DATE NOT NULL, MODIFY date_fin DATE NOT NULL');
    }

    public function down(Schema $schema): void
    {
        if ($this->connection->getDatabasePlatform()->getName() === 'sqlite') {
            $this->addSql("UPDATE evenement SET date_debut = date_debut || ' ' || heure_debut, date_fin = date_fin || ' ' || heure_fin");
            $this->addSql('ALTER TABLE evenement DROP COLUMN heure_debut');
            $this->addSql('ALTER TABLE evenement DROP COLUMN heure_fin');

            return;
        }

        $this->addSql('ALTER TABLE evenement MODIFY date_debut DATETIME NOT NULL, MODIFY date_fin DATETIME NOT NULL');
        $this->addSql('UPDATE evenement SET date_debut = TIMESTAMP(date_debut, heure_debut), date_fin = TIMESTAMP(date_fin, heure_fin)');
        $this->addSql('ALTER TABLE evenement DROP heure_debut, DROP heure_fin');
    }
}
