<?php

$host = "localhost";
$password = "";
$user = "root";
$database = "university";

try {
    $dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    
    $conn = new PDO($dsn, $user, $password, $options);
    
    // Resto de tu código
    
} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
}