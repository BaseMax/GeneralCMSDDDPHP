<?php

namespace CMS\Database\Config;

class Config
{
    public static function getEnv(): array
    {
        return (new self)->env();
    }

    public static function getDB(): string
    {
        return (new self)->env()["DB_NAME"] ?? "ddd_cms";
    }

    public function __construct()
    {

    }

    private function env(): array
    {
        return $_ENV;
    }
}