<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="au-card recent-report">
                        <div class="au-card-inner">
                            
                            <h3 class="title-2">Selamat Datang <?php foreach($profile as $p){ ?>

                            <?= $p->nama;?></h3>
                            <br>
                            <p><?= $p->alamat;?></p>
                            <br>
                            <p><?php if($p->sudah_dinilai == "1"){
                                echo "Sudah Dinilai";
                            }else{
                                echo "Belum Dinilai";
                            }?></p>
                            <?php }?>
                            <a href="<?= base_url(); ?>index.php/<?=$this->session->userdata('level')?>/logout">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by
                            <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>