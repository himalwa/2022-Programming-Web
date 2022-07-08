
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
    <title>Komentar</title>
    <script>
        function hapusKomentar(pesan) {
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
    <h3 style="text-align: center">Komentar</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Isi</th>
                <th>User Id</th>
                <th>Wisata Id</th>
                <th>Nilai Rating Id</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($komentar as $komen) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $komen -> tanggal ?></td>
                <td><?php echo $komen -> isi ?></td>
                <td><?php echo $komen -> users_id ?></td>
                <td><?php echo $komen -> wisata_id ?></td>
                <td><?php echo $komen -> nilai_rating_id ?></td>
                <td>
                    <a href= <?php echo base_url("index.php/komentar/edit/$komen->id") ?> 
                    class="btn btn-success btn-lg active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/komentar/delete/$komen->id") ?> 
                    class="btn btn-danger btn-lg active" onclick="return hapusKomentar('Anda yakin ingin menghapus <?php echo $komen-> tanggal ?> ?')">Hapus</a>
                
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href= <?php echo base_url("index.php/komentar/form") ?> class="btn btn-primary btn-lg active" >Tambah</a>
</body>
</html>
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>