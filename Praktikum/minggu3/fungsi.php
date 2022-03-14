<?php
// cara membuat fungsi
// function namafungsi(parameter){
//    code disini
// }

function luaspersegi($sisi){
    $rumus = $sisi * $sisi;
    return $rumus;
}

echo "Hasilnya adalah : " . luaspersegi(10);
echo "<br/>";

// buat fungsi nama
function nama(){
    echo "Nama saya adalah Himmah";
}
nama();
echo "<br/>";

// fungsi menggunakan parameter 
// jika tidak ada parameter ditulis, dapat menggunakan parameter default
function perkenalan($nama){
    echo "Perkenalkan nama saya : " . $nama;
}
perkenalan("Himmah");
echo "<br/>";

?>