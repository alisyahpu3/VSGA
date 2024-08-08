<?php
require 'db_connect.php';

$username = 'user123';
$email = 'user123@gmail.com';

$sql = "INSERT INTO users (username,email) VALUES (:username, :email)";
$stmt = $pdo->prepare($sql);

$stmt->execute(['username'=>$username,'email'=>$email]);
echo "user berhasil ditambahkan!";

?>