<?php

namespace CMS\Models;

class MenuPosition extends Model
{
    private int $id;
    private string $name;
    private string $slug;

    public function __construct()
    {
    }

    public static function create(
        string $name,
        string $slug
    ): static {
        return (new static())
            ->setName($name)
            ->setSlug($slug);
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
}
