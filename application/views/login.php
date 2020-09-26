<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url()?>assets/logo-auladi.png">
    <title>Admin - Auladi</title>

    <link href="<?php echo base_url() ?>assets/assetsadmin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/assetsadmin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/assetsadmin/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/assetsadmin/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div >

                <img src="<?= base_url()?>assets/logo-auladi.png" >

            </div>
            <h3>Selamat Datang</h3>
            
            <p>Login in.</p>
            <?= $this->session->flashdata('msg') ?>
            <?= form_open('Auth/login', ['role' => 'form', 'class' => 'm-t']) ?>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required="">
                </div>
                <button type="submit" name="submit" value="Login" class="btn btn-primary block full-width m-b">Login</button>
            <?= form_close() ?>
            <a class="btn btn-primary block full-width m-b" href="<?= base_url()?>">Home</a>  
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url() ?>assets/assetsadmin/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assetsadmin/js/bootstrap.min.js"></script>

</body>

</html>
