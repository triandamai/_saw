<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <div class="header__logo">
                </div>
                <div class="header__tool">
                    <div class="noti-wrap">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <!-- <div class="image">
                                <img src="<?= base_url(); ?>assets/img/icon/avatar-01.jpg" alt="John Doe" />
                            </div> -->
                            <div class="content">
                                <a class="js-acc-btn" ><?= $this->session->userdata('nama');?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="account-dropdown__footer">
                                    <a href="<?= base_url(); ?>index.php/<?=$this->session->userdata('level')?>/logout">
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