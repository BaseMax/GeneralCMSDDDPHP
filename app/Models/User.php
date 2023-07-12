<?php

namespace CMS\Models;

class User extends Model
{
    private string $email;
    private string $password;
    private string $username;
    private string $firstname;
    private string $lastname;

    public function __construct()
    {
    }

    public static function create(
        string $email,
        string $password,
        string $username,
        string $firstname,
        string $lastname
    ): static {
        return (new static())
            ->setEmail($email)
            ->setPassword($password)
            ->setUserName($username)
            ->setFirstName($firstname)
            ->setLastName($lastname);
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getUserName(): string
    {
        return $this->username;
    }

    public function getFirstName(): string
    {
        return $this->firstname;
    }

    public function getLastName(): string
    {
        return $this->lastname;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function setUserName(string $username): self
    {
        $this->username = $username;
        return $this;
    }

    public function setFirstName(string $firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function setLastName(string $lastname): self
    {
        $this->lastname = $lastname;
        return $this;
    }
}
