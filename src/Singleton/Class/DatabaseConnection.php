<?php

namespace Mazed\DesignPatterns\Singleton\class; 

use PDO;

class DatabaseConnection {
    private static $instance;
    private $connection;

    private function __construct() {
        $this->connection = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    }

    public static function getInstance(): DatabaseConnection {
        if (!self::$instance) {
            echo 'Creating new instance.';
            echo nl2br("\n");
            self::$instance = new DatabaseConnection();
        }
        echo 'Returning instance.'; 
        echo nl2br("\n");

        return self::$instance;
    }

    public function getConnection(): PDO {
        return $this->connection;
    }
}
