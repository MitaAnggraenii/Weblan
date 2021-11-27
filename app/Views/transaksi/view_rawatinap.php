<?= $this->extend('layout/main'); ?>
<?= $this->extend('layout/menu'); ?>
<?= $this->section('isi') ?>



<script>
    function ambil(kode_dokter, nama_dokter)
    {
        $('#id_dokter'). val(kode_dokter);
        $('#nama_dokter'). val(nama_dokter);
        $('#addbtndokter'). modal('hide');
    }
    function ambilpasien(kode_pasien, nama_pasien)
    {
        $('#id_pasien'). val(kode_pasien);
        $('#nama_pasien'). val(nama_pasien);
        $('#addbtnpasien'). modal('hide');
    }
    function ambilruangan(kode_ruangan, nama_ruangan)
    {
        $('#id_ruangan'). val(kode_ruangan);
        $('#nama_ruangan'). val(nama_ruangan);
        $('#addbtnruangan'). modal('hide');
    }
</script>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable, minimal-ui">
    <title>Form Rawat Inap</title>

    <meta content="Admin Dashboard" name="description"/>
    <meta content="Mannatthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="shorcut icon" href="<?= base_url() ?>/assets/images/favicon.ico">
    <link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/css/icon.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet" type="text/css">
</head>


<form action="/rawatinap/simpan" method="post">

<div class="row">
    <div class="col-md">
        <div class="card m-b-30 card-body">
            <center><h2 class="card-tittle font-30 mt-0">Form Rawat Inap</h2></center><br>
            <p class="card-text">
                
<div class= "form-group row">
    <!-- <div class= "input-group col-10">
        <input type="text" class="from-control" name="idrawat" id="idrawat"
        placeholder="Masukkan ID Rawat" aria-label="Search for...">
    </div>     -->

    <div class="col-md-3">
            <input type="text" class="form-control" name="idrawat" name="idrawat" id="idrawat"
        placeholder="Masukkan ID Rawat">
        </div>
</div>



<div class="form-group row">
    <div class="input-group mt-2 col-13">
        <input type="text" id="id_dokter" name="id_dokter" class="form-control" placeholder="Pilih Dokter">
            <span class="input-group-append">
            <input type="text" id="nama_dokter" class="form-control" placeholder="Nama Dokter">
            </span>
            <span class="input-group-append">
                <button class="btn btn-primary" data-target="#addbtndokter" 
                data-toggle="modal" type="button">Dokter</button>
            </span>
    </div>
</div>


<div class="form-group row">
    <div class="input-group mt-1 col-13">
        <input type="text" id="id_pasien" name="id_pasien" class="form-control" placeholder="Pilih Pasien" aria-label="Search for...">
            <span class="input-group-append">
            <input type="text" id="nama_pasien" class="form-control" placeholder="Nama Pasien" aria-label="Search for...">
            </span>
            <span class="input-group-append">
                <button class="btn btn-primary" data-target="#addbtnpasien" data-toggle="modal" 
                type="button">Pasien</button>
            </span>
    </div>
</div>

<div class="form-group row">
    <div class="input-group mt-1 col-13">
        <input type="text" id="id_ruangan" name="id_ruangan" class="form-control" placeholder="Pilih Ruangan" aria-label="Search for...">
            <span class="input-group-append">
            <input type="text" id="nama_ruangan" class="form-control" placeholder="Pilih Ruangan" aria-label="Search for...">
            </span>
            <span class="input-group-append">
                <button class="btn btn-primary" data-target="#addbtnruangan" data-toggle="modal" type="button">Ruangan</button>
            </span>
    </div>
</div>



<div class="form-group row">
    <label for="example-date-input" class="col-sm-4 col-form-label">Tanggal Rawat</label>
    <div class="col-sm-6">
        <input class="form-control" name="tglmasuk" type="date" value="2021-11-25" id="example-date-input">
    </div>
</div>

<div class="form-group row">
    <label for="example-date-input" name="catatanmedis"class="col-sm-4 col-form-label">Rekomendasi Dokter</label>
    <div class="col-sm-8">
<textarea name="catatanmedis" cols="60" rows="7">
    </textarea>

        </div>
</div>

        </p>
        <button class="btn btn-primary" type="submit">Simpan</button>

            </div>
</div>
        
        


<!-- btn dokter -->

<div class="modal fade bs-example-modal-lg" id="addbtndokter" tabindex="-1" role="dialog" arial-labelledby= "myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <!-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button> -->
    <center>
        
        
        <!-- <button type="button" class="close" data-dismis="modal" aria-label="Close">&times;</button> -->
            <h4 class="modal-tittle" id="myModalLabel" >Pilih Data Dokter</h4><br>
        </center>
            
        
        
      </div>
      <div class="modal-body">
        

<!-- <div class="modal fade bs-example-modal-lg" id="addbtndokter" tabindex="-1" role="dialog" arial-labelledby= "myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismis="modal" aria-label="Close"><span aria-hidden="true">&times;
            <h4 class="modal-tittle" id="myModalLabel" >Cari Data Dokter</h4><br> -->
            <div class="box-body table table_responsive">
            <table class="table table-bordered table-striped table-horver" id="datadokter">
                <thead>
                    <tr>
                        <th width="5">No</th>
                        <th>ID Dokter</th>
                        <th>Nama Dokter</th>
                        <th>No. HP Dokter</th>

                        <th>Aksi</th>
                    </tr>
                </thead>

            <tbody>
            <?php $no=1;
                foreach($dokter as $r){
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $r['kode_dokter'] ?></td>
                    <td><?php echo $r['nama_dokter'] ?></td>
                    <td><?php echo $r['nohp_dokter'] ?></td>
                
                    <td>
                        <button class="btn btn-primary btn-xs" type="button" 
                        onClick="return ambil('<?php echo $r["kode_dokter"]?>','<?php echo  $r["nama_dokter"]?>')">
                        <span class='glyphicon glyphicon-check'></span>Pilih</button>
                    </td>
                </tr>
                    <?php $no++; } ?>
                    </tbody>
                    </table>
                </div>
                <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
            </div>
        </div>
    </div>
</div>
                
<!--btn pasien-->

<div class="modal fade" id="addbtnpasien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-tittle" id="exampleModalLable">Pilih Data Pasien</h5>
            </div>
            <div class="modal-body">

            <table class="table table-sm table-stripped" id=datadokter>
                <thead>
                    <th>No </th>
                    <th>ID Pasien </th>
                    <th>Nama Pasien </th>
                    <th>No HP </th>
                    <th>Aksi </th>
                </thead>
                <tbody>
                <?php $no=0; foreach($pasien as $row) : $no++ ?>
                <tr>
                    <td> <?= $no; ?> </td>
                    <td> <?= $row['kode_pasien']; ?> </td>
                    <td> <?= $row['nama_pasien']; ?> </td>
                    <td> <?= $row['nohp_pasien']; ?> </td>

                    <td>
                        <button class="btn btn-primary btn-xs" type="button" 
                        onClick="return ambilpasien('<?php echo $row["kode_pasien"]?>','<?php echo  $row["nama_pasien"]?>')">
                        <span class='glyphicon glyphicon-check'></span>Pilih</button>
                    </td>
                </tr>
<?php endforeach ;?>
                </tbody>
            </p>
        </table>
    
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


    <!--btn ruangan-->

<div class="modal fade" id="addbtnruangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-tittle" id="exampleModalLable">Pilih Data Ruangan</h5>
            </div>
            <div class="modal-body">

            <table class="table table-sm table-stripped" id=datadokter>
                <thead>
                    <th>No </th>
                    <th>ID Ruangan </th>
                    <th>Nama Ruangan </th>
                    <th>Harga Ruangan </th>
                    <th>Action </th>
                </thead>
                <tbody>
                <?php $no=0; foreach($ruangan as $row) : $no++ ?>
                <tr>
                    <td> <?= $no; ?> </td>
                    <td> <?= $row['kode_ruangan']; ?> </td>
                    <td> <?= $row['nama_ruangan']; ?> </td>
                    <td> <?= $row['harga']; ?> </td>

                    <td>
                        <button class="btn btn-primary btn-xs" type="button" 
                        onClick="return ambilruangan('<?php echo $row["kode_ruangan"]?>','<?php echo  $row["nama_ruangan"]?>')">
                        <span class='glyphicon glyphicon-check'></span>Pilih</button>
                    </td>
                </tr>
<?php endforeach ;?>
                </tbody>
            </p>
        </table>
    
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</form>


    <!--jQuery-->
    <script src="<?= base_url()?>/assets/js/jquery.min.js"></script>
    <script src="<?= base_url()?>/assets/js/pooper.min.js"></script>
    <script src="<?= base_url()?>/assets/js/boostrap.min.js"></script>
    <script src="<?= base_url()?>/assets/js/mordernizr.min.js"></script>
    <script src="<?= base_url()?>/assets/js/detect.min.js"></script>
    <script src="<?= base_url()?>/assets/js/fastclick.min.js"></script>
    <script src="<?= base_url()?>/assets/js/jquery.slimscroll.js"></script>
    <script src="<?= base_url()?>/assets/js/jquery.blockUI.js"></script>
    <script src="<?= base_url()?>/assets/js/waves.js"></script>
    <script src="<?= base_url()?>/assets/js/jquery.nicescroll.js"></script>
    <script src="<?= base_url()?>/assets/js/jquery.scrollTo.js"></script>

    <!--App js-->
    <script src="<?= base_url()?>/assets/js/app.js"></script>

    
</html>

<script>
    $('.btn-dokter').on('click', fuction){
        $('#addbtndokter').modal('show');
    } );

    $('.btn-pasien').on('click', fuction){
        $('#addbtnpasien').modal('show');
    } );

    $('.btn-ruangan').on('click', fuction){
        $('#addbtnruangan').modal('show');
    } );

</scrpt>

<?= $this->endSection('') ?>