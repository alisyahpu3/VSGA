<?php
require 'db_connect.php';

$id = '1';
$new_email = 'newuser123@gmail.com';

$sql = "update users set email = :email where id =:id";
$stmt = $pdo->prepare($sql);

$stmt->execute(['email'=>$new_email,'id'=>$id]);
echo "email berhasil diperbarui!";

?>