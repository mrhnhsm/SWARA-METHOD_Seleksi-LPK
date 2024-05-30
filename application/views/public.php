<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Favicon/logo -->
    <link rel="icon" href="<?= base_url('assets/img/LogoB.png'); ?>" type="image/png">

        <title>LPK PEMABA MEDAN</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="<?=base_url('assets2/');?>css/bootstrap.min.css" rel="stylesheet">

        <link href="<?=base_url('assets2/');?>css/bootstrap-icons.css" rel="stylesheet">

        <link href="<?=base_url('assets2/');?>css/templatemo-topic-listing.css" rel="stylesheet">      
<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
<style>
    .navbar-logo {
        width: 60px;  /* Atur lebar sesuai kebutuhan Anda */
        height: auto; /* Menyesuaikan tinggi secara otomatis untuk menjaga aspek rasio */
        margin-right: 10px; /* Jarak antara logo dan teks */
    }
        /* Custom Background for Timeline Section */
    .bg-custom {
        background-image: url('<?= base_url('assets/img/bg-pemaba.webp'); ?>'); /* Path to your background image */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }

    /* Overlay to darken the background */
    .bg-custom .section-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5); /* Adjust the opacity for desired darkness */
        z-index: 1;
    }

    /* Ensure text and content are above the overlay */
    .bg-custom .container,
    .bg-custom .row,
    .bg-custom .text-center,
    .bg-custom .timeline-container {
        position: relative;
        z-index: 2;
    }

</style>

    </head>
    
    <body id="top">

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="#section_1">
                        <img src="<?= base_url('assets/img/LogoNB.png'); ?>" alt="Logo" class="navbar-logo">
                        <span>LPK PEMABA</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="<?=base_url();?>Auth" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Beranda</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">Peserta Terbaik</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Langkah Pendaftaran</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">FAQs</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contact</a>
                            </li>

                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="<?=base_url();?>Auth" class="navbar-icon bi-person smoothscroll"></a>
                        </div>
                    </div>
                </div>
            </nav>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">LPK TERBAIK DI <br>SUMATERA UTARA</h1>

                            <h6 class="text-center">LPK PEMABA (LEMBAGA PEMBAHARUAN ANAK BANGSA)</h6>

                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">


                        <div class="col-lg-6 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">LPK PEMABA</h5>

                                            <p class="text-white">LPK PEMABA (LEMBAGA PEMBAHARUAN ANAK BANGSA) merupakan lembaga pelatihan kerja ke Jepang yang telah berdiri sejak 2010. Pelatihan program jalur SO (Sending Organization) / Ginou Jisshu, TG (Tokutei Ginou) / Specified Skilled Worker (SSW), IM JAPAN (Kemnaker RI), dan Kursus Bahasa Jepang N5, N4, N3.</p>

                                        </div>
                                    </div>

                                    <div class="social-share d-flex">

                                        <ul class="social-icon">
                                            <li class="social-icon-item">
                                                <a href="https://www.instagram.com/lpkpemabamedan_" class="social-icon-link bi-instagram"></a>
                                            </li>

                                            <li class="social-icon-item">
                                                <a href="https://www.facebook.com/lpkpemabamedan/" class="social-icon-link bi-facebook"></a>
                                    </div>

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="explore-section section-padding" id="section_2">
                <div class="container">
                    <div class="col-12 text-center">
                        <h2 class="mb-4">10 Peserta Terbaik Saat Ini</h2>
                    </div>
                </div>

                <div class="container-fluid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $id = 0; foreach ($results2 as $result): $id++; ?>
                            <tr>
                                <td><?=$id ?></td>
                                <td><?= $result['nama'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>


            <section class="timeline-section section-padding bg-custom" id="section_3">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2 class="text-white mb-4">Langkah Pendaftaran dan Seleksi</h2>
                        </div>
                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="timeline-container">
                                <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                    <div class="list-progress">
                                        <div class="inner"></div>
                                    </div>
                                    <li>
                                        <h4 class="text-white mb-3">Mendaftar dan mengikuti pelatihan bahasa Jepang di LPK PEMABA</h4>
                                        <p class="text-white">Peserta Melakukan Pendaftaran setelah melakukan pendaftaran akan melakukan bimbingan dan pelatihan Bahasa Jepang sesuai modul yang sudah disediakan</p>
                                        <div class="icon-holder">
                                        <i class="bi bi-clipboard2-plus-fill"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <h4 class="text-white mb-3">Mengikuti Tahapan Tes Wawancara dan Fisik</h4>
                                        <p class="text-white">Peserta akan melakukan tahapan tes wawancara dengan menggunakan Bahasa Jepang untuk mengetahui potensi dari peserta</p>
                                        <div class="icon-holder">
                                        <i class="bi bi-file-earmark-check-fill"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <h4 class="text-white mb-3">Tes Kesehatan dan Keberangkatan</h4>
                                        <p class="text-white">Peserta yang lulus tahapan wawancara dan tes fisik akan melanjutkan ke tes kesehatan dan pembagian keberangkatan berdasarkan hasil penilaian</p>
                                        <div class="icon-holder">
                                        <i class="bi bi-send-fill"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 text-center mt-5">
                            <p class="text-white">
                                Want to learn more?
                                <a href="https://www.tiktok.com/@lpkpemaba" class="btn custom-btn custom-border-btn ms-3">Check out TikTok</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="faq-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Frequently Asked Questions</h2>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-5 col-12">
                            <img src="<?= base_url('assets/img/lpk2.webp'); ?>" class="img-fluid" alt="FAQs">
                        </div>

                        <div class="col-lg-6 col-12 m-auto">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Bagaimana Cara Mendaftar LPK PEMABA?
                                        </button>
                                    </h2>

                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Cara mendaftar di LPK PEMABA cukup mudah, silahkan datang langsung ke kantor yang beralamat di Jl. Bunga raya, Perumahan Griya Asam Kumbang, Blok A, No. 37 & 72, Medan.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Lowongan Pekerjaan Apa Saja yang Tersedia?
                                    </button>
                                    </h2>

                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Hampir semua jenis job tersedia dan juga seleksi user dilakukan rutin, namun jika berminat di bagian job tertentu, kamu bisa pilih bagian job sebagai berikut:
                                            1. Care Worker (perempuan/laki-laki)
                                            2. Kontruksi (laki-laki)
                                            3. Pengelasan ( laki-laki)
                                            4. Permesinan (laki-laki)
                                            5. Pengecoran logam (laki-laki)
                                            6. Furniture/perkayuan (laki-laki)
                                            7. Pertanian (perempuan/laki/laki)
                                            8. Peternakan (perempuan/laki-laki)
                                            9. Pabrik Injeksi Plastic/Molding (Perempuan)
                                            10. Pabrik Pengolahan Makanan (perempuan/laki-laki)
                                            11. Perhotelan (perempuan/laki-laki)
                                            12. Restoran (perempuan/laki-laki)
                                            13. Pembuatan jalan
                                            14. Penangkapan ikan (laki-laki khusus jurusan kelautan/pengalaman penangkapan ikan)
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Apakah LPK PEMABA bisa menjamin semua peserta berangkat ke jepang?
                                    </button>
                                    </h2>

                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Jika bahasa Jepang yang dikuasai oleh peserta atau calon pemagang tersebut sudah maksimal atau minimal mencapai 50% dan telah lulus seleksi User, lulus MCU tahap pertama , lulus wawancara job, pada prinsipnya semua pasti akan berangkat ke Jepang.
                                        Namun, pihak User Jepang atau LPK PEMABA juga dapat membatalkan, jika peserta atau calon pemagang dinilai tidak bisa mengikuti program pendidikan, memiliki masalah kesehatan atau masalah sikap dan mental yang dianggap tidak bisa beradaptasi hidup di Jepang kemudian harinya.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Berapa lama Pelatihan di LPK PEMABA sampai berangkat ke Jepang?
                                    </button>
                                    </h2>

                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Estimasi pelatihan di LPK PEMABA dari awal mengikuti pelatihan bahasa Jepang sampai dengan lulus wawancara job/tanda tangan kontrak kerja sekitar 4 s/d 6 bulan, kemudian setelah pengurusan Paspor, MCU, CoE, Visa, dll sekitar 3 s/d 4 bulan. 1 Minggu setelah turun CoE akan di jadwal langsung untuk keberangkatan ke Jepang.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="contact-section section-padding section-bg" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-5">Hubungi Kami</h2>
                        </div>

                        <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                            <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63714.62987623894!2d98.612468!3d3.549551!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312f4b4179d083%3A0x61a51127d3dbbdf0!2sLPK.%20Pemaba%20Medan!5e0!3m2!1sen!2sid!4v1716559788223!5m2!1sen!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                            <h4 class="mb-3">Kantor Utama</h4>

                            <p>Jl. Bunga raya, Perumahan Griya Asam Kumbang, Blok A No. 37 & 72 Medan Tuntungan, Kota Medan</p>

                            <hr>

                            <p class="d-flex align-items-center mb-1">
                                <span class="me-2">Telephone</span>

                                <a href="tel: 305-240-9671" class="site-footer-link">
                                061-420-823-22
                                </a>
                            </p>

                            <p class="d-flex align-items-center">
                                <span class="me-2">Email</span>

                                <a href="mailto:info@company.com" class="site-footer-link">
                                lpkpemabamedan2010@gmail.com
                                </a>
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mx-auto">
                            <h4 class="mb-3">Jam Operasional</h4>

                            <p>Senin - Jumat
                            : 08.00 - 17.00 WIB
                            Sabtu
                            : 08.00 - 12.00 WIB <br>
                            Minggu
                            : Tutup</p>
                        </div>

                    </div>
                </div>
            </section>
        </main>

<footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="#section_1">
                        <img src="<?= base_url('assets/img/LogoNB.png'); ?>" alt="Logo" class="navbar-logo">
                            <span><br>LPK PEMABA</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="site-footer-title mb-3">Resources</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#section_1" class="site-footer-link">Beranda</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#section_3" class="site-footer-link">Langkah Pendaftaran</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#section_4" class="site-footer-link">FAQs</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#section_5" class="site-footer-link">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            English</button>

                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" type="button">Thai</button></li>

                                <li><button class="dropdown-item" type="button">Myanmar</button></li>

                                <li><button class="dropdown-item" type="button">Arabic</button></li>
                            </ul>
                        </div>

                        <p class="copyright-text mt-lg-5 mt-4">Copyright © 2024 LPK PEMABA. All rights reserved.</p>
                        
                    </div>

                </div>
            </div>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="<?=base_url('assets2/');?>js/jquery.min.js"></script>
        <script src="<?=base_url('assets2/');?>js/bootstrap.bundle.min.js"></script>
        <script src="<?=base_url('assets2/');?>js/jquery.sticky.js"></script>
        <script src="<?=base_url('assets2/');?>js/click-scroll.js"></script>
        <script src="<?=base_url('assets2/');?>js/custom.js"></script>

    </body>
</html>
