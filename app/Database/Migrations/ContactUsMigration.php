<?php

namespace CMS\Database\Migrations;

use Exception;

class ContactUsMigration extends Migration
{
    private string $table_name = "contactus";

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
                    first_name VARCHAR(255) NOT NULL,
                    last_name VARCHAR(255) NOT NULL,
                    email VARCHAR(255) NOT NULL,
                    tel VARCHAR(255) NOT NULL,
                    text TEXT NOT NULL
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