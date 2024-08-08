<?php
class Segitiga {
    private $alas;
    private $tinggi;

    // Konstruktor
    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    // Fungsi untuk menghitung luas
    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }
    // Fungsi untuk menghitung keliling 
    public function hitungKeliling($sisi) {
        return 3 * $sisi;
    }
}
$segitiga = new Segitiga(10, 5);
echo "Luas Segitiga: " . $segitiga->hitungLuas() . "\n";
echo "Keliling Segitiga: " . $segitiga->hitungKeliling(10) . "\n";
?>