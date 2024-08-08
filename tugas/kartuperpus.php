<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Permohonan Kartu Perpustakaan</title>
</head>
<body>
    <h2>Formulir Permohonan Kartu Perpustakaan</h2>
    <form action="proseskartu.php" method="post" enctype="multipart/form-data">
        <label for="nama">Nama Lengkap:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" required><br><br>
        
        <label for="kelas_prodi">Kelas dan Prodi:</label><br>
        <select id="kelas_prodi" name="kelas_prodi" required>
            <option value="S1 Informatika">S1 TRO</option>
            <option value="S1 Sistem Informasi">D3 TI</option>
            <option value="S1 Teknik Elektro">D3 Akuntansi</option>
          
        </select><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="foto">Upload Foto:</label><br>
        <input type="file" id="foto" name="foto" accept="image/*" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
