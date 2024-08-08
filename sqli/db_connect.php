<?php
$host = 'localhost';
$dbname = 'putri';
$user = 'root';
$pass = '';

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "koneksi sukses : ";
} catch (PDOException $e) {
    echo "koneksi gagal: " . $e->getMessage();
}
?>
