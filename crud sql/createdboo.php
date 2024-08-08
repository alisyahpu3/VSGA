<?php
include "koneksi1.php";
$sql = "CREATE DATABASE dboo";
if($conn->query($sql)=== true){
    echo "Database created succesfully";
} else {
    echo "Error creating databasae :". $conn->error;
}
$conn->close();
?>