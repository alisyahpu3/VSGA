<?php
// Array multidimensi untuk data produk
$produk = [
    ["nama" => "Produk A", "harga" => 10000, "stok" => 50],
    ["nama" => "Produk B", "harga" => 15000, "stok" => 30],
    ["nama" => "Produk C", "harga" => 20000, "stok" => 70],
    ["nama" => "Produk D", "harga" => 25000, "stok" => 20],
    ["nama" => "Produk E", "harga" => 5000, "stok" => 90]
];
// Menampilkan data produk menggunakan foreach
echo "<h3>Data Produk</h3>";
foreach ($produk as $item) {
    echo "Nama: {$item['nama']}, Harga: {$item['harga']}, Stok: {$item['stok']}<br>";
}
// Mencari produk dengan stok paling banyak
$produk_max_stok = $produk[0];
foreach ($produk as $item) {
    if ($item['stok'] > $produk_max_stok['stok']) {
        $produk_max_stok = $item;
    }
}
// Mencari produk dengan harga paling murah
$produk_min_harga = $produk[0];
foreach ($produk as $item) {
    if ($item['harga'] < $produk_min_harga['harga']) {
        $produk_min_harga = $item;
    }
}
echo "<h3>Produk dengan Stok Paling Banyak</h3>";
echo "Nama: {$produk_max_stok['nama']}, Harga: {$produk_max_stok['harga']}, Stok: {$produk_max_stok['stok']}<br>";

echo "<h3>Produk dengan Harga Paling Murah</h3>";
echo "Nama: {$produk_min_harga['nama']}, Harga: {$produk_min_harga['harga']}, Stok: {$produk_min_harga['stok']}<br>";
?>
