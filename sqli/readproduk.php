<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
<h2>Products List</h2>
<?php

$host = 'localhost';  
$db = 'my_database';  
$user = 'root';       
$pass = '';        

try {
    
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT name, price FROM products";
    $stmt = $pdo->prepare($sql);
    
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($products) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Price</th></tr>";
        foreach ($products as $product) {
            echo "<tr><td>" . htmlspecialchars($product['name']) . "</td><td>" . htmlspecialchars($product['price']) . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Tidak ada data yang ditemukan.";
    }
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
$pdo = null;
?>

</body>
</html>
