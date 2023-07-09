<?php

namespace CMS\Database\Migrations;

use Exception;

class CategoryMigration extends Migration
{
    private string $table_name = "categories";

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
                    name VARCHAR(255) NOT NULL,
                    slug VARCHAR(255) NOT NULL,
                    parent_id INT,
                    FOREIGN KEY (parent_id) REFERENCES categories(id)
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