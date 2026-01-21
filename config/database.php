<?php
require_once __DIR__ . '/../config/env.php';

$host = $_ENV['DB_HOST'] ;
$db   = $_ENV['DB_NAME'] ;
$user = $_ENV['DB_USER'] ;
$pass = $_ENV['DB_PASS'] ;
$charset = "utf8mb4";


try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=$charset",
        $user,
        $pass
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
