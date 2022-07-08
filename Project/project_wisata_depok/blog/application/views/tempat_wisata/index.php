
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        
        <div class="card-body">
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempat Wisata</title>
    <script>
        function hapusTempat_wisata(pesan) {
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
    <h3 style="text-align: center">Tempat Wisata</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Latlong</th>

                <th>Website</th>
                <th>Fasilitas</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($tempat_wisata as $temp_wst) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $temp_wst -> nama ?></td>
                <td><?php echo $temp_wst -> alamat ?></td>
                <td><?php echo $temp_wst -> latlong ?></td>

                <td><?php echo $temp_wst -> website ?></td>
                <td><?php echo $temp_wst -> fasilitas ?></td>
                <td>
                    <a href= <?php echo base_url("index.php/tempat_wisata/edit/$temp_wst->id") ?> 
                    class="btn btn-success btn-lg active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/tempat_wisata/delete/$temp_wst->id") ?> 
                    class="btn btn-danger btn-lg active" onclick="return hapusTempat_wisata('Anda yakin ingin menghapus <?php echo $temp_wst-> nama ?> ?')">Hapus</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/tempat_wisata/detail/$temp_wst->id") ?> 
                    class="btn btn-primary btn-lg active" >Detail</a>
                
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href= <?php echo base_url("index.php/tempat_wisata/form") ?> class="btn btn-primary btn-lg active" >Tambah</a>
</body>
</html>
        </div>
        <!-- /.card-body -->

      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>