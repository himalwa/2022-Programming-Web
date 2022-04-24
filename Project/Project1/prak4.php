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
            <h1>Praktikum 4</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Praktikum</a></li>
              <li class="breadcrumb-item active">Praktikum 4</li>
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
                <h3 class="card-title">Program Menghitung Keliling dan Luas Persegi Panjang</h3>

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
              <html>
<head><title>Persegi Panjang</title></head>
<body>
<form method="post">
<table border=0>
<tr>
    <td>Panjang Persegi Panjang
    <td>:
    <td><input type="text" name="panjang"><br>
</tr>
<tr>
    <td>Lebar Persegi Panjang
    <td>:
    <td><input type="text" name="lebar"><br>
</tr>
<tr>
    <td><input type="submit" name="input-data" value=Input></td>     
</tr>
</table>
</form>
</body>
</html>
<?php
if (isset ($_POST["input-data"]))
{
$panjang=$_POST["panjang"];
$lebar=$_POST["lebar"];
$luas= $panjang*$lebar;
$keliling=2*($panjang+$lebar);
echo "Luas : $luas";
echo "<br/>";
echo "Keliling : $keliling";
}
?>
              </div>
              <!-- /.card-body -->
              
            </div>
</body>
</html>
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