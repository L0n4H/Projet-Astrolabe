<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20261022091633 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Set default start and end times for existing events without times.';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("UPDATE evenement SET heure_debut = '20:30:00' WHERE heure_debut IS NULL");
        $this->addSql("UPDATE evenement SET heure_fin = '01:00:00' WHERE heure_fin IS NULL");
    }

    public function down(Schema $schema): void
    {
    }
}
