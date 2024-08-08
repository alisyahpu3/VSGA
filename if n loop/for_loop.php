<?php
echo "<h3>Perulangan menggunakan for: Menampilkan Angka 1-10</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<h3>mengubah $ 1 ke $ 0 Menampilkan Angka 0-10</h3>";
//iterasi dimulai $i=1, dan setiap perulangan nilai $i bertambah 1,dan akan terus berulang selama $i<=10
for ($i = 0; $i <= 10; $i++) {
echo $i . " ";
}

echo "<h3>Operator Relasi dari <= menjadi < Menampilkan Angka 0-9</h3>";
for ($i = 0; $i < 10; $i++) {
    echo $i . " ";
}

echo "<h3>Nilai dari $ i++ menjadi $ i = $i + 2 Menampilkan Angka 0-8 dengan Increment 2</h3>";
for ($i = 0; $i < 10; $i = $i + 2) {
    echo $i . " ";
}
?>