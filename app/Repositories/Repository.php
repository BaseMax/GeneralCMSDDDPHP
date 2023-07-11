<?php

namespace CMS\Repositories;

use CMS\Database\Config\Config;
use PDO;

class Repository
{
    private PDO $db;
    public function __construct()
    {
        if (!isset($this->db)) {
            $config = Config::getEnv();

            $this->db = new PDO(
                "mysql:host={$config['DB_HOST']};dbname={$config['DB_NAME']}",
                $config["DB_USER"],
                $config["DB_PASSWORD"]
            );
        }
    }

    protected function getDB(): PDO
    {
        return $this->db;
    }
}
