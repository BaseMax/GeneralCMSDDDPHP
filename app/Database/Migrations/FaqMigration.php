<?php

namespace CMS\Database\Migrations;

use Exception;

class FaqMigration extends Migration
{
    private string $table_name = "faq";

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
                    question VARCHAR(255) NOT NULL,
                    answer TEXT NOT NULL
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