<?php

class ConnectionProvider
{
    private static $pdo;

    public static function getConnection()
    {
        try {
            $dsn = "sqlite:./bddTP1.sqlite";
            static::$pdo = new PDO($dsn);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return static::$pdo;
    }

}