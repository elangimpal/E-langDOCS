<!DOCTYPE html>
<html lang="en">

<head>
    <title>ELANG</title>
    <meta charset="UTF-8">
    <meta name="description" content="WebUni Education Template">
    <meta name="keywords" content="webuni, education, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Stylesheets -->

    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome.min.css">
    <link rel="stylesheet" href="assets/owl.carousel.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/button-file.css">

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
    <!-- NAV -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color:#11212E">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
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
                <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white">
                    <b>Shahnaz</b>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= base_url('index.php/Profile') ?>">Edit Profil</a>
                    <a class="dropdown-item" href="<?= base_url('index.php/Home') ?>">Keluar</a>
                </div>
            </li>
            </li>
            <li class="nav-item items">
                <a class="nav-link" href="#" style="color:white"><b>FAQ</b></a>
            </li>
        </ul>
    </nav>
    <!-- NAV END -->

    <!-- SIDE BAR -->
    <?php $this->load->view('templates/sidebar') ?>


    <!-- SIDE BAR END -->
    <!-- FILTER SORT  --> 
    <div class="search-field box-of" style="margin: 100px 100px 0px 320px; padding: 20px 80px 20px 50px;">
        <form class="search-form" action="#">
            <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-6" >
            <input class="form-control input-group my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
                    
                </div>
                <div class="col-lg-2 col-md-6 col-xs-6" >
                    <select name="location" class="app-select form-control" required="">
                        <option data-display="Lokasi">Lokasi</option>
                        <option value="1">Sukabirus</option>
                        <option value="2">Sukapura</option>
                        <option value="3">G. Tokong Nanas</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-6 col-xs-6">
                    <select name="property-type" class="app-select form-control" required="">
                        <option data-display="Kategori">Kategori</option>
                        <option value="1">Kartu identitas</option>
                        <option value="2">Tas</option>
                        <option value="3">Dompet</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-6 col-xs-6">
                    <select name="property-type" class="app-select form-control" required="">
                        <option data-display="Jenis">Jenis</option>
                        <option value="1">Kehilangan</option>
                        <option value="2">Ditemukan</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-6 col-xs-6">
                    <select name="bedroom" class="app-select form-control" required="">
                        <option data-display="Urutkan">Urutkan</option>
                        <option value="1">Tebaru</option>
                        <option value="2">A-Z</option>
                    </select>
                </div>
                <div>
                    <button class="btn-lgt" >Search</button>
                </div>
            </div>
        </form>
    </div>

    <!-- FILTER SORT END --> 
<hr >
    <!-- RESULT -->
    <div class="result" style="margin: 0px 8px 20px 300px;">
        <div class="row col res">
            <div class="col-sm bg-white ml-4 box-of " onclick="">
                <div>
                    <img class="col-12 pt-4 pkantin-of " src="../assets/img/p-kantin1.jpg">
                </div>
                <div class="pt-3 pb-3">
                    <span class="font-weight-bold font18-of" id="judul">Kartu Tanda Mahasiswa</span> <br>
                    <span class="font14-of fontc-6-of" id="status">Hilang </span><br>
                    <span class="font14-of fontc-6-of" id="lokasi">
                        <img src="<?= base_url() ?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;">Gedung Tokong Nanas
                    </span>
                </div>
            </div>
            <div class="col-sm bg-white ml-4 box-of " onclick="">
                <div>
                    <img class="col-12 pt-4 pkantin-of " src="../assets/img/p-kantin1.jpg">
                </div>
                <div class="pt-3 pb-3">
                    <span class="font-weight-bold font18-of" id="judul">Kartu Tanda Mahasiswa</span> <br>
                    <span class="font14-of fontc-6-of" id="status">Ditemukan </span><br>
                    <span class="font14-of fontc-6-of" id="lokasi">
                        <img src="<?= base_url() ?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;">Gedung Panambulai
                    </span>
                </div>
            </div>
            <div class="col-sm bg-white  ml-4 box-of " onclick="">
                <div>
                    <img class="col-12 pt-4 pkantin-of " src="../assets/img/p-kantin1.jpg">
                </div>
                <div class="pt-3 pb-3">
                    <span class="font-weight-bold font18-of" id="judul">Modul PBO</span> <br>
                    <span class="font14-of fontc-6-of" id="status">Hilang </span><br>
                    <span class="font14-of fontc-6-of" id="lokasi">
                        <img src="<?= base_url() ?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;">Ged. F

                    </span>
                </div>
            </div>
        </div>

    </div>
    <div class="result" style="margin: 0px 8px 20px 300px;">
        <div class="row col res">
            <div class="col-sm bg-white ml-4 box-of " onclick="">
                <div>
                    <img class="col-12 pt-4 pkantin-of " src="../assets/img/p-kantin1.jpg">
                </div>
                <div class="pt-3 pb-3">
                    <span class="font-weight-bold font18-of" id="judul">Kartu Tanda Mahasiswa</span> <br>
                    <span class="font14-of fontc-6-of" id="status">Hilang </span><br>
                    <span class="font14-of fontc-6-of" id="lokasi">
                        <img src="<?= base_url() ?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;">Gedung Tokong Nanas
                    </span>
                </div>
            </div>
            <div class="col-sm bg-white ml-4 box-of " onclick="">
                <div>
                    <img class="col-12 pt-4 pkantin-of " src="../assets/img/p-kantin1.jpg">
                </div>
                <div class="pt-3 pb-3">
                    <span class="font-weight-bold font18-of" id="judul">Kartu Tanda Mahasiswa</span> <br>
                    <span class="font14-of fontc-6-of" id="status">Ditemukan </span><br>
                    <span class="font14-of fontc-6-of" id="lokasi">
                        <img src="<?= base_url() ?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;">Gedung Panambulai
                    </span>
                </div>
            </div>
            <div class="col-sm bg-white  ml-4 box-of " onclick="">
                <div>
                    <img class="col-12 pt-4 pkantin-of " src="../assets/img/p-kantin1.jpg">
                </div>
                <div class="pt-3 pb-3">
                    <span class="font-weight-bold font18-of" id="judul">Modul PBO</span> <br>
                    <span class="font14-of fontc-6-of" id="status">Hilang </span><br>
                    <span class="font14-of fontc-6-of" id="lokasi">
                        <img src="<?= base_url() ?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;">Ged. F

                    </span>
                </div>
            </div>
        </div>

    </div>
<div class="result" style="margin: 0px 8px 20px 300px;">
        <div class="row col res">
            <div class="col-sm bg-white ml-4 box-of " onclick="">
                <div>
                    <img class="col-12 pt-4 pkantin-of " src="../assets/img/p-kantin1.jpg">
                </div>
                <div class="pt-3 pb-3">
                    <span class="font-weight-bold font18-of" id="judul">Kartu Tanda Mahasiswa</span> <br>
                    <span class="font14-of fontc-6-of" id="status">Hilang </span><br>
                    <span class="font14-of fontc-6-of" id="lokasi">
                        <img src="<?= base_url() ?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;">Gedung Tokong Nanas
                    </span>
                </div>
            </div>
            <div class="col-sm bg-white ml-4 box-of " onclick="">
                <div>
                    <img class="col-12 pt-4 pkantin-of " src="../assets/img/p-kantin1.jpg">
                </div>
                <div class="pt-3 pb-3">
                    <span class="font-weight-bold font18-of" id="judul">Kartu Tanda Mahasiswa</span> <br>
                    <span class="font14-of fontc-6-of" id="status">Ditemukan </span><br>
                    <span class="font14-of fontc-6-of" id="lokasi">
                        <img src="<?= base_url() ?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;">Gedung Panambulai
                    </span>
                </div>
            </div>
            <div class="col-sm bg-white  ml-4 box-of " onclick="">
                <div>
                    <img class="col-12 pt-4 pkantin-of " src="../assets/img/p-kantin1.jpg">
                </div>
                <div class="pt-3 pb-3">
                    <span class="font-weight-bold font18-of" id="judul">Modul PBO</span> <br>
                    <span class="font14-of fontc-6-of" id="status">Hilang </span><br>
                    <span class="font14-of fontc-6-of" id="lokasi">
                        <img src="<?= base_url() ?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;">Ged. F

                    </span>
                </div>
            </div>
        </div>

    </div>

    <!-- RESULT END -->
</body>

</html>