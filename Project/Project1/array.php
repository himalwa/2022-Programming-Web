<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 1</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Praktikum</a></li>
              <li class="breadcrumb-item active">Praktikum 1</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Nilai</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
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
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Sistem Informasi
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>

</div>
    <?php
include_once 'footer.php';
?>
</body>
</html>