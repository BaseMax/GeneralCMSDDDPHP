<?php

namespace CMS\Repositories;

use PDO;

class CategoryRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all(): array
    {
        $stmt = $this->getDB()->prepare(
            "SELECT * FROM categories"
        );

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}