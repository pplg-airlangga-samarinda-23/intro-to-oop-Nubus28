<?php
class Waktu
{
    // Deklarasikan atribut sesuai ditentukan buku
    public $jam;
    public $menit;
    public $detik;

    public function getJam() {
        return $this->jam;
    }
    
    public function getMinut() {
        return $this->menit;
    }
    
    public function getDetik() {
        return $this->detik;
    }
    // Deklarasikan metode sesuai yang diminta buku
    // ... (jika ada metode lain yang didefinisikan)
}

$contoh = new Waktu(15, 34, 50);

// Menampilkan waktu menggunakan getter
echo "Sekarang pukul " . $contoh->getJam() . ":" . $contoh->getMinut() . ":" . $contoh->getDetik() . "<br>";
?>