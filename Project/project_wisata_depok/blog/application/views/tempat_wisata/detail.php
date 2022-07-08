
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
        <thead style="text-align: center">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Latlong</th>
                <th>Jenis Id</th>
                <th>Skor Rating</th>
                <th>Harga Tiket</th>
                <!-- <th>Foto 1</th>
                <th>Foto 2</th>
                <th>Foto 3</th> -->
                <th>Kecamatan Id</th>
                <th>Website</th>
                <th>Fasilitas</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td><?php echo $temp_wst -> id ?></td>
                <td><?php echo $temp_wst -> nama ?></td>
                <td><?php echo $temp_wst -> alamat ?></td>
                <td><?php echo $temp_wst -> latlong ?></td>
                <td><?php echo $temp_wst -> jenis_id ?></td>
                <td><?php echo $temp_wst -> skor_rating ?></td>
                <td><?php echo $temp_wst -> harga_tiket ?></td>

                <td><?php echo $temp_wst -> kecamatan_id ?></td>
                <td><?php echo $temp_wst -> website ?></td>
                <td><?php echo $temp_wst -> fasilitas ?></td>
            </tr>
                
        </tbody>
    </table>
    <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?= base_url()?>upload/photos/<?=$temp_wst->id?>.jpg" width="300"/>
                    <div class="mt-4">
                        <h4><?=$temp_wst->nama?></h4>
                        <p>Foto Wisata</p>
                        <?php echo $error;?>
                        <br/> <br/>
                        <?php echo form_open_multipart('tempat_wisata/upload');?>
                        <input type="file" name="foto" size="300"/>
                        <input type="hidden" name="idtempat_wisata" value="<?=$temp_wst->id?>"/>
                        <br/> <br/>
                        <input type="submit" value="Upload Foto" class="btn btn-primary"/>
</form>
                    </div>
                </div>
            </div>
    <br>
</body>
</html>
        </div>
        <!-- /.card-body -->

      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>