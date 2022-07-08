

<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

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
        <div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1>Form Input Tempat Wisata</h1>
<?php echo form_open("tempat_wisata/save") ?>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukkan tempat wisata" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="latlong" class="col-4 col-form-label">Latlong</label> 
    <div class="col-8">
      <input id="latlong" name="latlong" placeholder="Masukkan koordinat latitude & longitude" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="harga_tiket" class="col-4 col-form-label">Harga Tiket</label> 
    <div class="col-8">
      <input id="harga_tiket" name="harga_tiket" placeholder="Masukkan harga" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="website" class="col-4 col-form-label">Website</label> 
    <div class="col-8">
      <input id="website" name="website" placeholder="Masukkan alamat website" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="fasilitas" class="col-4 col-form-label">Fasilitas</label> 
    <div class="col-8">
      <textarea id="fasilitas" name="fasilitas" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  <?php echo form_close() ?>
</div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>