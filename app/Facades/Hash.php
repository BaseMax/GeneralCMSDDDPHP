<?php

namespace CMS\Facades;

class Hash extends Facade
{
    public static function make(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}