<?php
    //Variabel user
    $Nama = 'himmah';
    $Umur = 17;
    $Berat = 55;

    echo 'Nama saya '.$Nama.' Umur saya '.$Umur.' Berat saya '.$Berat;
    echo "<br />";
    echo "<h1 style='color: green'>Nama saya $Nama, Umur saya $Umur, Berat saya $Berat</h1>";
    echo "<br />";
    
    //Variabel sistem
    echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
    echo "<br />";
    
    //Variabel konstan, tidak bisa diubah nilainya
    define('makanan', 'Rumput laut');
    echo makanan;
?>