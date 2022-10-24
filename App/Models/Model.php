<?php

namespace App\Models;

use PDO;

abstract class Model
{

    public $id;

    protected static $pdo;

    public function __construct()
    {

    }

    public static function makeDBConnection()
    {
        $host = '127.0.0.1';
        $dbname   = 'store';
        $username = 'alex';
        $password = 'qwerty987';
        $charset = 'utf8mb4';

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

        try {
            self::$pdo = new \PDO($dsn, $username, $password, $options);
        } catch (\Exception $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function __clone()
    {
        // No cloning, as it is Singleton pattern
    }

    public static function findAll() 
    {

    }

}