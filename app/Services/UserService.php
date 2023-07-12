<?php

namespace CMS\Services;
use CMS\Repositories\UserRepository;

class UserService extends Service
{
    public function add(array $userData): string|false
    {
        return (new UserRepository())->add($userData);
    }
}