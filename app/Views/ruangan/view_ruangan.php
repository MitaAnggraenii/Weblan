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
                <h1>Data Ruangan</h1>
                <button type="button" class="btn btn-sm btn-success" data-target="#addModal" data-toggle="modal"> Tambah</button>
                <!-- <a href="Dokter/create" class="btn btn-success btn-lg active" role="button" aria-pressed="true"><i class="fa fa-plus"></i> Tambah Data</a> -->
                <br>
                    <table class="table table-sm table-striped" id="datadokter">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>ID Ruangan</th>
                                <th>Nama Ruangan</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($ruangan as $r => $ruangan) : ?>
                                <tr>
                                    <td scope="row"><?= $r + 1; ?></td>
                                    <td><?= $ruangan['kode_ruangan']; ?></td>
                                    <td><?= $ruangan['nama_ruangan']; ?></td>
                                    <td><?= $ruangan['harga']; ?></td>
                                    <td><?= $ruangan['status']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm btn-edit"  id="tombolUbah" data-target="#editModal" data-toggle="modal"
                                        data-id="<?= $ruangan['id_ruangan']; ?>"
                                        data-kode="<?= $ruangan['kode_ruangan']; ?>" 
                                        data-nama="<?= $ruangan['nama_ruangan']; ?>" 
                                        data-hrg="<?= $ruangan['harga']; ?>" 
                                        data-stat="<?= $ruangan['status']; ?>">  
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
<form action="/ruangan/save" method="post">
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Ruangan</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="col-md-10">
            <label>ID Ruangan</label>
            <input type="text" class="form-control" name="kode_ruangan">
        </div>

        <div class="col-md-10">
            <label>Nama ruangan</label>
            <input type="text" class="form-control" name="nama_ruangan">
        </div>

        <div class="col-md-10">
            <label>Harga</label>
            <input type="text" class="form-control" name="harga">
        </div>

        <div class="col-md-10">
            <label>Status</label>
            <input type="text" class="form-control" name="status">
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
        let hrg = $(this).data('hrg');
        let stat = $(this).data('stat');

        $("id_ruangan").val(id);
        $(".modal-body #kode_ruangan").val(kode);
        $("#nama_ruangan").val(nama);
        $("#harga").val(hrg);
        $("#status").val(stat);
    });
</script>


<?= $this->endSection('') ?>