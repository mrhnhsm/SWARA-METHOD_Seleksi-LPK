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

	<!-- Custom fonts for this template-->
	<link href="<?=base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?=base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

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
                    <h1 class="h3 mb-4 text-gray-800">Penentuan Bobot Menggunakan Metode SWARA</h1>

                    <div class="page-content">
                <section class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header">
                                <h4 class="card-title">Langkah Menghitung Bobot Menggunakan Metode SWARA
                                </h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text">
                                        1. Data nilai bobot awal , merupakan pembootan acak atau bobot dasar dari nilai
                                        kriteria yang ada.
                                        <br>
                                        2. Urutkan nilai bobot tertinggi menjadi rangking 1.
                                        <br>
                                        3. kepentingan komparatif (Sj)
                                        mencari nilai Sj dilakukan dengan cara tahapan kriteria ke 1/3, kriteria ke 3
                                        dengan cara 2/3 kreteria ke 4 menjadi
                                        3/3 dimana 3 merupakan nilai rata-rata keseluruhan ranking awal.
                                        <br>
                                        4. Nilai Kj
                                        Nilai ini merupakan setiap nilai Sj ditambah dengan 1 dimana sesuai dengan
                                        ketentuan rumus
                                        <br>
                                        5. Mencari nilai Koefisien (Qi)
                                        dimulai dari nilai 1 sebagai ketetapan pada rumus, pada baris ke 2 atau kriteria
                                        ke 2 menjadi 1 dibagi nilai Kj
                                        kriteria ke 2 yaitu 1/1,3333 dan pada kriteria ke 3 menjadi nilai Q1 alternatif
                                        ke 2 dibagi dengan nilai Kj ke 3

                                        berarti 0,75/1,6666 dan seterusnya (Sj)
                                        <br>
                                        6. Mencari nilai akhir Bobot (Wi)
                                        Pada tahapan ini dimulai dengan nilai Qi dibagi dengan n total nilai keseluruhan
                                        Qi .setelah dapat nilainya nilai Wi
                                        merupakan nilai yang digunakan sebagai Bobot kriteria.
                                    </p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <b>Tabel Kriteria</b>
                                        <tr>
                                            <th>Nama Kriteria</th>
                                            <th>Kode</th>

                                        </tr>
                                        <tr>
                                            <td>Tes Bahasa Jepang</td>
                                            <td>C1</td>
                                        </tr>
                                        <tr>
                                            <td>Tes Kesemaptaan Tubuh</td>
                                            <td>C2</td>
                                        </tr>
                                        <tr>
                                            <td>Tes Kesehatan (Medical Check Up)</td>
                                            <td>C3</td>
                                        </tr>
                                        <tr>
                                            <td>Tes Ketahanan Fisik</td>
                                            <td>C4</td>
                                        </tr>
                                        <tr>
                                            <td>Wawancara</td>
                                            <td>C5</td>
                                        </tr>
                                        </tr>
                                    </table>
                                </div>

                                <br>
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <b>Tabel Pembobotan</b>
                                        <tr>
                                            <th>Nama Kriteria</th>
                                            <th>Kode</th>
                                            <th>Nilai Bobot Awal</th>
                                            <th>Rank Awal</th>
                                            <th>Sj</th>
                                            <th>Kj (Sj+1)</th>
                                            <th>Qi</th>
                                            <th>Wi</th>
                                            <th>Kode Bobot</th>
                                            <th>Rank Akhir</th>
                                        </tr>
                                        <?php foreach($criterias as $criteria): ?>
                                            <tr>
                                                <td><?= $criteria->criteria ?></td>
                                                <td>C<?= $criteria->id_criteria ?></td>
                                                <td><?= $criteria->weight_percentage ?></td>
                                                <td><?= $criteria->initial_rank ?></td>
                                                <td><?= format_number($criteria->Sj, 4) ?></td>
                                                <td><?= format_number($criteria->Sj + 1, 4) ?></td>
                                                <td><?= format_number($criteria->Qi, 4) ?></td>
                                                <td><?= format_number($criteria->Wi, 4) ?></td>
                                                <td>W<?= $criteria->id_criteria ?></td>
                                                <td><?= $criteria->final_rank ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php $this->load->view('template/footer'); ?>

</body>

</html>
