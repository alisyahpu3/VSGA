<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "dbpro";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    die("koneksi gagal". mysqli_connect_error());
}

$sql="INSERT INTO participants (nama, email)
VALUES ('putri','putri@gmail.com'),('alisyah','alisyah@gmail.com')";

if (mysqli_query($conn,$sql)) {
    echo"New record created successfully";
}else{
    echo "Error :" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>