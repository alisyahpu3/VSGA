<?php
include "koneksi.php";
$username = $_POST["username"];
$password = md5($_POST["password"]);

$query = "select * from user where username = '$username' and password = '$password'";
$result = mysqli_query($conn, $query);
$rowcount = mysqli_num_rows($result);
$fetchResult = mysqli_fetch_assoc($result);

if ($rowcount > 0) {
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION["status"] = "login"; 

    if ($fetchResult["role"] == "admin") {
        echo "Login sukses";
        echo "<a href='adminDashboard.html'>Admin</a>";
    } elseif ($fetchResult["role"] == "user") {
        echo "Login sukses";
        echo "<a href='userDashboard.html'>User</a>"; 
    }
} else {
    echo "Login gagal";
    echo "<a href='loginForm.html'>Login Form</a>";
}
mysqli_close($conn);

?>