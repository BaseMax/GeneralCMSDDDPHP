<?php

namespace CMS\Repositories;

use PDO;

class RuleRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
    }

    public function find(int $id): array
    {
        $stmt = $this->getDB()->prepare(
            "SELECT * FROM rules WHERE id = ?"
        );

        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}