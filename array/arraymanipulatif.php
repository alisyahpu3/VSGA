<?php
echo "<h3>Manipulasi Indexed Array</h3>";
$buah = ["Apel", "Jeruk"];
echo "Nilai awal: ";
print_r($buah);
echo "<br>";
array_push($buah, "Mangga", "Durian"); // Menambahkan elemen baru diakhir array
echo "Nilai array setelah penambahan: ";
print_r($buah);
echo "<br>";
$buah[1] = "Pisang"; // Mengubah elemen dengan indeks 1
echo "Nilai array setelah index 1 diubah ke pisang: ";
print_r($buah);
echo "<br>";
unset($buah[1]); // Menghapus elemen dengan indeks 1
echo "Nilai array setelah penghapusan index 1: ";
print_r($buah);
echo "<br>";
echo "<h3>Manipulasi Associative Array</h3>";
$harga = ["Apel" => 3000, "Jeruk" => 2000];
echo "Nilai awal: ";
print_r($harga);
echo "<br>";
$harga["Mangga"] = 5000; // Menambahkan elemen baru dengan key "Mangga"
echo "Nilai array setelah penambahan: ";
print_r($harga);
echo "<br>";
$harga["Jeruk"] = 2500; // Mengubah elemen dengan kunci "Jeruk"
echo "Nilai array setelah elemen jeruk diubah: ";
print_r($harga);
echo "<br>";
unset($harga["Jeruk"]); // Menghapus elemen dengan kunci "Jeruk"
echo "Nilai array setelah elemen jeruk dihapus: ";
print_r($harga);
echo "<br>";
?>