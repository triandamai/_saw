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
        <?php $this->load->view('master/sidebar');?>
        <div class="page-container">
            <?php $this->load->view('master/nav'); ?>
            <?php $this->load->view($page); ?>
        </div>
        
    </div>
    <?php $this->load->view('master/js'); ?>
</body>

</html>