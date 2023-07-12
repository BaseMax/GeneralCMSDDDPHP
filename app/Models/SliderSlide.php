<?php

namespace CMS\Models;

class SliderSlide extends Model
{
    private int $id;
    private int $slider_position_id;
    private string $image;
    private string $title;
    private string $description;
    private string $link;

    public function __construct()
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSliderPositionId(): int
    {
        return $this->slider_position_id;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setSliderPositionId(int $slider_position_id): self
    {
        $this->slider_position_id = $slider_position_id;
        return $this;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;
        return $this;
    }
}
