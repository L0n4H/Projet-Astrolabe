<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20261022110600 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Allow groups to have multiple nationalities.';
    }

    public function up(Schema $schema): void
    {
        if ($this->connection->getDatabasePlatform()->getName() === 'sqlite') {
            $this->addSql('CREATE TABLE groupe_nationalite (groupe_id INTEGER NOT NULL, nationalite_id INTEGER NOT NULL, PRIMARY KEY(groupe_id, nationalite_id), FOREIGN KEY(groupe_id) REFERENCES groupe (id) NOT DEFERRABLE INITIALLY IMMEDIATE, FOREIGN KEY(nationalite_id) REFERENCES nationalite (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
            $this->addSql('CREATE INDEX IDX_1119A4F17A45358C ON groupe_nationalite (groupe_id)');
            $this->addSql('CREATE INDEX IDX_1119A4F11B063272 ON groupe_nationalite (nationalite_id)');
            $this->addSql('INSERT INTO groupe_nationalite (groupe_id, nationalite_id) SELECT id, nationalite_id FROM groupe WHERE nationalite_id IS NOT NULL');

            // SQLite cannot drop the legacy foreign-key column without rebuilding the referenced table.
            return;
        }

        $this->addSql('CREATE TABLE groupe_nationalite (groupe_id INT NOT NULL, nationalite_id INT NOT NULL, INDEX IDX_1119A4F17A45358C (groupe_id), INDEX IDX_1119A4F11B063272 (nationalite_id), PRIMARY KEY(groupe_id, nationalite_id), CONSTRAINT FK_GROUPE_NATIONALITE_GROUPE FOREIGN KEY (groupe_id) REFERENCES groupe (id), CONSTRAINT FK_GROUPE_NATIONALITE_NATIONALITE FOREIGN KEY (nationalite_id) REFERENCES nationalite (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('INSERT INTO groupe_nationalite (groupe_id, nationalite_id) SELECT id, nationalite_id FROM groupe WHERE nationalite_id IS NOT NULL');
        $this->addSql('ALTER TABLE groupe DROP FOREIGN KEY FK_4B98C211B063272');
        $this->addSql('DROP INDEX IDX_4B98C211B063272 ON groupe');
        $this->addSql('ALTER TABLE groupe DROP nationalite_id');
    }

    public function down(Schema $schema): void
    {
        if ($this->connection->getDatabasePlatform()->getName() === 'sqlite') {
            $this->addSql('UPDATE groupe SET nationalite_id = (SELECT MIN(nationalite_id) FROM groupe_nationalite WHERE groupe_id = groupe.id)');
            $this->addSql('DROP TABLE groupe_nationalite');

            return;
        }

        $this->addSql('ALTER TABLE groupe ADD nationalite_id INT DEFAULT NULL');
        $this->addSql('UPDATE groupe SET nationalite_id = (SELECT MIN(nationalite_id) FROM groupe_nationalite WHERE groupe_id = groupe.id)');
        $this->addSql('CREATE INDEX IDX_4B98C211B063272 ON groupe (nationalite_id)');
        $this->addSql('ALTER TABLE groupe ADD CONSTRAINT FK_4B98C211B063272 FOREIGN KEY (nationalite_id) REFERENCES nationalite (id)');
        $this->addSql('DROP TABLE groupe_nationalite');
    }
}
