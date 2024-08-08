<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dboo";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn-> connect_error){
    die(
        "koneksi gagal: ". $conn->connect_error
    );
} 

$sql = "CREATE TABLE participants (
id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR (50) not null,
email VARCHAR(50),
tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if($conn->query( $sql) === TRUE){
    echo "Table participants created";
}else{
    echo "error creating table : " . $conn->error;
}

$conn->close();
?>