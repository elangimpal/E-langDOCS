<?php $this->load->view('templates/navbar') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaturan Profil</title>
    <!-- Stylesheets -->

    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/profile.css">

    <!-- Favicon -->
    <link href="img/elang.ico" rel="shortcut icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="sidenav">
        <div class="profile">
            <h5>LAMAN PROFILE</h5>
        </div>
        <a href="<?= base_url('index.php/Notifikasi') ?>" style="color:white"><b>Notifikasi</b></a>
        <a href="<?= base_url('index.php/BarangHilang') ?>">Barang Hilang</a>
        <a href="<?= base_url('index.php/BarangDitemukan') ?>">Barang Ditemukan</a>
        <a href="<?= base_url('index.php/Profile') ?>">Pengaturan</a>
    </div>

    <div class="container" style="margin-top: 5%; margin-left: 25%;">
        <div class="row">
            <div class="col-" style="width: 250px;">
                <div class="boxed boxed--lg boxed--border" style="box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15); border-radius: 30px;">
                    <div class="text-block text-center">
                        <img src="<?= base_url('assets/img/profile/profile-pic.jpg')?>" alt="" style="width: 50px;">
                        <h5 style="margin-top: 5%; color: cadetblue;">sadakosan</h5>
                        <span>Sadako bin Masako</span><br>
                    </div>
                    <hr>
                    <div class="text-block">
                        <ul class="menu-vertical">
                            <li>
                                <a href="#" class="">Profil</a>
                            </li>
                            <li>
                                <a href="#" class="">Kata Sandi</a>
                            </li>
                            <li>
                                <a href="#" class="">Hapus Akun</a>
                            </li>
                        </ul> 
                    </div>
                </div>
            </div>
            <div class="col-" style="width: 500px;  margin-left: 25%;">
                <div class="boxed boxed--lg boxed--border" style="box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15); border-radius: 30px;">
                    <div class="form-group">
                        <h2>Profil</h2><br>
                        <div class="form-area" style="margin-left: 2%">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="Nama"><br>
                            <label>Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="Email"><br>
                            <label>No. Ponsel</label>
                            <input type="text" class="form-control" id="noPonsel" name="noPonsel" value="No. Ponsel"><br>
                            <label>Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="Alamat"><br>
                        </div>
                        <button id="btnSave" type="submit" class="btn btn-primary" style="margin-left: 80%; margin-top: 5%">Update Profil</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>