<?php

namespace CMS\Database\Migrations;

use CMS\Database\Config\Config;
use PDO;

class Migration
{
    private static PDO $db;
    private static array $env;

    public function __construct()
    {
        $config = Config::getEnv();
        self::$env = Config::getEnv();

        if(!isset(self::$db))
        {
            self::$db = new PDO(
                "mysql:host={$config['DB_HOST']};dbname={$config['DB_NAME']};",
                $config["DB_USER"],
                $config["DB_PASSWORD"]
            );
        }
    }

    public function getDB(): PDO
    {
        return self::$db;
    }
}