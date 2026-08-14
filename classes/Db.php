<?php

class Db
{
    private static ?PDO $conn = null;

    public static function getConnection(): PDO
    {
        if (self::$conn === null) {
            self::$conn = new PDO(
                "mysql:host=localhost;dbname=xd_wallet",
                "root",
                ""
            );

            self::$conn->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        }

        return self::$conn;
    }
}