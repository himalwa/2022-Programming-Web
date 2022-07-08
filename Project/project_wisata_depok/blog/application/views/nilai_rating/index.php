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
    <title>Nilai Rating</title>
    <script>
        function hapusNilai_rating(pesan) {
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
    <h3 style="text-align: center">Nilai Rating</h3>
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
            foreach ($nilai_rating as $n_rating) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $n_rating -> nama ?></td>


                <td>
                    <a href= <?php echo base_url("index.php/nilai_rating/edit/$n_rating->id") ?> 
                    class="btn btn-success btn-lg active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/nilai_rating/delete/$n_rating->id") ?> 
                    class="btn btn-danger btn-lg active" onclick="return hapusNilai_rating('Anda yakin ingin menghapus <?php echo $n_rating-> nama ?> ?')">Hapus</a>
                
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href= <?php echo base_url("index.php/nilai_rating/form") ?> class="btn btn-primary btn-lg active" >Tambah</a>
</body>
</html>
        </div>
        <!-- /.card-body -->

      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>