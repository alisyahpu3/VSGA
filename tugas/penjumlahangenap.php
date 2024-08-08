<?php
echo "<h3>Penjumlahan Bilangan Genap dari 2-24</h3>";
$sum = 0;
for ($i = 2; $i <= 24; $i += 2) {
    $sum += $i;
}
echo "Jumlah: " . $sum;
?>
