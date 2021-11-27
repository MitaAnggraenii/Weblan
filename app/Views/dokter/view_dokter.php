<?= $this->extend('layout/main'); ?>
<?= $this->extend('layout/menu'); ?>
<?= $this->section('isi') ?>

<head>
    <!-- DataTables -->
    <!-- <link href="<?= base_url() ?>/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" /> -->
        <!-- Required datatable js -->
        <!-- <script src="<?= base_url() ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
         <script src="<?= base_url() ?>/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script> -->
</head>

<?php echo (session()->getFlashdata('pesan')) ?>
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h1>Data Dokter</h1>
                <button type="button" class="btn btn-sm btn-success" data-target="#addModal" data-toggle="modal"> <i class="fa fa-plus"></i> Tambah</button>
                <!-- <a href="Dokter/create" class="btn btn-success btn-lg active" role="button" aria-pressed="true"><i class="fa fa-plus"></i> Tambah Data</a> -->
                <br>
                    <table class="table table-sm table-striped" id="datadokter">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>ID Dokter</th>
                                <th>Nama Dokter</th>
                                <th>Spesialis</th>
                                <th>No. Hp</th>
                                <th>Alamat</th>
                                <th>Jadwal Praktek</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($dokter as $i => $dokter) : ?>
                                <tr>
                                    <td scope="row"><?= $i + 1; ?></td>
                                    <td><?= $dokter['kode_dokter']; ?></td>
                                    <td><?= $dokter['nama_dokter']; ?></td>
                                    <td><?= $dokter['spesialis']; ?></td>
                                    <td><?= $dokter['nohp_dokter']; ?></td>
                                    <td><?= $dokter['alamat_dokter']; ?></td>
                                    <td><?= $dokter['jadwal_praktek']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm btn-edit"  id="tombolUbah" data-target="#editModal" data-toggle="modal"
                                        data-id="<?= $dokter['id_dokter']; ?>"
                                        data-kode="<?= $dokter['kode_dokter']; ?>" 
                                        data-nama="<?= $dokter['nama_dokter']; ?>" 
                                        data-spesialis="<?= $dokter['spesialis']; ?>" 
                                        data-nohp="<?= $dokter['nohp_dokter']; ?>" 
                                        data-alamat="<?= $dokter['alamat_dokter']; ?>" 
                                        data-jadwal="<?= $dokter['jadwal_praktek']; ?>">    
                                        <i class="fa fa-edit"></i></button>                                        

                                        <form action="dokter/<?= $dokter['id_dokter']; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="delete">
                                            <button type="submit" class="btn btn-danger btn-sm btn-delete" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach ;?>
                        </tbody>
                    </p>
                </table>
        </div>
    </div>
    </div>
    </div>

<!-- Modal Tambah -->
<form action="/dokter/save" method="post">
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Dokter</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="col-md-10">
            <label>ID Dokter</label>
            <input type="text" class="form-control" name="kode_dokter">
        </div>

        <div class="col-md-10">
            <label>Nama Dokter</label>
            <input type="text" class="form-control" name="nama_dokter">
        </div>

        <div class="col-md-10">
            <label>Spesialis</label>
            <input type="text" class="form-control" name="spesialis">
        </div>

        <div class="col-md-10">
            <label>No HP</label>
            <input type="text" class="form-control" name="nohp_dokter">
        </div>

        <div class="col-md-10">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat_dokter">
        </div>

        <div class="col-md-10">
            <label>Jadwal Praktek</label>
            <textarea name="jadwal_praktek" id="jadwal_praktek" cols="5" rows="3" class="form-control"></textarea>
            <!-- <input type="text" class="form-control" name="jadwal_praktek"> -->
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- Modal Edit -->
<form action="/dokter/edit" method="post">
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Dokter</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        <?php
            $id_dokter= $dokter['id_dokter']; 
            // $query_edit = mysqli_query($koneksi, "SELECT * FROM mhs WHERE id_dokter='$id_dokter'");
            // while ($row = mysqli_fetch_array($query_edit))  
       ?>
            <input type="hidden" name="id_dokter" id="id_dokter" value="<?= (old('id_dokter')) ? old('id_dokter') : $dokter['id_dokter'];?>">

            <div class="form-group">
                <label for="kode_dokter">ID Dokter</label>
                <input type="text" class="form-control" name="kode_dokter" id="kode_dokter" value="<?= (old('kode_dokter')) ? old('kode_dokter') : $dokter['kode_dokter'];?>">
            </div>

            <div class="form-group">
                <label for="nama_dokter">Nama Dokter</label>
                <input type="text" class="form-control" name="nama_dokter" id="nama_dokter" value="<?= (old('nama_dokter')) ? old('nama_dokter') : $dokter['nama_dokter'];?>">
            </div>

            <div class="form-group">
                <label for="spesialis">Spesialis</label>
                <input type="text" class="form-control" name="spesialis" id="spesialis" value="<?= (old('spesialis')) ? old('spesialis') : $dokter['spesialis'];?>">
            </div>

            <div class="form-group">
                <label for="nohp_dokter">No HP</label>
                <input type="text" class="form-control" name="nohp_dokter" id="nohp_dokter" value="<?= (old('nohp_dokter')) ? old('nohp_dokter') : $dokter['nohp_dokter'];?>">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat_dokter" id="alamat_dokter" value="<?= (old('alamat_dokter')) ? old('alamat_dokter') : $dokter['alamat_dokter'];?>">
            </div>            
            
            <div class="form-group">
                <label for="jadwal_praktek">Jadwal Praktek</label>
                <textarea name="jadwal_praktek" id="jadwal_praktek" cols="5" rows="3" class="form-control" id="jadwal_praktek"><?= (old('jadwal_praktek')) ? old('jadwal_praktek') : $dokter['jadwal_praktek'];?></textarea>
                <!-- <input type="text" class="form-control" name="jadwal_praktek"> -->
            </div>

        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>

<script>
    $(document).on("click", "#tombolUbah", function() {
        let id = $(this).data('id');
        let kode = $(this).data('kode');
        let nama = $(this).data('nama');
        let spes = $(this).data('spes');
        let nohp = $(this).data('nohp');
        let alamat = $(this).data('alamat');
        let jadwal = $(this).data('jadwal');

        $("id_dokter").val(id);
        $(".modal-body #kode_dokter").val(kode);
        $("#nama_dokter").val(nama);
        $("#spesialis").val(spes);
        $("#nohp_dokter").val(nohp);
        $("#alamat_dokter").val(alamat);
        $("#jadwal_praktek").val(jadwal);
    });
</script>

<!-- <script>
    $('.btn-edit').on('click',function() {
        const kode = $(this).data('kode');
        const nama = $(this).data('nama');
        const spes = $(this).data('spes');
        const nohp = $(this).data('nohp');
        const alamat = $(this).data('alamat');
        const jadwal = $(this).data('jadwal');

        $('.kode_dokter').val(kode);
        $('.nama_dokter').val(nama);
        $('.spesialis').val(spes);
        $('.nohp_dokter').val(nohp);
        $('.alamat_dokter').val(alamat);
        $('.jadwal_praktek').val(jadwal).trigger('change');


        $('#editModal').modal('show');
    } );
</script> -->

<!-- <script>
    $(document).ready(function() {
        $('$datadokter').DataTable();
    } );
</script> -->

<?= $this->endSection('') ?>