<?php

$host = 'localhost';  
$db = 'my_database';  
$user = 'root';       
$pass = '';           

try { 
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO products (name, price) VALUES (:name, :price)";
    $stmt = $pdo->prepare($sql);
    $name = "Laptop";
    $price = 15000.00;

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':price', $price);

    $stmt->execute();

    echo "Data berhasil ditambahkan ke tabel 'products'";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}

$pdo = null;
?>
