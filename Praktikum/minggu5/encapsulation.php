<?php
// class buah
class buah{
    public $name;
    protected $color;
    private $berat;

    // buat method
    public function set_color($c){
        return $this->color = $c;
    }
    public function set_berat($b){
        return $this->berat = $b;
    }
}

// buat objek
$mangga = new buah();

// akses property public
echo $mangga->name = 'Mangga';
echo "<br/>";

// akses property private
echo $mangga->set_berat = ('30kg');
echo "<br/>";

// akses property protected
echo $mangga->set_color = ('hijau');
?>