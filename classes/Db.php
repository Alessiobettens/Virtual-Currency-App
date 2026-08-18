<?php

class Db
{
    private static ?PDO $conn = null;

    public static function getConnection(): PDO
    {
        if (self::$conn === null) {
            self::$conn = new PDO(
                "mysql:host=sql307.infinityfree.com;dbname=if0_42686919_xd_wallet",
                "if0_42686919",
                "XdWallet123"
            );

            self::$conn->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        }

        return self::$conn;
    }
}