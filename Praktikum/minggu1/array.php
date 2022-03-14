<?php
   // $mahasiswa = ['himmah', 'aliyah', 'watsiqoh'];

    // echo $mahasiswa[0];
    // echo "<br />";
    // echo $mahasiswa[1];
    // echo "<br />";
    // echo $mahasiswa[2];
    // echo "<br />";
    // var_dump($mahasiswa);
    // perulangan
    
    //foreach ($mahasiswa as $mhs){
    //    echo "$mhs";
    //    echo "<br />";
    // }
    
    // multidimensi array
    $mahasiswa = [
        ["id" =>01, "nama" => "Himmah", "nim" => "0110121311", "uas" =>100, "uts" => 100, "tugas" =>90],
        ["id" =>02,"nama" => "Aliyah", "nim" => "0110121310", "uas" =>90, "uts" => 90, "tugas" =>80],
    ];
    // echo $mahasiswa[0]["nama"];

    // foreach($mahasiswa as $mhs){
    //    echo $mhs["nama"];
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <table class="table table-stripped" style="text-align: center;">
        <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
        </thead>
        <tbody>
            <?php foreach($mahasiswa as $mhs): ?>
                <tr>
                    <td><?= $mhs["id"] ?></td>
                    <td><?= $mhs["nama"] ?></td>
                    <td><?= $mhs["nim"] ?></td>
                    <td><?= $mhs["uts"] ?></td>
                    <td><?= $mhs["uas"] ?></td>
                    <td><?= $mhs["tugas"] ?></td>
                </tr>
            <?php endforeach; ?> 
        </tbody>
    </table>
</body>
</html>