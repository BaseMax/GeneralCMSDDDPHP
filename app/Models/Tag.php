<?php

namespace CMS\Models;

class Tag extends Model
{
    private int $id;
    private string $text;

    public function __construct()
    {
    }

    public static function create(
        string $text
    ): static {
        return (new static())->setText($text);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;
        return $this;
    }
}
