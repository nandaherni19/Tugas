<?php
class akunBank
{
    protected $accountNumber;
    protected $jmlUang;
    protected $nama;

    // Konstruktor
    public function __construct($nomorAkun, $nominal)
    {
        $this->accountNumber = $nomorAkun;
        $this->jmlUang = $nominal;
    }

    // Setter dan Getter untuk nama
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    // Fungsi untuk menambah jumlah uang
    public function tambahUang($jumlah)
    {
        $this->jmlUang += $jumlah;
    }

    // Fungsi untuk mengurangi jumlah uang
    public function kurangUang($jumlah)
    {
        if ($jumlah <= $this->jmlUang) {
            $this->jmlUang -= $jumlah;
        } else {
            echo "Saldo tidak cukup untuk dikurangi.<br>";
        }
    }

    // Fungsi untuk menampilkan jumlah uang
    public function tampilkanUang()
    {
        echo "Saldo saat ini: Rp " . number_format($this->jmlUang, 0, ',', '.') . "<br>";
    }

    // Fungsi untuk menghitung pajak (11% dari saldo)
    public function hitungPajak()
    {
        $pajak = $this->jmlUang * 0.11;
        echo "Pajak 11% dari saldo: Rp " . number_format($pajak, 0, ',', '.') . "<br>";
    }
}
?>