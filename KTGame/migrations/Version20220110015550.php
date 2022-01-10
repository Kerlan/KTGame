<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220110015550 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE diamond (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, quantity INT NOT NULL, timestamp INT NOT NULL, level INT NOT NULL, INDEX IDX_525AF74CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gold (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, quantity INT NOT NULL, timestamp INT NOT NULL, level INT NOT NULL, INDEX IDX_47A91D51A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE metal (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, quantity INT NOT NULL, timestamp INT NOT NULL, level INT NOT NULL, INDEX IDX_C062F4C9A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ship (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, quantity INT NOT NULL, timestamp INT NOT NULL, level INT NOT NULL, INDEX IDX_FA30EB24A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE soldier (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, quantity INT NOT NULL, timestamp INT NOT NULL, level INT NOT NULL, INDEX IDX_B04F2D02A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tower_defense (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, quantity INT NOT NULL, timestamp INT NOT NULL, level INT NOT NULL, INDEX IDX_DBB20B9FA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE diamond ADD CONSTRAINT FK_525AF74CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE gold ADD CONSTRAINT FK_47A91D51A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE metal ADD CONSTRAINT FK_C062F4C9A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ship ADD CONSTRAINT FK_FA30EB24A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE soldier ADD CONSTRAINT FK_B04F2D02A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE tower_defense ADD CONSTRAINT FK_DBB20B9FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE diamond DROP FOREIGN KEY FK_525AF74CA76ED395');
        $this->addSql('ALTER TABLE gold DROP FOREIGN KEY FK_47A91D51A76ED395');
        $this->addSql('ALTER TABLE metal DROP FOREIGN KEY FK_C062F4C9A76ED395');
        $this->addSql('ALTER TABLE ship DROP FOREIGN KEY FK_FA30EB24A76ED395');
        $this->addSql('ALTER TABLE soldier DROP FOREIGN KEY FK_B04F2D02A76ED395');
        $this->addSql('ALTER TABLE tower_defense DROP FOREIGN KEY FK_DBB20B9FA76ED395');
        $this->addSql('DROP TABLE diamond');
        $this->addSql('DROP TABLE gold');
        $this->addSql('DROP TABLE metal');
        $this->addSql('DROP TABLE ship');
        $this->addSql('DROP TABLE soldier');
        $this->addSql('DROP TABLE tower_defense');
        $this->addSql('DROP TABLE user');
    }
}
