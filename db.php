<?php
$host   = '127.0.0.1';
$port   = '3306';
$dbname = 'cafe_db'; 
$user   = 'root';
$pass   = '';

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // Uncomment to test
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>