<?php

$host = 'localhost';  
$db = 'my_database';  
$user = 'root';       
$pass = '';           

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Koneksi berhasil : ". "<br>";
    $sql = "
    CREATE TABLE products (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        price FLOAT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $pdo->exec($sql);
    echo "Tabel 'products' berhasil dibuat";
} catch (PDOException $e) {
    echo "Koneksi atau pembuatan tabel gagal: " . $e->getMessage();
}

$pdo = null;
?>
