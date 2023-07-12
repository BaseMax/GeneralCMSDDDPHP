<?php

namespace CMS\Models;

class PostCategory extends Model
{
    private int $id;
    private int $post_id;
    private int $category_id;

    public function __construct()
    {
    }

    public static function create(
        int $post_id,
        int $category_id
    ): static {
        return (new static())
            ->setPostId($post_id)
            ->setCategoryId($category_id);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPostId(): int
    {
        return $this->post_id;
    }

    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    public function setPostId(int $post_id): self
    {
        $this->post_id = $post_id;
        return $this;
    }

    public function setCategoryId(int $category_id): self
    {
        $this->category_id = $category_id;
        return $this;
    }
}
