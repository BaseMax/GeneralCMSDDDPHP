<?php

namespace CMS\Models;

class Category extends Model
{
    private int $id;
    private string $name;
    private string $slug;
    private int $parent_id;

    public function __construct()
    {
    }

    public static function create(
        string $name,
        string $slug,
        int $parent_id
    ): static {
        return (new static())
            ->setName($name)
            ->setSlug($slug)
            ->setParentId($parent_id);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getParentId(): int
    {
        return $this->parent_id;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }

    public function setParentId(int $parent_id): self
    {
        $this->parent_id = $parent_id;
        return $this;
    }
}
