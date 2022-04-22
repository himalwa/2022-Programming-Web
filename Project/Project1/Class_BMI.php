<?php
class bmi{
    public $nama, $berat, $tinggi, $umur, $jeniskelamin;

    public function hasil_bmi(){
        return "<b>Nama : $this->nama <br/> 
                Berat Badan : $this->berat <br/>
                Tinggi Badan : $this->tinggi <br/>
                Umur : $this->umur <br/>
                Jenis Kelamin : $this->jeniskelamin <br/> </b>";
    }
    
    public function statusbmi($bmi){
        if ($bmi < 18.5) {
            return "<td>Kekurangan Berat Badan</td>";
        }else if ($bmi >= 18.5 && $bmi <= 24.9) {
            return "<td>Ideal</td>";
        }else if ($bmi >=25.0 && $bmi <=29.9){
            return "<td>Kelebihan Berat Badan</td>";
        }else{
            return "<td>Obesitas</td>";
        }
    }
}
if (isset($_GET["nama__lengkap"])) {
    $bmi = new bmi;
    $bmi->nama = $_GET["nama__lengkap"];
    $bmi->berat = $_GET["berat__"];
    $bmi->tinggi = $_GET["tinggi__"];
    $bmi->umur = $_GET["umur__"];
    $bmi->jeniskelamin = $_GET["jenis__kelamin"];
}
$orang1 = ['nama'=>'Himmah Aliyah Watsiqoh', 'kelamin'=>'pr', 'umur'=>'17', 'berat'=>'55', 'tinggi'=>'156'];
$orang2 = ['nama'=>'Abdul Fatah', 'kelamin'=>'lk', 'umur'=>'16', 'berat'=>'60', 'tinggi'=>'165'];
$orang3 = ['nama'=>'Muhammad Said', 'kelamin'=>'lk', 'umur'=>'15', 'berat'=>'55', 'tinggi'=>'160'];
$orang4 = ['nama'=> $bmi->nama, 'kelamin'=>$bmi->jeniskelamin, 'umur'=> $bmi->umur, 'berat'=> $bmi->berat, 'tinggi'=>$bmi->tinggi];

$ar_org = [$orang1, $orang2, $orang3, $orang4];
?>