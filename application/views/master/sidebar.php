<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <!-- <a class="logo" href="#"> -->
                    <!-- <img src="<?=base_url();?>assets/img/brebes_logo.png" width="46px" height="52px" alt="CoolAdmin" /> -->
                    <h3>SPK SAW</h3>
                <!-- </a> -->
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
            <?php if($this->session->userdata('level') == "user"){ ?>
                <li class="active">
                    <a href="<?= base_url()?>index.php/admin">
                        <i class="fas fa-home"></i>Beranda</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-archive"></i>Laporan</a>
                </li>
                <?php } else if($this->session->userdata('level') == "admin") { ?>
                <li class="active">
                <a href="<?= base_url()?>index.php/admin">
                        <i class="fas fa-homoe"></i>Beranda</a>
                </li>
                <li>
                    <a href="<?= base_url()?>index.php/admin/data_pegawai">
                        <i class="fas fa-user"></i>Admin</a>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url()?>index.php/admin/data_dosen">
                        <i class="fas fa-users"></i>Input Data Dosen</a>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url()?>index.php/admin/data_kriteria">
                        <i class="fas fa-sort-amount-up"></i>Kriteria
                    </a>
                </li>
                <!-- <li>
                    <a href="<?= base_url() ?>index.php/admin/data_penduduk_belum_dinilai">
                        <i class="fas fa-tasks"></i>Penilaian
                    </a>
                </li> -->
                <li>
                <a href="<?= base_url()?>index.php/admin/laporan_penerima">
                        <i class="fas fa-file-alt"></i>Laporan Penerima</a>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</header>
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <!-- <a href="#"> -->
            <!-- <img src="<?=base_url();?>assets/img/brebes_logo.png" width="46px" height="52px" alt="CoolAdmin" /> -->
            <h3 style="margin-left:10px">SPK SAW</h3>
        <!-- </a> -->
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <?php if($this->session->userdata('level') == "user"){ ?>
                <li class="<?php if($ap == "user"){echo "active"; } ?>">
                    <a href="<?= base_url()?>index.php/admin">
                        <i class="fas fa-home"></i>Beranda</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-archive"></i>Laporan</a>
                </li>
                <?php } else if($this->session->userdata('level') == "admin") { ?>
                <li class="<?php if($ap == "admin"){ echo "active"; } ?>">
                <a href="<?= base_url()?>index.php/admin">
                        <i class="fas fa-home"></i>Beranda</a>
                </li>
                <li class="<?php if($ap == "pegawai"){ echo "active"; } ?>">
                    <a href="<?= base_url()?>index.php/admin/data_pegawai">
                        <i class="fas fa-user"></i>Admin</a>
                    </a>
                </li>
                <li class="<?php if($ap == "penduduk"){echo "active"; } ?>">
                    <a href="<?= base_url()?>index.php/admin/data_dosen">
                        <i class="fas fa-users"></i>Input Data Dosen</a>
                    </a>
                </li>
                <li class="<?php if($ap == "kriteria"){echo "active"; } ?>">
                    <a href="<?= base_url()?>index.php/admin/data_kriteria">
                    <i class="fas fa-sort-amount-up"></i>Kriteria
                    </a>
                </li>
                <li class="<?php if($ap == "laporan"){echo "active"; } ?>">
                <a href="<?= base_url()?>index.php/admin/laporan_penerima">
                        <i class="fas fa-file-alt"></i>Laporan Penerima</a>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</aside>