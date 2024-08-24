<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Raport SMA IHBS</title>
    <!-- Favicons -->
    <link href="" rel="icon">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="icon" href="" />
    
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/AdminLTE.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- <div class="login-logo">
            <img src="assets/dist/img/logo-ihbs.png" width="240px" height="100px">
            
        </div> -->
        <!-- /.login-logo -->
        <div class="login-box-body" style="border-radius: 25px">
            <?=$this->session->flashdata('msg'); ?>

            <form action="" method="post">
                <div class="login-logo">
                    <img src="assets/dist/img/logo-ihbs.png" width="200px" height="70px">
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" value="admin" placeholder="Username" name="username" style="border-radius: 10px; min-height:45px" autofocus>
                    <!-- <span class="glyphicon glyphicon-user form-control-feedback min-height:45px"></span> -->
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" value="admin" placeholder="Password" name="password" style="border-radius: 10px; min-height:45px">
                    <!-- <span class="glyphicon glyphicon-lock form-control-feedback min-height:45px"></span> -->
                </div>
                <button type="submit" class="btn btn-block btn-flat" style="background-color: #477329; border-radius: 25px; min-height:45px"><span style="color: #fff; font-size: medium">Login</span></button>
                <br>
                <br><center><p>Created by <a href='' title='itihbsdev' target='_blank'>IT Development IHBS</a></p></center>
            </form>

            <!-- <a href="#">I forgot my password ?</a><br>
            Not ready account ?<a href="<?=base_url('auth/register');?>" class="text-center"> Register here</a> -->

        </div>
        <!-- <a href="<?=base_url('dashboard');?>" class="btn btn-default btn-xs btn-block btn-flat">Aplikasi Raport
            Online</a> -->
        <!-- /.login-box-body -->
        
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="<?= base_url('assets/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url('assets/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>