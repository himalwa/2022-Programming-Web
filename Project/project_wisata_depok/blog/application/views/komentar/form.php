

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        
        <div class="card-body">
        <div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1>Form Input Komentar</h1>
<?php echo form_open("komentar/save") ?>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="isi" class="col-4 col-form-label">Isi</label> 
    <div class="col-8">
      <input id="isi" placeholder="Masukkan Komentar" name="isi" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="wisata_id" class="col-4 col-form-label">Wisata Id</label> 
    <div class="col-8">
      <select class="form-control" name="wisata_id" id="wisata_id">
        <?php
        include "config.php";
        $result = mysqli_query($connect, "SELECT * FROM tempat_wisata");
        while ($row = mysqli_fetch_array($result)) {?>
        <option value="<?php echo $row[0] ?>">
        <?php	echo $row[0] ?>
        </option>
        <?php } ?>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="users_id" class="col-4 col-form-label">User Id</label> 
    <div class="col-8">
      <select class="form-control" name="users_id" id="users_id">
        <?php
        include "config.php";
        $result = mysqli_query($connect, "SELECT * FROM users");
        while ($row = mysqli_fetch_array($result)) {?>
        <option value="<?php echo $row[0] ?>">
        <?php	echo $row[0] ?>
        </option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_rating_id" class="col-4 col-form-label">Nilai Rating Id</label> 
    <div class="col-8">
      <select class="form-control" name="nilai_rating_id" id="nilai_rating_id">
        <?php
        include "config.php";
        $result = mysqli_query($connect, "SELECT * FROM nilai_rating");
        while ($row = mysqli_fetch_array($result)) {?>
        <option value="<?php echo $row[0] ?>">
        <?php	echo $row[0] ?>
        </option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php echo form_close() ?>
</div>
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>