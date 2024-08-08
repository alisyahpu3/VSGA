<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpustakaan";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelas_prodi = $_POST['kelas_prodi'];
$email = $_POST['email'];
$foto = $_FILES['foto']['name'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);

// Memindahkan file yang diupload ke folder 'uploads'
if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
    // Menyimpan data ke dalam database
    $sql = "INSERT INTO kartu_perpustakaan (nama, alamat, kelas_prodi, email, foto)
            VALUES ('$nama', '$alamat', '$kelas_prodi', '$email', '$foto')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Maaf, terjadi kesalahan saat mengupload file.";
}

$conn->close();
?>
