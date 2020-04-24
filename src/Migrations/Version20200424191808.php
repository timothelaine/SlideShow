<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200424191808 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE slide (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE slide_upload (id INT AUTO_INCREMENT NOT NULL, slide_id INT DEFAULT NULL, upload_id INT DEFAULT NULL, x1 DOUBLE PRECISION NOT NULL, y1 DOUBLE PRECISION NOT NULL, z1 DOUBLE PRECISION NOT NULL, x2 DOUBLE PRECISION NOT NULL, y2 DOUBLE PRECISION NOT NULL, z2 DOUBLE PRECISION NOT NULL, timer INT DEFAULT NULL, kenburn_timer INT DEFAULT NULL, INDEX IDX_B55B1EBBDD5AFB87 (slide_id), INDEX IDX_B55B1EBBCCCFBA31 (upload_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE upload (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE slide_upload ADD CONSTRAINT FK_B55B1EBBDD5AFB87 FOREIGN KEY (slide_id) REFERENCES slide (id)');
        $this->addSql('ALTER TABLE slide_upload ADD CONSTRAINT FK_B55B1EBBCCCFBA31 FOREIGN KEY (upload_id) REFERENCES upload (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE slide_upload DROP FOREIGN KEY FK_B55B1EBBDD5AFB87');
        $this->addSql('ALTER TABLE slide_upload DROP FOREIGN KEY FK_B55B1EBBCCCFBA31');
        $this->addSql('DROP TABLE slide');
        $this->addSql('DROP TABLE slide_upload');
        $this->addSql('DROP TABLE upload');
        $this->addSql('DROP TABLE user');
    }
}
