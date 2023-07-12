<?php

namespace CMS\Models;

use DateTime;

class Post extends Model
{
    private int $id;
    private string $title;
    private string $slug;
    private string $content;
    private string $fullcontent;
    private DateTime $createdat;
    private DateTime $updatedat;
    private int $author;

    public function __construct()
    {
    }

    public static function create(
        string $title,
        string $slug,
        string $content,
        string $fullcontent,
        int $author,
        DateTime $createdat = (new DateTime())->format("Y-m-d H:i:s"),
        DateTime $updatedat = (new DateTime())->format("Y-m-d H:i:s")
    ): static {
        return (new static())
            ->setTitle($title)
            ->setSlug($slug)
            ->setContent($content)
            ->setFullContent($fullcontent)
            ->setCreatedAt($createdat)
            ->setUpdatedAt($updatedat)
            ->setAuthor($author);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getFullContent(): string
    {
        return $this->fullcontent;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdat;
    }

    public function getUpdatedAt(): DateTime
    {
        return $this->updatedat;
    }

    public function getAuthor(): int
    {
        return $this->author;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function setFullContent(string $fullcontent): self
    {
        $this->fullcontent = $fullcontent;
        return $this;
    }

    public function setCreatedAt(DateTime $createdat): self
    {
        $this->createdat = $createdat;
        return $this;
    }

    public function setUpdatedAt(DateTime $updatedat): self
    {
        $this->updatedat = $updatedat;
        return $this;
    }

    public function setAuthor(int $author): self
    {
        $this->author = $author;
        return $this;
    }
}
