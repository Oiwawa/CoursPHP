<?php


class ConnectionProvider
{
    public static function getConnection()
    {
        try {
            $dsn = "sqlite:./maBDD.sqlite";
            $pdo = new PDO($dsn);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $pdo;
    }
}