<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon/logo -->
    <link rel="icon" href="<?= base_url('assets/img/LogoB.png'); ?>" type="image/png">

    <title><?= $title ?? "" ;?></title>
    

    <!-- Custom fonts for this template -->
    <link href="<?=base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?=base_url('assets/');?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- SweetAlert -->
<script src="<?= base_url() ?>node_modules/sweetalert/dist/sweetalert.min.js"></script>

    <style>
     .fixed_header {
    table-layout: fixed;
    border-collapse: collapse;
    margin-top: 0px; /* Margin atas */
}

.fixed_header thead {
    background: black;
    color: #fff;
    display: table;
    width: 100%;
    table-layout: fixed;
    position: sticky;
    top: 0;
    z-index: 100;
}

.fixed_header tbody {
    display: block;
    width: 100%;
    overflow: auto;
    height: 500px; /* Sesuaikan tinggi tabel */
}

.fixed_header tbody tr {
    display: table;
    width: 100%;
    table-layout: fixed;
}

.fixed_header th, .fixed_header td {
    padding: 5px;
    text-align: left;
    min-width: 120px; /* Menambahkan lebar minimum untuk kolom */
}

.container {
    overflow-x: auto; /* Mengizinkan gulir horizontal */
    width: 100%;
    margin-top: 20px; /* Margin atas */
}






    </style>
    

</head>

<body id="page-top" class="hold-transition sidebar-mini layout-fixed">

<?php if ($this->session->flashdata('input')) { ?>
    <script>
        swal({
            title: "Berhasil Menambahkan",
            text: "Data Berhasil Ditambahkan",
            icon: "success"
        }).then(() => {
            <?php $this->session->unset_userdata('input'); ?>
        });
    </script>
<?php } ?>

<?php if ($this->session->flashdata('err')) { ?>
    <script>
        swal({
            title: "Data Gagal Ditambahkan",
            text: "Data Tidak Ditambahkan",
            icon: "error"
        }).then(() => {
            <?php $this->session->unset_userdata('err'); ?>
        });
    </script>
<?php } ?>

<?php if ($this->session->flashdata('delete')) { ?>
    <script>
        swal({
            title: "Berhasil Menghapus Data",
            text: "Data Berhasil Dihapus",
            icon: "success"
        }).then(() => {
            <?php $this->session->unset_userdata('delete'); ?>
        });
    </script>
<?php } ?>

<?php if ($this->session->flashdata('errdelete')) { ?>
    <script>
        swal({
            title: "Gagal Menghapus Data",
            text: "Data Tidak Terhapus",
            icon: "error"
        }).then(() => {
            <?php $this->session->unset_userdata('errdelete'); ?>
        });
    </script>
<?php } ?>

<?php if ($this->session->flashdata('update')) { ?>
    <script>
        swal({
            title: "Berhasil Update Data",
            text: "Data Berhasil DiUpdate",
            icon: "success"
        }).then(() => {
            <?php $this->session->unset_userdata('update'); ?>
        });
    </script>
<?php } ?>

<?php if ($this->session->flashdata('errupdate')) { ?>
    <script>
        swal({
            title: "Gagal Update Data",
            text: "Data Tidak Ter-Update",
            icon: "error"
        }).then(() => {
            <?php $this->session->unset_userdata('errupdate'); ?>
        });
    </script>
<?php } ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

    <?php $this->load->view('template/sidebar'); ?>

       <!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('template/header'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Peserta (Alternatif)</h1>
        <p class="mb-4">Berikut merupakan data Alternatif dari peserta LPM.</p>

        <div class="container">
            <button type="button" class="btn btn-primary mb-3 mr-2" data-toggle="modal" data-target="#tambah_peserta">
                <i class="fas fa-plus"></i> Tambah Data
            </button>
            <table class="table table-bordered fixed_header">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Usia</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tinggi Badan (cm)</th>
                        <th scope="col">Berat Badan (Kg)</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $id = 0;
                    foreach($peserta as $i):
                        $id++;
                        $id_peserta = $i['user_id'];
                        $nama = $i['nama'];
                        $usia = $i['usia'];
                        $pendidikan = $i['pendidikan']; 
                        $alamat = $i['alamat'];
                        $tinggi_badan = $i['tinggi_badan']; 
                        $berat_badan = $i['berat_badan'];
                    ?>
                    <tr>
                        <td><?=$id ?></td>
                        <td><?=$nama ?></td>
                        <td><?=$usia ?></td>
                        <td><?=$pendidikan ?></td>
                        <td><?=$alamat ?></td>
                        <td><?=$tinggi_badan ?></td>
                        <td><?=$berat_badan ?></td>
                        <td>
                            <div class="table-responsive">
                                <div class="table table-striped table-hover">
                                    <a href="" class="btn btn-primary d-inline-block" data-toggle="modal" data-target="#ubah_alternatif<?=$id_peserta?>">
                                        Edit <i class="nav-icon fas fa-edit"></i>
                                    </a>
                                    <a href="" class="btn btn-danger d-inline-block" data-toggle="modal" data-target="#hapus_alternatif<?=$id_peserta?>">
                                        Hapus <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- Modal Delete Data -->
                    <div class="modal fade" id="hapus_alternatif<?=$id_peserta?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Alternatif</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url();?>Dashboard/hapus_alternatif" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="hidden" name="user_id" value="<?=$id_peserta?>" />
                                                <p>Apakah Anda Yakin Ingin Menghapus Data?</i></b></p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger ripple" data-dismiss="modal">Tidak</button>
                                            <button type="submit" class="btn btn-success ripple save-category">Ya</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Ubah Data -->
                    <div class="modal fade" id="ubah_alternatif<?=$id_peserta?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Alternatif</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?=base_url();?>Dashboard/update_alternatif" enctype="multipart/form-data" method="POST">
                                        <input type="text" value="<?=$id_peserta?>" name="user_id" hidden>
                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?=$nama?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="usia">Usia</label>
                                            <input type="number" class="form-control" id="usia" name="usia" value="<?=$usia?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                            <select class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
                                                <option value="">Silahkan Pilih</option>
                                                <option value="SD" <?= ($pendidikan == 'SD') ? 'selected' : ''; ?>>SD</option>
                                                <option value="SMP" <?= ($pendidikan == 'SMP') ? 'selected' : ''; ?>>SMP</option>
                                                <option value="SMA" <?= ($pendidikan == 'SMA') ? 'selected' : ''; ?>>SMA</option>
                                                <option value="D1" <?= ($pendidikan == 'D1') ? 'selected' : ''; ?>>D1</option>
                                                <option value="D2" <?= ($pendidikan == 'D2') ? 'selected' : ''; ?>>D2</option>
                                                <option value="D3" <?= ($pendidikan == 'D3') ? 'selected' : ''; ?>>D3</option>
                                                <option value="D4" <?= ($pendidikan == 'D4') ? 'selected' : ''; ?>>D4</option>
                                                <option value="S1" <?= ($pendidikan == 'S1') ? 'selected' : ''; ?>>S1</option>
                                                <option value="S2" <?= ($pendidikan == 'S2') ? 'selected' : ''; ?>>S2</option>
                                                <option value="Profesor" <?= ($pendidikan == 'Profesor') ? 'selected' : ''; ?>>Profesor</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$alamat?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tinggi_badan">Tinggi Badan (cm)</label>
                                            <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan" value="<?=$tinggi_badan?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="berat_badan">Berat Badan</label>
                                            <input type="number" class="form-control" id="berat_badan" name="berat_badan" value="<?=$berat_badan?>" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php $this->load->view('template/footer_table'); ?>

</div>
<!-- End of Content Wrapper -->


    <!-- Modal Tambah Data -->
    <div class="modal fade" id="tambah_peserta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Alternatif Peserta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url(); ?>Dashboard/tambah_alternatif" enctype="multipart/form-data" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="usia">Usia</label>
                            <input type="number" class="form-control" id="usia" name="usia" required>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                            <select class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
                                <option value="">Silahkan Pilih</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="Profesor">Profesor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="tinggi_badan">Tinggi Badan (cm)</label>
                            <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan" required>
                        </div>
                        <div class="form-group">
                            <label for="berat_badan">Berat Badan</label>
                            <input type="number" class="form-control" id="berat_badan" name="berat_badan" required>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>



</html>