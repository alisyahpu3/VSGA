<?php
class Mobil {
        // Properti
    public $merk;
    public $warna;
    public $kecepatan;
        // Metode (function)
    public function __construct($merk, $warna) {
    $this->merk = $merk;
    $this->warna = $warna;
    $this->kecepatan = 0; 
        }
        // Metode (function)
    public function tampilkanInfo() {
    return "Mobil ini adalah $this->merk berwarna $this->warna
        dengan kecepatan $this->kecepatan km/jam.";
        }
        //TAMBAHKAN INI
    public function tambahKecepatan($tambah) {
    $this->kecepatan += $tambah;
    return "Kecepatan mobil sekarang: $this->kecepatan km/jam.";
        }
        //TAMBAHKAN INI
    public function kurangiKecepatan($kurang) {
    $this->kecepatan -= $kurang;
    return "Kecepatan mobil sekarang: $this->kecepatan km/jam.";
    }
        }
        // INSTANSIASI -> Membuat objek dari class Mobil
    $mobil1 = new Mobil("Toyota", "Merah");
    echo $mobil1->tampilkanInfo() . "<br>";
    echo $mobil1->tambahKecepatan(20) . "<br>";
    echo $mobil1->kurangiKecepatan(10) . "<br>";
?>