<?php

namespace CMS\Database\Migrations;

use Exception;

class PostMigration extends Migration
{
    private string $table_name = "posts";

    public function __construct()
    {
        parent::__construct();
    }

    public function create(): void
    {
        try {
            $stmt = $this->getDB()->prepare(
                "CREATE TABLE IF NOT EXISTS " . $this->getTableName() . " (
                id INT PRIMARY KEY AUTO_INCREMENT,
                title VARCHAR(255) NOT NULL,
                slug VARCHAR(255) NOT NULL,
                content TEXT NOT NULL,
                fullcontent TEXT,
                createdat DATETIME NOT NULL,
                updatedat DATETIME,
                author INT,
                FOREIGN KEY (author) REFERENCES users(id)
              );"
            );

            $stmt->execute();

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getTableName(): string
    {
        return $this->table_name;
    }
}
