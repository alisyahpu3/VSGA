<?php
$host = 'localhost';
$db = 'db_putri';
$user = 'root';
$pass = '';

try {
    // Membuat koneksi ke database menggunakan PDO
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // Mengatur mode error PDO ke exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Membuat tabel users jika belum ada
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
    )";

    // Menjalankan perintah SQL
    $pdo->exec($sql);
    echo "Table users created successfully.";
} catch (PDOException $e) {
    // Menangani kesalahan koneksi atau query
    echo "Connection failed: " . $e->getMessage();
}
?>