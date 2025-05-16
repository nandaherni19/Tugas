<?php
class buah2{
    public $nama;
    public $warna;
    public $bobot;

    function set_name($n){
        $this->nama = $n;
    }

    public function set_color($n){
        $this->warna = $n;
    }

    public function set_weight($n){
        $this->bobot = $n;
    }
}

$mango = new buah2();
$mango->set_name("Mango");
$mango->set_color("Yellow");
$mango->set_weight("300");

// Tambahkan ini untuk menampilkan data:
echo "Nama buah: " . $mango->nama . "<br>";
echo "Warna: " . $mango->warna . "<br>";
echo "Bobot: " . $mango->bobot . " gram";
?>
