<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>Dashboard">
    <div class="sidebar-brand-icon">
        <img src="<?= base_url('assets/img/LogoB.png') ?>" alt="Laugh Wink Icon" class="custom-icon">
    </div>
    <div class="sidebar-brand-text mx-3">Admin LPK Pemaba</div>
</a>

<style>
     .custom-icon {
        width: 60px; /* Atur lebar sesuai kebutuhan Anda */
        height: auto; /* Menyesuaikan tinggi secara otomatis untuk menjaga aspek rasio */
        transform: none; /* Menghilangkan rotasi atau transformasi lainnya */
    }

    .sidebar-brand-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        transform: none; /* Pastikan tidak ada rotasi pada kontainer */
    }

    .sidebar-brand {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<?php
// Definisikan $active_menu secara default jika belum didefinisikan
if (!isset($active_menu)) {
    $active_menu = '';
}
?>

<!-- Nav Item - Dashboard -->
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link <?php if($active_menu == 'dashboard') echo 'active'; ?>" href="<?=base_url();?>Dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if($active_menu == 'swara_method') echo 'active'; ?>" href="<?=base_url();?>Dashboard/view_method">
            <i class="fas fa-fw fa-th-large"></i>
            <span>Swara Method</span>
        </a>
    </li>
</ul>




<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Fitur
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#data"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Data</span>
    </a>
    <div id="data" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?=base_url();?>Dashboard/view_peserta">Data Peserta (Alternatif)</a>
            <a class="collapse-item" href="<?=base_url();?>Dashboard/view_bobot">Data Bobot dan Kriteria</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#penilaian"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-th-list"></i>
        <span>Penilaian</span>
    </a>
    <div id="penilaian" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Form Penilaian</h6>
            <a class="collapse-item" href="<?=base_url();?>Dashboard/view_penilaian_jepang">Tes Bahasa Jepang</a>
            <a class="collapse-item" href="<?=base_url();?>Dashboard/view_kesemaptaan_tubuh">Tes Kesemaptaan Tubuh</a>
            <a class="collapse-item" href="<?=base_url();?>Dashboard/view_kesehatan">Tes Kesahatan</a>
            <a class="collapse-item" href="<?=base_url();?>Dashboard/view_ketahanan_fisik">Tes Ketahanan Fisik</a>
            <a class="collapse-item" href="<?=base_url();?>Dashboard/view_wawancara">Tes Wawancara</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?=base_url();?>Dashboard/view_tes">
        <i class="fas fa-fw fa-check-circle"></i>
        <span>Hasil Seluruh Tes</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url();?>Dashboard/view_matrix">
        <i class="fas fa-fw fa-cogs"></i>
        <span>Nilai Matriks (SAW Method)</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url();?>Dashboard/view_preferensi_hasil">
        <i class="fas fa-fw fa-signal"></i>
        <span>Hasil Preferensi</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?=base_url();?>Dashboard/view_user">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Buat Akun</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->