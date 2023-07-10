<?php

namespace CMS\Database\Migrations;

use Exception;

class UserMigration extends Migration
{
    private string $table_name = "users";

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
                    username VARCHAR(255) NOT NULL,
                    hash_password VARCHAR(255) NOT NULL,
                    email VARCHAR(255) NOT NULL,
                    firstname VARCHAR(255),
                    lastname VARCHAR(255),
                    role_id INT
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
