<?php

namespace CMS\Database\Migrations;

use Exception;

class UserPremMigration extends Migration
{
    private string $table_name = "user_prems";

    public function __construct()
    {
        parent::__construct();
    }

    public function create(): void
    {
        try {
            $stmt = $this->getDB()->prepare(
                "CREATE TABLE IF NOT EXISTS " . $this->getTableName() . " (
                    user_id INT,
                    `key` VARCHAR(255),
                    `value` TINYINT,
                    PRIMARY KEY (user_id, `key`),
                    FOREIGN KEY (user_id) REFERENCES users(id)
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