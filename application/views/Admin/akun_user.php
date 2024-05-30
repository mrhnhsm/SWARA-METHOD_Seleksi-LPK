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
            title: "Berhasil Menambahkan User",
            text: "User Ditambahkan",
            icon: "success"
        }).then(() => {
            <?php $this->session->unset_userdata('input'); ?>
        });
    </script>
<?php } ?>

<?php if ($this->session->flashdata('err')) { ?>
    <script>
        swal({
            title: "User Gagal Ditambahkan",
            text: "Pastikan Password Cocok dan Min 8 Karakter serta Email Tidak Digunakan",
            icon: "error"
        }).then(() => {
            <?php $this->session->unset_userdata('err'); ?>
        });
    </script>
<?php } ?>

<?php if ($this->session->flashdata('delete')) { ?>
    <script>
        swal({
            title: "User Berhasil Dihapus",
            text: "User Dihapus",
            icon: "success"
        }).then(() => {
            <?php $this->session->unset_userdata('delete'); ?>
        });
    </script>
<?php } ?>

<?php if ($this->session->flashdata('errdelete')) { ?>
    <script>
        swal({
            title: "User Gagal Dihapus",
            text: "User Tidak Dihapus",
            icon: "error"
        }).then(() => {
            <?php $this->session->unset_userdata('errdelete'); ?>
        });
    </script>
<?php } ?>

<?php if ($this->session->flashdata('update')) { ?>
    <script>
        swal({
            title: "User Berhasil Diupdate",
            text: "User Update",
            icon: "success"
        }).then(() => {
            <?php $this->session->unset_userdata('update'); ?>
        });
    </script>
<?php } ?>

<?php if ($this->session->flashdata('errupdate')) { ?>
    <script>
        swal({
            title: "User Gagal DiUpdate",
            text: "User Tidak Update",
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
        <h1 class="h3 mb-2 text-gray-800">User Admin</h1>
        <p class="mb-4">Data User Admin</p>

        <div class="container">
        <button type="button" class="btn btn-primary mb-3 mr-2" data-toggle="modal" data-target="#tambah_user">
                <i class="fas fa-plus"></i> Tambah User
            </button>
            <table class="table table-bordered fixed_header">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td>
                    <a href="" class="btn btn-primary d-inline-block" data-toggle="modal" data-target="#ubah_user<?= $user['id']; ?>">
                                        Edit <i class="nav-icon fas fa-edit"></i>
                    </a>
                    <a href="" class="btn btn-danger d-inline-block" data-toggle="modal" data-target="#hapus_user<?= $user['id']; ?>">
                                        Hapus <i class="fas fa-trash"></i>
                                    </a>
                    </td>
                </tr>


                <!-- Modal Delete Data -->
                <div class="modal fade" id="hapus_user<?= $user['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Alternatif</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url();?>Auth/hapus_user" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="hidden" name="user_id" value="<?= $user['id']; ?>" />
                                                <p>Apakah Anda Yakin Ingin Menghapus User?</i></b></p>
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
                    <div class="modal fade" id="ubah_user<?= $user['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Alternatif</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?=base_url();?>Auth/edit" enctype="multipart/form-data" method="POST">
                                        <input type="text" value="<?= $user['id']; ?>" name="user_id" hidden>
                                        <div class="form-group">
                                            <label for="name">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="new_password">New Password</label>
                                            <input type="password" class="form-control" id="new_password" name="new_password" value="" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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

<!-- Modal Tambah Data -->
<div class="modal fade" id="tambah_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Alternatif Peserta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url(); ?>Auth/register" enctype="multipart/form-data" method="POST">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="password2">Re-Match Password</label>
                            <input type="password" class="form-control" id="password2" name="password2" required>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>



</html>