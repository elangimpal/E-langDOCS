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
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/button-file.css">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Page Preloder -->
  

     <!-- Header section -->
     <nav class="navbar navbar-expand-sm navbar-dark navbar-dd" style="background-color:#11212E">
        <!-- Brand -->
        <a class="navbar-brand" href="">
            <img src="<?= base_url('assets/img/logo.png')?>" alt="">
        </a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#" style="font-size:18px; color:white"><b>E-LANG</b></a>
            </li>
        </ul>

        <ul class="navbar-nav nav-right">
            <li class="nav-item items li-dede" id="">
                <!-- Dropdown -->
                <li class="nav-item dropdown li-dede">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white">
                    <b>Shahnaz</b>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Edit Profil</a>
                    <a class="dropdown-item" href="<?= base_url('index.php/Home')?>">Keluar</a>
                </div>
                </li>
            </li>
            <li class="nav-item items li-dede">
                <a class="nav-link" href="#" style="color:white"><b>FAQ</b></a>
            </li>
        </ul>

    </nav>
    <!-- Header section end -->
    <!-- <div class="hero-section set-bg" data-setbg="img/bg-1.png"> -->
    <div class="isi">
    <div class="container p-5 col-8">
            <form action="/action_page.php">
                <div class="row">
                    <div class="col-25 media">
                        <img id="image1"src="<?= base_url('assets/img/logo.png')?>" class="img" alt="Gambar">
                    </div>
                    <div class="col-75 media-body">
                        <label for="imgInp">Gambar</label>
                        <p>Format gambar .jpg .jpeg dan ukuran minimum 300 x 300px (Untuk gambar optimal ukuran 700 x 700px)</p>
                        <input type="file" id="imgInp" multiple="multiple" hidden="hidden"/>
                        <button type="button" id="custom-button">Unggah</button>
                        <span id="custom-text">Pilih Gambar Produk</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="namaBarang">Nama Barang</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="namaBarang" name="namaBarang" placeholder="Masukkan nama barang">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lokasi">Lokasi</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lokasi" name="lokasi" placeholder="Masukkan lokasi kehilangan barang">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="tanggal">Tanggal</label>
                    </div>
                    <div class="col-75">
                        <input type="date" id="tanggal" name="tanggal">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="desc">Deskripsi</label>
                    </div>
                    <div class="col-75">
                        <textarea id="desc" name="desc" placeholder="Berikan informasi dengan jelas dan sedetail mungkin mengenai barang anda yang hilang." style="height:200px"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="kategori">Kategori</label>
                    </div>
                    <div class="col-75">
                        <select id="kategori" name="kategori">
                            <option value="buku">Buku</option>
                            <option value="kartuAtm">Kartu ATM</option>
                            <option value="kartuID">Kartu Identitas</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div id="myDIV" class="header col-25">
                        <label for="ciriciri">Ciri-ciri</label>
                    </div>
                    <div class="col-50">
                        <input type="text" id="myInput" placeholder="Contoh: warna, merek, ukuran.">
                    </div>
                    <div class="col-25">
                        <span onclick="newElement()" class="addBtn">+ Tambahkan ciri-ciri </span>
                    </div>

                </div>
                <div class="row ">
                    <div class="col-25">
                        <label></label>
                    </div>
                    <div class="col-25">
                        <div style="margin-left: 10px !important; padding-left: 10px !important;"><ul id="myUL"></ul></div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="ciriKhusus">Ciri Khusus</label>
                    </div>
                    <div class="col-50">
                        <input type="text" id="ciriKhusus" name="ciriKhusus" placeholder="Contoh: Nomor kartu.">
                    </div>
                    <div class="col-25">
                        <p style="padding-left:10px !important;">*Mohon berikan ciri khusus yang unik</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="petunjuk">Petunjuk</label>
                    </div>
                    <div class="col-50">
                        <input type="text" id="petunjuk" name="petunjuk" placeholder="Masukkan petunjuk dari ciri khusus.">
                    </div>
                </div>
                <div class="row">
                    <input class="btnSub"type="submit" value="Simpan">
                </div>
            </form>
        </div>
    </div>
        

    <!-- </div> -->

    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/circle-progress.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/button-file.js"></script>
    <script type="text/javascript">
        
    </script>

    <!--======================================-->

</body>

</html>
