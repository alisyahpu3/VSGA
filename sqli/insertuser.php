<?php
require 'db_connect.php';

// Retrieve POST data
$username = $_POST['username'];
$email = $_POST['email'];

try {
    // Prepare the SQL query
    $sql = "INSERT INTO users (username, email) VALUES (:username, :email)";
    $stmt = $pdo->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->execute(['username' => $username, 'email' => $email]);

    // If you want to insert a fixed user, you should create a new statement
    $sql = "INSERT INTO users (username, email) VALUES (:username, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $fixed_name);
    $stmt->bindParam(':email', $fixed_email);

    $fixed_name = "putri";
    $fixed_email = "putri@gmail.com";
    $stmt->execute();

    echo "User berhasil ditambahkan!";
} catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}
?>
