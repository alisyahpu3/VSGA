<?php
$servername = "localhost";
$database = "tsa_web";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("koneksi gagal : ". $conn->connect_error);
}echo "koneksi sukses : "
?>