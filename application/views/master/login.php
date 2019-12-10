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
    <title>Login</title>
    <?php $this->load->view('master/css') ?>
</head>

<body class="animaition" style="background: #d4d3d3">
    <div class="page-wrapper">
        <div class="page-content">
            <div class="container">
                <div class="col-lg-12" style="padding-top: 50px; padding-bottom: 150px;">
                    <div class="row">
                        <div class="col-md-8 col-lg-6 mx-auto bg-white" style="padding-bottom:10px;padding-top:100px;padding-left:20px;padding-right:20px">
                            <!-- <div class="login-content"> -->
                            <h2 class="text-center text-uppercase text-secondary mb-20" style="margin-top:0px;margin-bottom:30px">Login</h2>
                            <?=$this->session->flashdata('pesan')?>
                            <div class="login-form">
                                <form action="<?= base_url(); ?>index.php/<?=$login?>/login" method="post">
                                <?php if($login == 'penduduk'){?>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="au-input au-input--full" type="text" name="nik" placeholder=<?php if($login == "user"){ ?>"Masukkan NIK anda"<?php } else if($login == "admin") { ?>"Masukkan NIP anda"<?php } ?>>
                                    </div>
                                <?PHP }else{?>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="au-input au-input--full" type="text" name="uname" required="required" placeholder=<?php if($login == "user"){ ?>"Masukkan NIK anda"<?php } else if($login == "admin") { ?>"Masukkan NIP anda"<?php } ?>>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="au-input au-input--full" type="password" name="pass" placeholder="Masukkan Password anda" required="required">
                                    </div>
                                   
                                <?php }?>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                                </form>
                            </div>
                            <!-- </div> -->
                        </div>
                       
                    </div>
                </div>
                <div class="login-wrap">
                    <!-- <div class="row"> -->

                    <!-- <div class="login-content">
                            <div class="login-logo">
                                <a href="#">
                                    <img src="<?= base_url(); ?>assets/img/amikom_logo.png" width="200px" alt="CoolAdmin">
                                </a>
                            </div>
                            
                        </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('master/js')?>
</body>

</html>