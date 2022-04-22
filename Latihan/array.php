<?php
$_fruits = ["apple", "orange", "manggo"];
echo 'Elemen buah index ke-2'. $_fruits[2];
echo '<br/>jumlah buah :' .count($_fruits);
?>
<h3>Daftar Buah</h3>
<ol>
    <?php
        $jumlah = count($_fruits);
        for($i = 0 ; $i < $jumlah ; $i++){
            echo '<li>'.$_fruits[$i]. '</li>';
        }
    ?>
</ol>
<?php
    $umur = ['Himmah'=>20,'Aliyah'=>21,'Watsiqoh'=>19];
    foreach($umur as $k => $v){
        echo '<br/>'.$k. ' usianya : '.$v;
    }
?>
<hr/>
<?php
    $ar_jus = [
        ['buah'=>'mangga','harga' =>8000],
        ['buah'=>'semangka','harga' =>10000],
        ['buah'=>'jeruk','harga' =>14000],
    ];
?>
<ol>
    <?php
        foreach($ar_jus as $jus){
        echo '<li>Jus '.$jus['buah'].' harga :' . $jus['harga']. '</li>';
        }
    ?>
</ol>