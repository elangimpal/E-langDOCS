<!-- ini navbar di halaman homepage -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ELANG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- CSS SENDIRI -->
    <link href="img/elang.ico" rel="shortcut icon" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/header.css">


</head>


<body>
    <!-- Modal LOGIN -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <form action="<?= base_url('index.php/Login_controller/aksi_login') ?>" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title">Masuk</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" required="required" name="username">
                        </div>
                        <div class="form-group">
                            <div class="clearfix">
                                <label>Password</label>
                                <a href="#" class="pull-right text-muted"><small>Lupa password?</small></a>
                            </div>
                            <input type="password" class="form-control" required="required" name="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <label class="checkbox-inline pull-left"><input type="checkbox"> Ingat saya</label>
                        <input type="submit" class="btn btn-primary pull-right" value="Masuk">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal REGIS -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" id="closeicon" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM DAFTAR</h5>
                </div>
                <div class="modal-body">
                    <form action="<?= site_url("RegisterController/index") ?>" method="POST">
                        <div id="formName" class="form-group form-inline">
                            <input type="text" class="form-control" name="fullName" id="inputName" placeholder="Nama Lengkap">
                        </div>
                        <div id="formUsername" class="form-group form-inline">
                            <input type="text" class="form-control" name="username" id="inputUsername" placeholder="Username">
                        </div>
                        <div id="formEmail" class="form-group">
                            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
                        </div>
                        <div id="formHandphone" class="form-group">
                            <input type="text" class="form-control" name="handphone" id="inputHandphone" placeholder="No. Handphone">
                        </div>
                        <div id="formAlamat" class="form-group">
                            <input type="text" class="form-control" name="alamat" id="inputAlamat" placeholder="Alamat">
                        </div>
                        <div id="formPassword" class="form-group">
                            <input type="password" class="form-control" name="password" id="inputPassword1" placeholder="Password">
                        </div>
                        <div id="formPassword2" class="form-group">
                            <input type="password" class="form-control" name="password_conf" id="inputPassword2" placeholder="Konfirmasi Password">
                        </div>
                        <p>Dengan mendaftar, anda menyetujui <br>
                            <u>Syarat Penggunaan</u> dan <u>Kebijakan Privasi</u>.</p>
                        <button id="buton" type="submit" class="btn btn-primary">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- navbar fixed top -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color:#11212E">
        <!-- <nav class="navbar navbar-expand-sm navbar-dark " style="background-color:#11212E"> -->
        <!-- Brand/logo -->
        <a class="navbar-brand" href="<?=base_url('index.php/Home')?>">
            <img src="<?= base_url('assets/img/logo.png') ?>" alt="logo" style="width:40px;">
        </a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#" style="font-size:18px; color:white"><b>E-LANG</b></a>
            </li>
        </ul>

        <ul class="navbar-nav nav-right">
            <li class="nav-item items">
                <!-- <a class="nav-link" href="<?= base_url('index.php/verifikasiBarangDS') ?>" style="color:white"><b>DAFTAR</b></a> -->
                <a class="nav-link trigger-btn" href="#exampleModal" data-toggle="modal" style="color:white"><b>DAFTAR</b></a>
            </li>
            <li class="nav-item items">
                <!-- <a class="nav-link" href="<?= base_url('index.php/Dashboard') ?>" style="color:white"><b>MASUK</b></a> -->
                <a class="nav-link trigger-btn" href="#myModal" data-toggle="modal" style="color:white"><b>MASUK</b></a>
            </li>
            <li class="nav-item items">
                <a class="nav-link" href="<?= base_url('index.php/Dashboard') ?>" style="color:white"><b>FAQ</b></a>
            </li>
        </ul>



    </nav>
