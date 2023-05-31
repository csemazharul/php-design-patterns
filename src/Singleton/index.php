<?php

require_once __DIR__ . '/../../vendor/autoload.php';
use Mazed\DesignPatterns\Singleton\Class\DatabaseConnection;

$database = DatabaseConnection::getInstance();
$connection = $database->getConnection();
echo 'Connected to ' . $connection->getAttribute(PDO::ATTR_CONNECTION_STATUS);

