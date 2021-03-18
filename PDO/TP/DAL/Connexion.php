<?php

class Connexion
{
    private static $pdo;

    public static function getConnection()
    {
        try {
            $dsn = "sqlite:./tp05.sqlite";
            static::$pdo = new PDO($dsn);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return static::$pdo;
    }
}