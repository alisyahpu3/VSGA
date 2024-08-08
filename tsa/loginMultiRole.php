<?php
include "koneksi.php";
$username = $_POST["username"];
$password = md5($_POST["password"]);

$query = "select * from user where username = '$username' and password = '$password'";
$result = mysqli_query($conn, $query);
$fetchResult = mysqli_fetch_assoc($result);
if ($fetchResult) {
    if ($fetchResult['role'] == 'admin') {
        echo "Login sukses ";
        echo "<a href='adminDashboard.html'>ADMIN</a>";
    } elseif ($fetchResult['role'] == 'user') {
        echo "Login sukses ";
        echo "<a href='userDashboard.html'>User Dashboard</a>";
    } else {
        echo "Gagal login ";
        echo "<a href='loginForm.html'>Login Form</a>";
    }
} else {
    echo "Gagal login ";
    echo "<a href='loginForm.html'>Login Form</a>";
}
mysqli_close($conn);
?>