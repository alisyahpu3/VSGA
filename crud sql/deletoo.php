<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "dboo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
} 

$sql="DELETE FROM participants WHERE id =2";

if ($conn->query($sql) === TRUE) {
    echo"New record created successfully";
}else{
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>