<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "dboo";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("koneksi gagal". $conn->connect_error);
} echo "koneksi berhasil <br>";

$sql = "UPDATE participants SET 
        nama = 'PUTRI UPDATED', 
        email = 'PUTRI_UPDATED@gmail.com' 
        WHERE id = 3";

if ($conn->query($sql) === TRUE) {
    echo"New record created successfully";
}else{
    echo "Error :" . $sql . "<br>" . $conn->error;
}
$conn->close();
?>