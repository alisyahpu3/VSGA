<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if($conn-> connect_error){
    die(
        "koneksi gagal: ". $conn->connect_error
    );
} echo "koneksi berhasil : ";
?>