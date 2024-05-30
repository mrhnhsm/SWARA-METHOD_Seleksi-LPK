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
        <h1 class="h3 mb-2 text-gray-800">Tabel Penilaian Kesahatan</h1>
        <p class="mb-4">Hasil dari Penilaian Kesehatan Tubuh :</p>

        <div class="container">
            <button type="button" class="btn btn-primary mb-3 mr-2" data-toggle="modal" data-target="#tambah_data">
                <i class="fas fa-plus"></i> Tambah Nilai Peserta
            </button>
            <table class="table table-bordered fixed_header">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nilai Kesehatan</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $id = 0;
                    foreach ($kesehatan as $i):
                        if ($i['kesehatan'] !== null) {
                            $id++;
                            $nama = $i['nama'];
                            $kesehatan = $i['kesehatan'];
                ?>
                    <tr>
                        <td><?= $id ?></td>
                        <td><?= $nama ?></td>
                        <td><?= $kesehatan ?></td>
                    </tr>
                <?php
                        }
                    endforeach;?>
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
    <div class="modal fade" id="tambah_data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai Kesehatan Tubuh Pada Alternatif Peserta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url(); ?>Dashboard/tambah_kesehatan" enctype="multipart/form-data" method="POST">
                <div class="form-group">
                    <label for="id_criteria">Jenis Penilaian</label>
                    <select class="form-control" id="id_criteria" name="id_criteria" disabled>
                        <option value="">Pilih Penilaian</option>
                        <?php
                        foreach($kriteria as $i):
                            $criteria = $i['criteria'];
                            $id_criteria = $i['id_criteria'];
                            $selected = ($id_criteria == 3) ? 'selected' : '';
                        ?>
                            <option value="<?=$id_criteria ?>" <?=$selected ?>><?=$criteria ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="hidden" id="id_criteria" name="id_criteria" value="3">
                </div>
                    <div class="form-group">
                        <label for="id_alternative">Nama Peserta (Alternative)</label>
                        <select class="form-control" id="id_alternative" name="id_alternative" required>
                            <option value="">Pilih Nama</option>
                            <?php
                            foreach($peserta as $i):
                                $nama = $i['nama'];
                                $user_id = $i['user_id'];
                            ?>
                                <option value="<?=$user_id ?>"><?=$nama ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                            <label for="bobot">Bobot Penilaian</label>
                            <select class="form-control" id="bobot" name="bobot" required>
                                <option value="">Silahkan Pilih Penilaian</option>
                                <option value="Buruk">Buruk</option>
                                <option value="Cukup">Cukup</option>
                                <option value="Sangat Cukup">Sangat Cukup</option>
                                <option value="Baik">Baik</option>
                                <option value="Sangat Baik">Sangat Baik</option>
                            </select>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>
</div>


</body>



</html>