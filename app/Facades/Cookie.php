<?php

namespace CMS\Facades;

use CMS\Http\Request;

class Cookie extends Facade
{
    public static function set(string $userId): void
    {
        setcookie("user_id", $userId, time() + (7 * 24 * 60 * 60));
    }

    public static function delete(Request $request): void
    {
        setcookie("user_id", $request->cookie["user_id"], time() - (2 * 60));
    }
}