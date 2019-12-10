<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>
    <?php $this->load->view('master/css') ?>
</head>

<body class="animaition">
    <div class="page-wrapper">
      
        <!-- HEADER DESKTOP-->
        
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <img src="<?=base_url();?>assets/img/brebes_logo.png" width="46px" height="52px"
                            alt="CoolAdmin" />
                        <h3 style="margin-left:10px; color: white"> SPK Bekerja</h3>
                    </div>
                   
                    <div class="header__tool">
                        <div class="noti-wrap">
                            <div class="account-wrap">
                                <div class="account-item account-item--style2 clearfix js-item-menu">
                                    <div class="image">
                                        <img src="<?=base_url();?>assets/img/icon/avatar-01.png" alt="John Doe" />
                                    </div>
                                    <div class="content">
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="account-dropdown__footer">
                                            <a
                                                href="<?= base_url(); ?>index.php/<?=$this->session->userdata('level')?>/logout">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!---HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <img src="<?=base_url();?>assets/img/brebes_logo.png" width="46px" height="52px"
                            alt="CoolAdmin" />
                        <h3 style="margin-left:10px; color: white"> SPK Bekerja</h3>
                    </div>
                   
                    <div class="header__tool">
                        <div class="noti-wrap">
                            <div class="account-wrap">
                                <div class="account-item account-item--style2 clearfix js-item-menu">
                                    <div class="image">
                                        <img src="<?=base_url();?>assets/img/icon/avatar-01.png" alt="John Doe" />
                                    </div>
                                    <div class="content">
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="account-dropdown__footer">
                                            <a
                                                href="<?= base_url(); ?>index.php/<?=$this->session->userdata('level')?>/logout">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
      
        <div class="page-content--bgf7">
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <!-- <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Dashboard</li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Selamat Datang <?= $profile->nama ?>
                                <span></span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <h3 class="title-5 m-b-35">statistics</h3> -->
                        </div>
                    </div>
                   
                    
                    <div class="row">
                    <div class="col-md-12 col-lg-12">
                    <?php $no = 1; if($hasilAkhir != null){foreach($hasilAkhir as $HAkey => $HAvalue) { ?>
                                                    
                                  
                                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border">
                                            <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                                <div class="bg-overlay bg-overlay--blue"></div>
                                                <h3>
                                                    <i class="zmdi zmdi-account-calendar"></i><?php echo date("Y-m-d"); ?></h3>
                                                <!-- <button class="au-btn-plus">
                                                    <i class="zmdi zmdi-plus"></i>
                                                </button> -->
                                            </div>
                                            <div class="au-task js-list-load au-task--border">
                                                <div class="au-task__title">
                                                    <p>Hasil Penilaian Warga <?= $namaSamaNik[$HAkey]; ?></p>
                                                </div>
                                                <div class=" js-scrollbar3">
                                                    <div class="au-task__item au-task__item--primary">
                                                        <div class="au-task__item-inner">
                                                            <h5 class="task">
                                                                <a href="#">Nilai</a>
                                                            </h5>
                                                            <span class="time"><?= $HAvalue; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="au-task__item au-task__item--warning">
                                                        <div class="au-task__item-inner">
                                                            <h5 class="task">
                                                                <a href="#">Ranking</a>
                                                            </h5>
                                                            <span class="time"><?= $no; ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-task__footer">
                                                <p class="m-t-10">Untuk melihat hasil penilaian warga miskin dapat mengklik tombol lihat
                                                        laporan yang berada dibawah, Terima kasih</p>
                                                <br>
                                                <form action="<?=base_url();?>index.php/user/index" method="POST">
                                                    <input type="hidden" name="export" value="Lihat Hasil Penilaian" class="btn btn-info m-t-20">
                                                        <button type="submit" class="au-btn au-btn-load ">Lihat hasil penilaian</button>
                                                </form>   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $no++; }}	 ?>
                    </div>
                
                </div>
            </section>
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2019 Wildatul Aulia All rights reserved. Template by <a
                                        href="https://colorlib.com">Colorlib</a>.</p>
                                <a href="http://laren.desa.id/">http://laren.desa.id/<a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        </div>
    
    <?php $this->load->view('master/js'); ?>
</body>

</html>