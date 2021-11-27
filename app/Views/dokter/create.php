<?= $this->extend('layout/main'); ?>
<?= $this->extend('layout/menu'); ?>
<?= $this->section('isi') ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">


    <div class="container">
        <div class="card">
            <div class="card-header">
              <h2>Tambah Data Dokter</h2>
            </div>
            <div class="card-body">
                 <form action="Dokter/tambahData" method="POST">
                    <div class="row">
                        <div class="col-md-10">
                     
                            <div class="form-group">
                                <label for="kode_dokter">ID Dokter</label>
                                <input type="text"  class="form-control <?= ($validation->hasError('kode_dokter')) ? 'is-invalid' : ''; ?>" id="kode_dokter" name="kode_dokter" value="<?= old('kode_dokter') ;?>">
                                <?php if ($validation->hasError('kode_dokter')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("kode_dokter"); ?>
                                  </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="nama_dokter">Nama Dokter</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama_dokter')) ? 'is-invalid' : ''; ?>" id="nama_dokter" name="nama_dokter" value="<?= old('nama_dokter') ;?>">
                                <?php if ($validation->hasError('nama_dokter')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("nama_dokter"); ?>
                                  </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="spesialis">Spesialis</label>
                                <input type="text" class="form-control <?= ($validation->hasError('spesialis')) ? 'is-invalid' : ''; ?>" id="spesialis" name="spesialis" value="<?= old('spesialis') ;?>">
                                <?php if ($validation->hasError('spesialis')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("spesialis"); ?>
                                  </div>
                                <?php endif; ?>
                              </div>
                            <div class="form-group">
                                <label for="nohp_dokter">No. HP</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nohp_dokter')) ? 'is-invalid' : ''; ?>" id="nohp_dokter" name="nohp_dokter" value="<?= old('nohp_dokter') ;?>">
                                <?php if ($validation->hasError('nohp_dokter')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("nohp_dokter"); ?>
                                  </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="alamat_dokter">Alamat</label>
                                <input type="text" class="form-control <?= ($validation->hasError('alamat_dokter')) ? 'is-invalid' : ''; ?>" id="alamat_dokter" name="alamat_dokter" value="<?= old('alamat_dokter') ;?>">
                                <?php if ($validation->hasError('alamat_dokter')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("alamat_dokter"); ?>
                                  </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="jadwal_praktek">Jadwal Praktek</label>
                                <textarea name="jadwal_praktek" id="jadwal_praktek" class="form-control <?= ($validation->hasError('jadwal_praktek')) ? 'is-invalid' : ''; ?>">
                              <?= old('jadwal_praktek'); ?>
                            </textarea>
                                <?php if ($validation->hasError('jadwal_praktek')) : ?>
                                  <div class="invalid-feedback">
                                    <?= $validation->getError("jadwal_praktek"); ?>
                                  </div>
                                <?php endif; ?>
                            </div>

                            <a href="tambahData" class="btn btn-success btn-lg active" role="button" aria-pressed="true"><i class="fa fa-plane"></i> Simpan</a>
                            <!-- <button type="button" class="btn btn-success btn-sm"><i class="fa fa-paper-plane"></i> Simpan</button> -->
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    
     
  </div>
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<?= $this->endSection(); ?>




