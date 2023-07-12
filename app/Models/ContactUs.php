<?php

namespace CMS\Models;

class ContactUs extends Model
{
    private int $id;
    private string $first_name;
    private string $last_name;
    private string $email;
    private string $tel;
    private string $text;

    public function __construct()
    {
    }

    public static function create(
        string $first_name,
        string $last_name,
        string $email,
        string $tel,
        string $text
    ): static {

        return (new static())
            ->setFirstName($first_name)
            ->setLastName($last_name)
            ->setEmail($email)
            ->setTel($tel)
            ->setText($text);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->first_name;
    }

    public function getLastName(): string
    {
        return $this->last_name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getTel(): string
    {
        return $this->tel;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;
        return $this;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;
        return $this;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;
        return $this;
    }

    public function setText(string $text): self
    {
        $this->text = $text;
        return $this;
    }
}
