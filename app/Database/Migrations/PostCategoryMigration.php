<?php

namespace CMS\Database\Migrations;

use Exception;

class PostCategoryMigration extends Migration
{
    private string $table_name = "post_categories";

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
                    post_id INT NOT NULL,
                    category_id INT NOT NULL,
                    FOREIGN KEY (post_id) REFERENCES posts(id),
                    FOREIGN KEY (category_id) REFERENCES categories(id)
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