<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        
        </div>
        <div class="card-body">
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Wisata</title>
    <script>
        function hapusJenis_wisata(pesan) {
            if(confirm(pesan)){
                return true;
            }else {
                return false;
            }
        }
    </script>
</head>
<?php
$username = $this->session->userdata('username');
if ($username) {
    echo "<h1>Welcome $username !</h1>";
}
?>
<hr/>
<body>
    <h3 style="text-align: center">Jenis Wisata</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($jenis_wisata as $jen_wst) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $jen_wst -> nama ?></td>
                <td>
                    <a href= <?php echo base_url("index.php/jenis_wisata/edit/$jen_wst->id") ?> 
                    class="btn btn-success btn-lg active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/jenis_wisata/delete/$jen_wst->id") ?> 
                    class="btn btn-danger btn-lg active" onclick="return hapusJenis_wisata('Anda yakin ingin menghapus <?php echo $jen_wst-> nama ?> ?')">Hapus</a>
                
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
        <br>
    </table>
    <br>
    <a href= <?php echo base_url("index.php/jenis_wisata/form") ?> class="btn btn-primary btn-lg active" >Tambah</a>
</body>
</html>
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
  
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>