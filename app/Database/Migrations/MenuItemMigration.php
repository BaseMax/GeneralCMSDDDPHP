<?php

namespace CMS\Database\Migrations;

use Exception;

class MenuItemMigration extends Migration
{
    private string $table_name = "menu_items";

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
                    menu_position_id INT NOT NULL,
                    name VARCHAR(255) NOT NULL,
                    link VARCHAR(255) NOT NULL,
                    parent_id INT,
                    FOREIGN KEY (menu_position_id) REFERENCES menu_positions(id),
                    FOREIGN KEY (parent_id) REFERENCES menu_items(id)
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