<?php

class Transaction
{
    private int $id;
    private int $senderId;
    private int $receiverId;
    private float $amount;
    private string $message;

    // GETTERS

    public function getId(): int
    {
        return $this->id;
    }

    public function getSenderId(): int
    {
        return $this->senderId;
    }

    public function getReceiverId(): int
    {
        return $this->receiverId;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    // SETTERS

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setSenderId(int $senderId): void
    {
        $this->senderId = $senderId;
    }

    public function setReceiverId(int $receiverId): void
    {
        $this->receiverId = $receiverId;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }
}