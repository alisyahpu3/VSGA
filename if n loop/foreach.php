<?php
echo "<h3>Perulangan foreach: Menampilkan Elemen Array</h3>";
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu",
"Minggu");
foreach ($hari as $item) {
echo $item . " ";
}
?>