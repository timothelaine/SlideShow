<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200423091217 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE slide_upload (id INT AUTO_INCREMENT NOT NULL, slide_id INT DEFAULT NULL, upload_id INT DEFAULT NULL, INDEX IDX_B55B1EBBDD5AFB87 (slide_id), INDEX IDX_B55B1EBBCCCFBA31 (upload_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE slide_upload ADD CONSTRAINT FK_B55B1EBBDD5AFB87 FOREIGN KEY (slide_id) REFERENCES slide (id)');
        $this->addSql('ALTER TABLE slide_upload ADD CONSTRAINT FK_B55B1EBBCCCFBA31 FOREIGN KEY (upload_id) REFERENCES upload (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE slide_upload');
    }
}
