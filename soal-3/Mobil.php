<?php
class Mobil {
    public $merek;
    public $model;
    public $warna;
    public $tahun;
    public $kecepatan = 0;

    public function melaju() {
        echo "Mobil sedang melaju.";
    }

    public function berhenti() {
        $this->kecepatan = 0;
        echo "Mobil berhenti.";
    }

    public function gantiGigi($gigi) {
        echo "Mobil mengganti gigi ke " . $gigi . ".";
    }

    public function tampilkanInfo() {
        echo "Mobil " . $this->merek . " " . $this->model . " berwarna " . $this->warna . " tahun " . $this->tahun . " sedang melaju dengan kecepatan " . $this->kecepatan . " km/jam.";
    }
}

// Membuat objek mobil dan mengisi atributnya
$mobilku = new Mobil();
$mobilku->merek = "Toyota";
$mobilku->model = "Corolla";
$mobilku->warna = "Putih";
$mobilku->tahun = 2023;

// Memanggil keempat metode
$mobilku->melaju();
$mobilku->gantiGigi(3);
$mobilku->berhenti();
$mobilku->tampilkanInfo();
?>