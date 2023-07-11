<?php

namespace CMS\Services;
use CMS\Repositories\UserRepository;

class UserService extends Service
{
    public function add(array $userData): bool
    {
        return (new UserRepository())->add($userData);
    }
}