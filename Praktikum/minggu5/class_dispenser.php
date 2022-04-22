<?php
class Dispenser{
    protected $volumeGalon;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;
    public $volumeSisa;

    public function set_volumeGalon($v){
        return $this->volumeGalon = $v;
    }
    public function set_hargaSegelas($h){
        return $this->hargaSegelas = $h;
    }
    public function set_volumeGelas($vg){
        return $this->volumeGelas = $vg;
    }
}
$galon = new Dispenser();
$galon->namaMinuman = ('Aqua');
echo "Nama Minuman ini Adalah {$galon->namaMinuman}";
echo "<hr/>";
$galon->set_volumeGalon = 1000;
echo "Volume Galonnya Adalah {$galon->set_volumeGalon} ml";
echo "<br/>";
$galon->set_hargaSegelas = 3000;
echo "Harga Segelas Aqua Adalah {$galon->set_hargaSegelas} Rupiah";
echo "<br/>";
$galon->set_volumeGelas = 250;
echo "Anda Membeli Air Aqua dengan Volume {$galon->set_volumeGelas} ml";
echo "<br/>";
$galon->volumeSisa = $galon->set_volumeGalon - $galon->set_volumeGelas;
echo "Volume Galon Sekarang Adalah {$galon->volumeSisa} ml";
?>