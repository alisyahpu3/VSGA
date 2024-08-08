<?php
class Buku {
    private $judul;
    private $penulis;
    private $tahunTerbit;
    // Konstruktor
    public function __construct($judul, $penulis, $tahunTerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }
    // Metod menampilkan informasi buku
    public function tampilkanInfo() {
        return "Judul: " . $this->judul . ", Penulis: " . $this->penulis . ", Tahun Terbit: " . $this->tahunTerbit;
    }
}

class Perpustakaan {
    private $koleksiBuku = array();
    // Metod mmenambah buku ke koleksi
    public function tambahBuku(Buku $buku) {
        $this->koleksiBuku[] = $buku;
    }
    // Metod menampilkan semua buku
    public function tampilkanSemuaBuku() {
        foreach ($this->koleksiBuku as $buku) {
            echo $buku->tampilkanInfo() . "\n";
        }
    }
    // Metod mencari buku berdasarkan judul
    public function cariBuku($judul) {
        foreach ($this->koleksiBuku as $buku) {
            if (strpos(strtolower($buku->tampilkanInfo()), strtolower($judul)) !== false) {
                return $buku->tampilkanInfo();
            }
        }
        return "Buku tidak ditemukan.";
    }
}
$buku1 = new Buku("Pemrograman PHP", "Andrea", 2020);
$buku2 = new Buku("Data Structures", "Hirata", 2018);

$perpustakaan = new Perpustakaan();
$perpustakaan->tambahBuku($buku1);
$perpustakaan->tambahBuku($buku2);

echo "Semua Buku di Perpustakaan:\n";
$perpustakaan->tampilkanSemuaBuku();

echo "\nMencari Buku dengan judul 'Data Structures':\n";
echo $perpustakaan->cariBuku("Data Structures") . "\n";
?>