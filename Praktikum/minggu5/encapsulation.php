<?php

// class buah
class Buah{
    public $nama;
    protected $warna;
    private $berat;
}

// buat objek
$mangga = new Buah();

// akses property
echo $mangga->nama = "Mangga"; // Berhasil

// akses property private
echo $mangga->berat = 30;

// akses propert protected
echo $mangga->warna = "Mangga"; // Error

?>