<?php
require 'db_connect.php';

$sql = "Select * from users";
$stmt = $pdo->prepare($sql);
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row["username"]."-".$row["email"]."<br>";
}
?>