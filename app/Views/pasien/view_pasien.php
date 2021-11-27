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

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h1>Data Pasien</h1>
                <button type="button" class="btn btn-sm btn-success" data-target="#addModal" data-toggle="modal"> Tambah</button>
                <!-- <a href="Dokter/create" class="btn btn-success btn-lg active" role="button" aria-pressed="true"><i class="fa fa-plus"></i> Tambah Data</a> -->
                <br>
                    <table class="table table-sm table-striped" id="datapasien">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>ID Pasien</th>
                                <th>Nama Pasien</th>
                                <th>Alamat</th>
                                <th>No. Ruangan</th>
                                <th>No. Hp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($pasien as $p => $pasien) : ?>
                                <tr>
                                    <td scope="row"><?= $p + 1; ?></td>
                                    <td><?= $pasien['kode_pasien']; ?></td>
                                    <td><?= $pasien['nama_pasien']; ?></td>
                                    <td><?= $pasien['alamat_pasien']; ?></td>
                                    <td><?= $pasien['no_rm_pasien']; ?></td>
                                    <td><?= $pasien['nohp_pasien']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm btn-edit"  id="tombolUbah" data-target="#editModal" data-toggle="modal"
                                        data-id="<?= $pasien['id_pasien']; ?>"
                                        data-kode="<?= $pasien['kode_pasien']; ?>" 
                                        data-nama="<?= $pasien['nama_pasien']; ?>" 
                                        data-alamat="<?= $pasien['alamat_pasien']; ?>" 
                                        data-norm="<?= $pasien['no_rm_pasien']; ?>" 
                                        data-nohp="<?= $pasien['nohp_pasien']; ?>" >    
                                        <i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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
<form action="/pasien/save" method="post">
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pasien</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="col-md-10">
            <label>ID Pasien</label>
            <input type="text" class="form-control" name="kode_pasien">
        </div>

        <div class="col-md-10">
            <label>Nama Pasien</label>
            <input type="text" class="form-control" name="nama_pasien">
        </div>

        <div class="col-md-10">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat_pasien">
        </div>

        <div class="col-md-10">
            <label>No Ruangan</label>
            <input type="text" class="form-control" name="no_rm_pasien">
        </div>

        <div class="col-md-10">
            <label>No HP</label>
            <input type="text" class="form-control" name="nohp_pasien">
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
<form action="/pasien/edit" method="post">
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Pasien</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post"><?php
            $id_pasien= $pasien['id_pasien']; 
            // $query_edit = mysqli_query($koneksi, "SELECT * FROM mhs WHERE id_dokter='$id_dokter'");
            // while ($row = mysqli_fetch_array($query_edit))  
       ?>
        
            <input type="hidden" name="id_pasien" id="id_pasien" value="<?= (old('id_pasien')) ? old('id_pasien') : $pasien['id_pasien'];?>">

            <div class="form-group">
                <label for="kode_pasien">ID pasien</label>
                <input type="text" class="form-control" name="kode_pasien" id="kode_pasien" value="<?= (old('kode_pasien')) ? old('kode_pasien') : $pasien['kode_pasien'];?>">
            </div>

            <div class="form-group">
                <label for="nama_pasien">Nama pasien</label>
                <input type="text" class="form-control" name="nama_pasien" id="nama_pasien" value="<?= (old('nama_pasien')) ? old('nama_pasien') : $pasien['nama_pasien'];?>">
            </div>

            <div class="form-group">
                <label for="alamat_pasien">Alamat</label>
                <input type="text" class="form-control" name="alamat_pasien" id="alamat_pasien" value="<?= (old('alamat_pasien')) ? old('alamat_pasien') : $pasien['alamat_pasien'];?>">
            </div>  

            <div class="form-group">
                <label for="no_rom_pasien">No Ruangan</label>
                <input type="text" class="form-control" name="no_rm_pasien" id="no_rm_pasien" value="<?= (old('no_rm_pasien')) ? old('no_rm_pasien') : $pasien['no_rm_pasien'];?>">
            </div>

            <div class="form-group">
                <label for="nohp_pasien">No HP</label>
                <input type="text" class="form-control" name="nohp_pasien" id="nohp_pasien" value="<?= (old('nohp_pasien')) ? old('nohp_pasien') : $pasien['nohp_pasien'];?>">
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
        let alamat = $(this).data('alamat');
        let norm = $(this).data('norm');
        let nohp = $(this).data('nohp');

        $("id_pasien").val(id);
        $(".modal-body #kode_pasien").val(kode);
        $("#nama_pasien").val(nama);
        $("#alamat_pasien").val(alamat);
        $("#no_rm_pasien").val(norm);
        $("#nohp_pasien").val(nohp);
        
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