<?php

namespace CMS\Repositories;

use CMS\Models\Tag;
use PDO;

class TagRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all(): array
    {
        $stmt = $this->getDB()->prepare(
            "SELECT * FROM tags"
        );

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(Tag $tag): void
    {
        $stmt = $this->getDB()->prepare(
            "INSERT INTO tags (`text`) VALUES (?)"
        );

        $stmt->execute();
    }
}