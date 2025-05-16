<?php
class buah
{
    public $nama;          // boleh diakses dari mana saja
    protected $warna;      // hanya bisa diakses dari dalam class itu sendiri atau turunannya
    private $berat;        // hanya bisa diakses dari dalam class itu sendiri saja

// Setter untuk warna
    public function setWarna($warna) {
        $this->warna = $warna;
    }

    // Getter untuk warna
    public function getWarna() {
        return $this->warna;
    }

    // Setter untuk berat
    public function setBerat($berat) {
        $this->berat = $berat;
    }

    // Getter untuk berat
    public function getBerat() {
        return $this->berat;
    }
}

// Membuat objek buah
$mango = new Buah();
$mango ->nama = 'mango';
$mango ->setWarna ('yellow');
$mango ->setBerat ('300');

// Tampilkan hasil
echo "Nama Buah: " . $mango->nama . "<br>";
echo "Warna: " . $mango->getWarna() . "<br>";
echo "Berat: " . $mango->getBerat() . " gram<br>";
?>