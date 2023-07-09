<?php

namespace CMS\Database\Migrations;

use Exception;

class SliderSlideMigration extends Migration
{
    private string $table_name = "slider_slides";

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
                    slider_position_id INT NOT NULL,
                    image VARCHAR(255) NOT NULL,
                    title VARCHAR(255) NOT NULL,
                    description TEXT,
                    link VARCHAR(255),
                    FOREIGN KEY (slider_position_id) REFERENCES slider_positions(id)
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