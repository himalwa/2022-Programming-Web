<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penghitung BMI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h1 style="text-align: center;">Form Penghitung BMI</h1><hr/>
<form>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama__lengkap" placeholder="Masukkan nama lengkap anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat Badan</label> 
    <div class="col-8">
      <input id="berat" name="berat__" placeholder="Masukkan berat badan anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-8">
      <input id="tinggi" name="tinggi__" placeholder="Masukkan tinggi badan anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="umur" class="col-4 col-form-label">Umur</label> 
    <div class="col-8">
      <input id="umur" name="umur__" placeholder="Masukkan umur anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis__kelamin" id="jeniskelamin_0" type="radio" class="custom-control-input" value="pr"> 
        <label for="jeniskelamin_0" class="custom-control-label">Perempuan</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis__kelamin" id="jeniskelamin_1" type="radio" class="custom-control-input" value="lk"> 
        <label for="jeniskelamin_1" class="custom-control-label">Laki-laki</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Input</button>
    </div>
  </div>
</form>
<?php
require_once "Class_BMI.php";
?>

<div class="container">
    <h2 class="text-center mb-5">Data Input BMI</h2>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Gender</th>
                <th scope="col">Umur</th>
                <th scope="col">Berat Badan</th>
                <th scope="col">Tinggi Badan</th>
                <th scope="col">BMI</th>
                <th scope="col">Hasil</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor =1;
            foreach ($ar_org as $orang){
                echo '<tr><td>' .$nomor . '</td';
                echo '<tr><td>' .$orang['nama'] . '</td';
                echo '<tr><td>' .$orang['kelamin'] . '</td';
                echo '<tr><td>' .$orang['umur'] . '</td';
                echo '<tr><td>' .$orang['berat'] . '</td';
                echo '<tr><td>' .$orang['tinggi'] . '</td';
                $bmi = $orang["berat"] / (($orang["tinggi"] / 100) ** 2);
                echo '<tr><td>' . number_format($bmi, 1) .'</td>';
                $status = new bmi();
                echo $status->statusbmi($bmi);
                echo '</tr>';
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>