<?= $this->include('Admin/Layout/Header') ?>
<style>
    .nav-sidebar>.nav-item.menu-open>.nav-link {
        background-color: rgb(0, 123, 255, .1) !important;
    }

    .nav-treeview>.nav-item>.nav-link.active {
        background-color: rgb(0, 123, 255, 1) !important;
        color: #fff !important;

    }
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/dashboard" class="brand-link">
        <img src="Assets/settings/<?= $setting_logo ?>" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Control Panel</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard</p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link">
                        <i class="nav-icon fas fa-rocket"></i>
                        <p> Lihat Situs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/instansi') ?>" class="nav-link <?php if ($page == 'Instansi') { ?> active<?php } ?>">
                        <i class="far fa-building nav-icon"></i>
                        <p>Data OPD</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/staff') ?>" class="nav-link <?php if ($page == 'Staff') { ?> active<?php } ?>">
                        <i class="far fa-user nav-icon"></i>
                        <p>Staff</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/aplikasi') ?>" class="nav-link <?php if ($page == 'Aplikasi') { ?> active<?php } ?>">
                        <i class="nav-icon fas fa-plug"></i>
                        <p>Aplikasi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/slider') ?>" class="nav-link <?php if ($page == 'Slider') { ?> active<?php } ?>">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>Slider</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/news') ?>" class="nav-link <?php if ($page == 'Berita') { ?> active<?php } ?>">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Berita</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/informasi') ?>" class="nav-link <?php if ($page == 'Informasi') { ?> active<?php } ?>">
                        <i class="nav-icon fas fa-sticky-note"></i>
                        <p>Informasi Pelayanan</p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="<?= base_url('/infoit') ?>" class="nav-link <?php if ($page == 'Pojok IT') { ?> active<?php } ?>">
                        <i class="nav-icon fas fa-desktop"></i>
                        <p>Pojok IT</p>
                    </a>
                </li> -->
             
                <li class="nav-item">
                    <a href="<?= base_url('/pesan') ?>" class="nav-link <?php if ($page == 'Kirim Pesan') { ?> active<?php } ?>">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>Kritik/Pesan/Saran</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/poling') ?>" class="nav-link <?php if ($page == 'Poling') { ?> active<?php } ?>">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Poling</p>
                    </a>
                </li>
                <?php if ($type == 'super_user') { ?>
                    <li class="nav-item">
                        <a href="<?= base_url('/pengguna') ?>" class="nav-link <?php if ($page == 'Pengguna') { ?> active<?php } ?>">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Pengguna</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('/logs') ?>" class="nav-link <?php if ($page == 'Aktivitas') { ?> active<?php } ?>">
                            <i class="nav-icon fas fa-history"></i>
                            <p>Aktivitas</p>
                        </a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a href="<?= base_url('/pengaturan') ?>" class="nav-link <?php if ($page == 'Pengaturan') { ?> active<?php } ?>">
                        <i class="nav-icon fas fa-wrench"></i>
                        <p>Pengaturan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-medkit"></i>
                        <p>Pemeliharaan</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<div class="content-wrapper" style="min-height: 78vh;">
    <section class="content">
        <div class="container-fluid">