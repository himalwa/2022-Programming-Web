<?php
class Account{
    public $nomor;
    public $nama;
    public $saldo;

    public function __construct($nomor, $nama, $saldo)
    {
        $this->nomor = $nomor;
        $this->nama = $nama;
        $this->saldo = $saldo;
    }

    public function daftar(){
        echo "{$this->nomor} {$this->nama} {$this->saldo}";
    }
}
class Accountbank extends Account{
    public function message(){
        echo "{this->nama} Nabung {this->saldo}";
    }
}
?>