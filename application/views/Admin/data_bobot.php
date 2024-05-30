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
        <h1 class="h3 mb-2 text-gray-800">Tabel Bobot Kriteria</h1>
        <p class="mb-4">Pengambil keputusan memberi bobot preferensi dari setiap kriteria dengan masing-masing jenisnya (keuntungan/benefit atau biaya/cost):</p>

        <div class="container">
            <table class="table table-bordered fixed_header">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Simbol</th>
                        <th scope="col">Kriteria</th>
                        <th scope="col">Bobot</th>
                        <th scope="col">Atribut</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $id = 0;
                    foreach($bobot as $i):
                        $id++;
                        $id_criteria = $i['id_criteria'];
                        $criteria = $i['criteria'];
                        $weight = $i['weight'];
                        $attribute = $i['attribute']; 
                    ?>
                    <tr>
                        <td><?=$id ?></td>
                        <td>C<?=$id_criteria ?></td>
                        <td><?=$criteria ?></td>
                        <td><?=$weight ?></td>
                        <td><?=$attribute ?></td>
                        <td>
                            <div class="table-responsive">
                                <div class="table table-striped table-hover">
                                    <a href="" class="btn btn-primary d-inline-block" data-toggle="modal" data-target="#ubah_bobot<?=$id_criteria?>">
                                        Edit <i class="nav-icon fas fa-edit"></i>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal Ubah Data -->
                    <div class="modal fade" id="ubah_bobot<?=$id_criteria?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Bobot dan Kriteria</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?=base_url();?>Dashboard/update_bobot" enctype="multipart/form-data" method="POST">
                                        <input type="text" value="<?=$id_criteria?>" name="id_criteria" hidden>
                                        <div class="form-group">
                                            <label for="criteria">Kriteria</label>
                                            <input type="text" class="form-control" id="criteria" name="criteria" value="<?=$criteria?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="weight">Weight</label>
                                            <input type="text" class="form-control" id="weight" name="weight" value="<?=$weight?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="attribute">Attribute</label>
                                            <select class="form-control" id="attribute" name="attribute" required>
                                                <option value="benefit" <?= ($attribute == 'benefit') ? 'selected' : ''; ?>>Benefit</option>
                                                <option value="cost" <?= ($attribute == 'cost') ? 'selected' : ''; ?>>Cost</option>
                                            </select>
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