<?php

// cara buat class
class Mahasiswa{
    // cara buat property atau variabel
    public $nama;
    public $alamat;
    public $jurusan;

    // cara buat method atau fungsi
    function CekNama(){
        echo "Nama saya adalah : " . $this->nama;
    }

    function __construct($datanama, $dataalamat, $datajurusan)
    {
        $this->nama = $datanama;
        $this->alamat = $dataalamat;
        $this->jurusan = $datajurusan;
    }
}

// cara buat objek
$mahasiswa1 = new Mahasiswa("Himmah", "Bogor", "Informasi");
$mahasiswa2 = new Mahasiswa("Aliyah", "Bogor", "Informasi");

// cara akses property
echo $mahasiswa1->nama;
echo "<br/>";

// akses data mahasiswa2
echo $mahasiswa2->nama;

// cara akses method
// $mahasiswi->CekNama();

?>