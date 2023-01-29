<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230129214025 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Инициализация таблицы product';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE "product" (
            id INT NOT NULL,
            name VARCHAR(255) NOT NULL,
            description VARCHAR(255) NOT NULL,
            weight VARCHAR(30) NOT NULL,
            category VARCHAR(50) NOT NULL,
            PRIMARY KEY(id)
        )');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE "product"');
    }
}
