<?php

namespace CMS\Models;

class Rule extends Model
{
    private int $id;
    private string $value;

    public function __construct()
    {

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }
}