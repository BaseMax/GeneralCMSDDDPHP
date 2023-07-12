<?php

namespace CMS\Services;

use CMS\Facades\Hash;
use CMS\Models\User;
use CMS\Repositories\UserRepository;

class UserService extends Service
{
    public function add(array $userData): string|false
    {
        return (new UserRepository())->add($userData);
    }

    public static function find(array $userData): User|false
    {
        $user = (new UserRepository())->find([
            "email" => $userData["email"],
            "password" => Hash::make($userData["password"])
        ]);

        if ($user)
            return User::create($user["email"], $user["password"], $user["username"], $user["firstname"], $user["lastname"], $user["rule_id"]);

        return false;
    }
}
