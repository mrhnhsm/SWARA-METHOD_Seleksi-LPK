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
            text: "Nilai Berhasil Ditambahkan",
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
            text: "Nilai Tidak Ditambahkan",
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
        <h1 class="h3 mb-2 text-gray-800">Tabel Matriks Keputusan (X) & Ternormalisasi (R)</h1>
        <p class="mb-4">Melakukan perhitungan normalisasi untuk mendapatkan matriks nilai ternormalisasi (R), dengan ketentuan : Untuk normalisai nilai, jika faktor/attribute kriteria bertipe cost maka digunakan rumusan: Rij = ( min{Xij} / Xij) sedangkan jika faktor/attribute kriteria bertipe benefit maka digunakan rumusan: Rij = ( Xij/max{Xij} )</p>

        <div class="container">
            <h4 class=" text-gray-800">Matrik Keputusan(X)</h4>
            <table class="table table-bordered fixed_header">
                <thead class="thead-dark">
                <tr>
                    <th colspan='2'>Alternatif</th>
                    <th colspan='6'>Kriteria</th>
                </tr>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">C1</th>
                        <th scope="col">C2</th>
                        <th scope="col">C3</th>
                        <th scope="col">C4</th>
                        <th scope="col">C5</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $id = 0;
                    foreach($evaluations as $i):
                        $id++;
                        $id_alternative = $i->id_alternative;
                        $nama = $i->nama;
                        $c1 = round($i->C1, 2);
                        $c2 = round($i->C2, 2);
                        $c3 = round($i->C3, 2);
                        $c4 = round($i->C4, 2);
                        $c5 = round($i->C5, 2);
                    ?>
                    <tr>
                        <td>A<sub><?=$id ?></sub></td>
                        <td><?=$nama ?></td>
                        <td><?=$c1 ?></td>
                        <td><?=$c2 ?></td>
                        <td><?=$c3 ?></td>
                        <td><?=$c4 ?></td>
                        <td><?=$c5 ?></td>
                        <td>
                        <a href="" class="btn btn-danger d-inline-block" data-toggle="modal" data-target="#hapus_alternatif<?=$id_alternative?>">
                                        Hapus <i class="fas fa-trash"></i>
                                    </a>
                        </td>
                    </tr>

                    <!-- Modal Delete Data -->
                    <div class="modal fade" id="hapus_alternatif<?=$id_alternative?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Alternatif</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url();?>Dashboard/hapus_matrix" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="hidden" name="id_alternative" value="<?=$id_alternative?>" />
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
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="container">
    <h4 class="text-gray-800">Matrik Ternormalisasi (R)</h4>
    <table class="table table-bordered fixed_header">
        <thead class="thead-dark">
            <tr>
                <th colspan='2'>Alternatif</th>
                <th colspan='5'>Kriteria</th>
            </tr>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">C1</th>
                <th scope="col">C2</th>
                <th scope="col">C3</th>
                <th scope="col">C4</th>
                <th scope="col">C5</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $id = 0;
            foreach($evaluations2 as $i):
                $id++;
                $id_alternative = $i->id_alternative;
                $nama = $i->nama;
                $c1 = round($i->C1, 2);
                $c2 = round($i->C2, 2);
                $c3 = round($i->C3, 2);
                $c4 = round($i->C4, 2);
                $c5 = round($i->C5, 2);
            ?>
            <tr>
                <td>A<sub><?=$id ?></sub></td>
                <td><?=$nama ?></td>
                <td><?=$c1 ?></td>
                <td><?=$c2 ?></td>
                <td><?=$c3 ?></td>
                <td><?=$c4 ?></td>
                <td><?=$c5 ?></td>
            </tr>
            <?php endforeach; ?>
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


</body>



</html>