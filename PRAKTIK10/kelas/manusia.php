<?php

class Manusia
{
    // deklarasi variabel
    protected $name;
    protected $nik = "123212121243243";
    protected $umur;

    // Getter dan Setter untuk nama
    public function getNama()
    {
        return $this->name;
    }

    public function setNama($name)
    {
        $this->name = $name;
    }

    // Getter dan Setter untuk umur
    public function getUmur()
    {
        return $this->umur;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    // Method untuk menampilkan NIK
    public function getNIK()
    {
        return "NIK adalah {$this->nik}";
    }
}
?>