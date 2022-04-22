<?php

// parent class
class Fruit{
    public $name;
    public $warna;
    // method construct
    public function __construct($name, $warna)
    {
        $this->name = $name;
        $this->warna = $warna;
    }
    // method intro
    public function intro(){
        echo "Ini adalah buah dengan nama {$this->name} dan warna {$this->warna}";
    }
}
// child class
class Mangga extends Fruit{
    // method biji
    public function biji(){
        echo "Buah ini berbiji 1";
    }
}
// buat objek
$mangga_indramayu = new Mangga("mangga Indramayu", "hijau");
$mangga_indramayu->intro();
echo "<br/>";
$mangga_indramayu->biji();

?>