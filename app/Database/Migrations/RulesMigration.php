<?php

namespace CMS\Database\Migrations;

use Exception;

class RulesMigration extends Migration
{
    private string $table_name = "rules";

    public function __construct()
    {
        parent::__construct();
    }

    public function create(): void
    {
        try {
            $stmt = $this->getDB()->prepare(
                "CREATE TABLE IF NOT EXISTS " . $this->getTableName() . " (
                    `id` INT PRIMARY KEY AUTO_INCREMENT,
                    `value` VARCHAR(255)
                  );"
            );

            $stmt->execute();

            $this->add_rules();

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getTableName(): string
    {
        return $this->table_name;
    }

    private function add_rules(): void
    {
        // writer, user, admin

        $stmt = $this->getDB()->prepare(
            "INSERT INTO `" . $this->getTableName() . "` (`value`) VALUES ('admin'), ('writer'), ('user');"
        );

        $stmt->execute();
    }
}