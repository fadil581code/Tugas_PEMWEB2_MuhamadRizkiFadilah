<?php

class Kendaraan
{
    public $nama;
    public $roda;

    public function __construct($nama, $roda)
    {
        $this->nama = $nama;
        $this->roda = $roda;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getRoda()
    {
        return $this->roda;
    }

    public function Spesifikasi()
    {

        if ($this->roda == '2') {
            return 'Motor';
        } elseif ($this->roda == '4') {
            return 'Mobil';
        } elseif ($this->roda >= 6 && $this->roda <= 8) {
            return 'Tronton';
        } else {
            return 'Tidak di Ketahui';
        }
    }
}
