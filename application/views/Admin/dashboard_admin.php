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
                    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

                    <div class="page-content">
                <section class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Sistem Pendukung Keputusan Pemilihan LPK Ke Jepang Menggunakan Metode
                                    SWARA dan Simple Additive Weighting (SAW)</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text">
                                        Metode SWARA
                                        merupakan metode pembobotan,
                                        atau metode yang memberikan nilai terhadap tingkat kepentingan dari kriteria
                                        yang tersedia sebagai bahan
                                        pertimbangan dalam proses pengambilan keputusan [12]. Metode SWARA memiliki
                                        perbedaan dari banyak metode
                                        pembobotan lainnya, metode ini mengolah data berdasarkan pendapat para pakar
                                        maupun pengambil keputusan dan
                                        mengolah data yang terpenting terhadap kriteria tertentu, sedangkan
                                        Metode Simple Additive Weighting (SAW) adalah metode penjumlahan terbobot.
                                        Konsep dasar metode SAW adalah mencari penjumlahan
                                        terbobot dari rating kinerja pada setiap alternatif pada semua atribut
                                        (Fishburn 1967). SAW dapat dianggap sebagai cara yang paling mudah dan
                                        intuitif untuk menangani masalah Multiple Criteria Decision-Making MCDM,
                                        karena fungsi linear additive dapat mewakili preferensi pembuat keputusan
                                        (Decision-Making, DM). Hal tersebut dapat dibenarkan, namun, hanya ketika
                                        asumsi preference independence (Keeney & Raiffa 1976) atau preference
                                        separability (Gorman 1968) terpenuhi.
                                    </p>
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
