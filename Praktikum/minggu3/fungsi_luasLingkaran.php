<?php
// membuat fungsi
function hitungluas($jari){
    $phi = 3.14;
    $luaslingkaran = $phi * $jari * $jari;
    return $luaslingkaran;
}

// memanggil fungsi
echo hitungluas(7);
echo "<br/>";
echo hitungluas(14);
echo "<br/>";
echo hitungluas(21);

?>