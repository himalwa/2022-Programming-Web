<?php

// parent class
class Buah{
    public $nama;
    public $warna;

    // method construct
    public function __construct($nama, $warna)
    {
        $this->nama = $nama;
        $this->warna = $warna;
    }

    // method intro
    public function intro(){
        echo "Ini adalah buah dengan nama : {$this->nama} dan warna {$this->warna}";
    }

}

// child class
class Mangga extends Buah{
    // method biji
    public function biji(){
        echo "Buah ini berbiji 1";
    }
}

// buat objek
$mangga_indramayu = new Mangga("Mangga Indramayu", "Hijau");
$mangga_indramayu->intro();
echo "<br/>";
$mangga_indramayu->biji();

?>