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
            <h1>Praktikum 2</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Praktikum</a></li>
              <li class="breadcrumb-item active">Praktikum 2</li>
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
                <h3 class="card-title">Form Belanja</h3>

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
              <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      .dropbtn {
      background-color: #D7EEFF;
      color: black;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      }
      .dropdown {
      position: relative;
      display: inline-block;
      }
      .dropdown-content {
      display: none;
      position: absolute;
      right: 0;
      background-color: #f9f9f9;
      min-width: 200px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      }
      .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      }
      .dropdown-content a:hover {background-color: #f1f1f1;}
      .dropdown:hover .dropdown-content {
      display: block;
      }
      .dropdown:hover .dropbtn {
      background-color: #87CEFA;
      }
      h1{
        font-family: Geneva;
      }
    </style>
  </head>
<body>
<div class="dropdown" style="float:right;">
    <button class="dropbtn"><b>Daftar Harga</b></button>
    <div class="dropdown-content">
    <a href="#">TV : 2.000.000</a>
    <a href="#">Kulkas : 4.000.000</a>
    <a href="#">Mesin Cuci : 5.000.000</a>
    </div>
  </div>
  <h1>Belanja Online</h1><hr>
<form method="POST">
  <div class="form-group row">
    <label for="nama_customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="nama_customer" name="nama_customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilih_produk" id="pilih_produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="pilih_produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilih_produk" id="pilih_produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="pilih_produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilih_produk" id="pilih_produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="pilih_produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah_beli" class="col-4 col-form-label">Jumlah Beli</label> 
    <div class="col-8">
      <input id="jumlah_beli" name="jumlah_beli" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</body>
</html>
<?php 

$submit = @$_POST["submit"];
$nama_customer = @$_POST["nama_customer"];
$pilih_produk = @$_POST["pilih_produk"];
$jumlah_beli = @$_POST["jumlah_beli"];

echo '<br/>Nama Customer : '.$nama_customer;
echo '<br/>Pilih Produk : '.$pilih_produk;
echo '<br/>Jumlah Beli : '.$jumlah_beli;

?>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Input Nilai</h3>

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
              <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form method="GET">
  <div class="form-group row">
    <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="mata_kuliah" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="mata_kuliah" name="mata_kuliah" class="custom-select">
        <option value="Dasar-Dasar pemrograman">Dasar-Dasar Pemrograman</option>
        <option value="Pemrograman Web 2">Pemrograman Web 2</option>
        <option value="Statistik dan Probabilitas">Statistik dan Probabilitas</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
</body>
</html>

<?php
$nama_lengkap = @$_GET['nama_lengkap'];
$mata_kuliah = @$_GET['mata_kuliah'];
$nilai_uts = @$_GET['nilai_uts'];
$nilai_uas = @$_GET['nilai_uas'];
$nilai_tugas = @$_GET['nilai_tugas'];
$submit = @$_GET['submit'];

echo 'Nama Lengkap : '.$nama_lengkap;
echo '<br/>Mata Kuliah : '.$mata_kuliah;
echo '<br/>Nilai UTS : '.$nilai_uts;
echo '<br/>Nilai UAS : '.$nilai_uas;
echo '<br/>Nilai Tugas : '.$nilai_tugas;
?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Sistem Informasi
              </div>
              <!-- /.card-footer-->
            </div>
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