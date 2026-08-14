<?php

class User
{
    private int $id;
    private string $fullname;
    private string $email;
    private string $password;
    private float $balance;

    // GETTERS

    public function getId(): int
    {
        return $this->id;
    }

    public function getFullname(): string
    {
        return $this->fullname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    // SETTERS

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setFullname(string $fullname): void
    {
        $this->fullname = $fullname;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }
}