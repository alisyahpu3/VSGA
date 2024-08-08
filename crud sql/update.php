<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "dboo";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("koneksi gagal". $conn->connect_error);
} echo "koneksi berhasil <br>";

$sql = "SELECT nama, email FROM participants ORDER BY nama ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "Nama: " . $row["nama"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>