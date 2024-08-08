<?php
// Array angka
$angka = [23, 24, 24, 30, 34, 35, 40, 40, 46, 47];

//  total penjumlahan semua angka
$total = array_sum($angka);

// mean
$mean = $total / count($angka);

// median
sort($angka);
$count = count($angka);
$median = ($count % 2 == 0) ? ($angka[$count / 2 - 1] + $angka[$count / 2]) / 2 : $angka[floor($count / 2)];

// angka ganjil
$angka_ganjil = array_filter($angka, function($value) {
    return $value % 2 != 0;
});

echo "<h3>Hasil Pengelolaan Angka</h3>";
echo "Total: $total<br>";
echo "Rata-rata (Mean): $mean<br>";
echo "Median: $median<br>";
echo "Angka Ganjil: " . implode(", ", $angka_ganjil) . "<br>";
?>
