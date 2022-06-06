<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
    <script>
        function hapusMatakuliah(pesan) {
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
    <h3 style="text-align: center">Mata Kuliah</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($matakuliah as $mtk) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $mtk -> nama ?></td>
                <td><?php echo $mtk -> sks ?></td>
                <td><?php echo $mtk -> kode ?></td>
                <td>
                    <a href= <?php echo base_url("index.php/matakuliah/edit/$mtk->id") ?> 
                    class="btn btn-success btn-lg active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/matakuliah/delete/$mtk->id") ?> 
                    class="btn btn-danger btn-lg active" onclick="return hapusMatakuliah('Anda yakin ingin menghapus <?php echo $mtk-> nama ?> ?')">Hapus</a>
                
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href= <?php echo base_url("index.php/matakuliah/form") ?> class="btn btn-primary btn-lg active" >Tambah</a>
</body>
</html>