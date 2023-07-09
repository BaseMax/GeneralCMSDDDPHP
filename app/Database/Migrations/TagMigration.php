<?php

namespace CMS\Database\Migrations;

use Exception;

class TagMigration extends Migration
{
    private string $table_name = "tags";

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
                    text VARCHAR(255) NOT NULL
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