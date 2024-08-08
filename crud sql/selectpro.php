<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "dbpro";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    die("koneksi gagal". mysqli_connect_error());
}

$sql="SELECT id, nama, email FROM participants";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID : " . $row["id"] ."-Nama: ". $row["nama"] . "- Email: ". $row["email"] ."<br>";
} 
}else {
    echo"0 results";
}

mysqli_close($conn);
?>