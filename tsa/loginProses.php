<?php
include "koneksi.php";
$username = $_POST["username"];
$password = md5($_POST["password"]);

$query = "select * from user where username = '$username' and password = '$password'";
$result = mysqli_query($conn, $query);
$rowcount = mysqli_num_rows($result);

if ($rowcount > 0) {
    echo "login sukses";
    echo "<a href = 'adminDashboard.html'>Admin </a>";
} else {
    echo "gagal login";
    echo "<a href = 'loginForm.html'> Login Form </a>";
}
mysqli_close($conn);

?>