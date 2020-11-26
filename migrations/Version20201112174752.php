<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201112174752 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `product` 
            ADD COLUMN `seller_id` INT(11) NOT NULL AFTER `price`;
            ALTER TABLE `product` 
            ADD CONSTRAINT `fk_product_seller`
              FOREIGN KEY (`id`)
              REFERENCES `seller` (`id`)
              ON DELETE NO ACTION
              ON UPDATE NO ACTION;');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `product` 
            DROP COLUMN `seller_id`;
            ALTER TABLE `product` 
            DROP FOREIGN KEY `fk_product_seller`;
        ');
    }
}
