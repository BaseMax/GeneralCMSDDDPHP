<?php

namespace CMS\Repositories;

use CMS\Models\Post;
use PDO;

class PostRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
    }
    public function all(): array|bool
    {
        $stmt = $this->getDB()->prepare(
            "SELECT * FROM posts"
        );

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(Post $post): void
    {
        $this->getDB()->beginTransaction();

        $stmt = $this->getDB()->prepare(
            "INSERT INTO posts (`title`, `slug`, `content`, `fullcontent`, `createdat`, `updatedat`) VALUES (?, ?, ?, ?, ?, ?);"
        );

        $stmt->execute([
            $post->getTitle(),
            $post->getSlug(),
            $post->getContent(),
            $post->getFullContent(),
            $post->getCreatedAt(),
            $post->getUpdatedAt()
        ]);

        $this->getDB()->commit();
    }

    public function delete(int $id): void
    {
        $stmt = $this->getDB()->prepare(
            "DELETE FROM posts WHERE id = ?"
        );

        $stmt->execute([
            $id
        ]);
    }
}
