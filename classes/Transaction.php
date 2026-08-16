<?php

require_once 'Db.php';

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

    public function save(): bool
    {
        $conn = Db::getConnection();

        $statement = $conn->prepare(
            "INSERT INTO transactions
            (sender_id, receiver_id, amount, message)
            VALUES
            (:sender_id, :receiver_id, :amount, :message)"
        );

        $statement->bindValue(':sender_id', $this->senderId);
        $statement->bindValue(':receiver_id', $this->receiverId);
        $statement->bindValue(':amount', $this->amount);
        $statement->bindValue(':message', $this->message);

        return $statement->execute();
    }

    public static function getAll(): array
    {
        $conn = Db::getConnection();

        $statement = $conn->prepare(
            "SELECT * FROM transactions ORDER BY id DESC"
        );

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById(int $id): ?array
    {
        $conn = Db::getConnection();

        $statement = $conn->prepare(
            "SELECT * FROM transactions WHERE id = :id"
        );

        $statement->bindValue(':id', $id);

        $statement->execute();

        $transaction = $statement->fetch(PDO::FETCH_ASSOC);

        return $transaction ?: null;
    }
}