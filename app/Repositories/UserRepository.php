<?php

namespace CMS\Repositories;

use CMS\Models\User;

class UserRepository extends Repository
{
    private string $table_name = "users";
    public function __construct()
    {
        parent::__construct();
    }

    public function find(int $id): User|bool
    {
    }

    public function add(array $user): string|false
    {
        $this->getDB()->beginTransaction();

        $stmt = $this->getDB()->prepare(
            "INSERT INTO " . $this->getTableName() . " (`username`, `hash_password`, `email`, `firstname`, `lastname`, `role_id`) 
            VALUES (?, ?, ?, ?, ?, 3)
            "
        );

        $stmt->execute([
            $user["username"],
            $user["password"],
            $user["email"],
            $user["firstname"],
            $user["lastname"]
        ]);

        $this->getDB()->commit();
        return $this->getDB()->lastInsertId();
    }

    public function getTableName(): string
    {
        return $this->table_name;
    }
}
