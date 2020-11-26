<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200929124543 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `seller` (
            `id` INT(11) NOT NULL,
            `name` VARCHAR(45) NOT NULL,
            `country` VARCHAR(45) DEFAULT NULL,
            `registered` VARCHAR(45) NOT NULL,
            PRIMARY KEY (`id`),
            UNIQUE KEY `id_UNIQUE` (`id`)
        )  ENGINE=INNODB DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`;
        ');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE seller');
    }
}
