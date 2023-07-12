<?php

namespace CMS\Models;

class MenuItem extends Model
{
    private int $id;
    private int $menu_position_id;
    private string $name;
    private string $link;
    private int $parent_id;

    public function __construct()
    {

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getMenuPositionId(): int
    {
        return $this->menu_position_id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function getParentId(): int
    {
        return $this->parent_id;
    }

    public function setMenuPositionId(int $menu_position_id): self
    {
        $this->menu_position_id = $menu_position_id;
        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;
        return $this;
    }

    public function setParentId(int $parent_id): self
    {
        $this->parent_id = $parent_id;
        return $this;
    }

}