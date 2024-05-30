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
        <h1 class="h3 mb-2 text-gray-800">Tabel Hasil Semua Penilaian Tes</h1>
        <p class="mb-4">Hasil Seluruh Penilaian Peserta Peserta :</p>

        <div class="container">
            <table class="table table-bordered fixed_header">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Hiragana</th>
                        <th scope="col">Katakana</th>
                        <th scope="col">Kata Benda</th>
                        <th scope="col">Kata Kerja</th>
                        <th scope="col">Kata Sifat</th>
                        <th scope="col">Kesemaptaan Tubuh</th>
                        <th scope="col">Kesehatan</th>
                        <th scope="col">Lari</th>
                        <th scope="col">Push UP / Chaining</th>
                        <th scope="col">Sit Up</th>
                        <th scope="col">Nilai Wawancara</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        $id = 0;
                        foreach ($tes as $i) {
                            if ($i['hiragana'] !== null) {
                                $id++;
                                $nama = $i['nama'];
                                $hiragana = $i['hiragana'];
                                $katakana = $i['katakana'];
                                $kata_benda = $i['kata_benda'];
                                $kata_kerja = $i['kata_kerja'];
                                $kata_sifat = $i['kata_sifat']; 
                                $kesemaptaan_tubuh = $i['kesemaptaan_tubuh'];
                                $kesehatan = $i['kesehatan'];
                                $lari = $i['lari'];
                                $push_up = $i['push_up'];
                                $sit_up = $i['sit_up'];
                                $wawancara = $i['wawancara'];
                        ?>
                                <tr>
                                    <td><?= $id ?></td>
                                    <td><?= $nama ?></td>
                                    <td><?=$hiragana ?></td>
                                    <td><?=$katakana ?></td>
                                    <td><?=$kata_benda ?></td>
                                    <td><?=$kata_kerja ?></td>
                                    <td><?=$kata_sifat ?></td>
                                    <td><?= $kesemaptaan_tubuh ?></td>
                                    <td><?= $kesehatan ?></td>
                                    <td><?= $lari ?></td>
                                    <td><?= $push_up ?></td>
                                    <td><?= $sit_up ?></td>
                                    <td><?= $wawancara ?></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>

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