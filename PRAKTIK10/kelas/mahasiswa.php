<?php
require_once "manusia.php";

class mahasiswa extends Manusia
{
    protected $NIM;
    protected $jurusan;
    protected $kelas;

    public function __construct($nama)
    {
        // kita bisa langsung manfaatkan fungsi dari kelas manusia.php
        $this->setNama($nama);
    }

    // Setter dan Getter untuk NIM
    public function setNIM($NIM)
    {
        $this->NIM = $NIM;
    }

    public function getNIM()
    {
        return $this->NIM;
    }

    // Setter dan Getter untuk Jurusan
    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    public function getJurusan()
    {
        return $this->jurusan;
    }

    // Setter dan Getter untuk Kelas
    public function setKelas($kelas)
    {
        $this->kelas = $kelas;
    }

    public function getKelas()
    {
        return $this->kelas;
    }
}
?>