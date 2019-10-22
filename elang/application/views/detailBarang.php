
<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Detail Barang</title>

  	<!-- Favicon -->
  	<link href="img/favicon.ico" rel="shortcut icon"/>

  	<!-- Google Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

  	<!-- Stylesheets -->
  	<link rel="stylesheet" href="assets/bootstrap.min.css">
  	<link rel="stylesheet" href="assets/font-awesome.min.css">
  	<link rel="stylesheet" href="assets/owl.carousel.css">

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
  <style>
    .i-size{
      width: 20px;
      height: 20px;
    }
    .ktm-size{
      height: 280px;
    }
    .bg-elang{
      background-color: #E5E5E5;
    }
    .hg-elang{
      height: 650px;
    }
    .btn1-elang{
      background-color: #EC393B;
    }

  </style>
  <body>
    <div class="bg-elang hg-elang">
      <div class="container pt-5 col-7 text-body" style="font-family: 'Roboto', sans-serif;">
        <div class="row p-4 shadow-lg  bg-white rounded">
          <div class="col-12">
            <div class="row">
              <div class="col-4">
                <div class="pl-3">
                  <img  src="<?= base_url('assets/img/ktmh_c.png')?>" class="ktm-size ml-1">
                </div>
                <div class="mt-4">
                  <a style="font-size : 13px;">Bagikan ke</a><br>
                  <span><img src="<?= base_url('assets/icon/i-ig.svg')?>" class="mr-2"><img src="<?= base_url('assets/icon/i-fb.svg')?>" class="mr-2"><img src="<?= base_url('assets/icon/i-twitter.svg')?>" class="mr-2"><img src="<?= base_url('assets/icon/i-googleplus.svg')?>" class="mr-2"></span>
                </div>
              </div>
              <div class="col-8">
                <div>
                  <a class="font-weight-bold" style="font-size : 18px;">Kartu Tanda Mahasiswa</a><br>
                </div>
                <div class="mt-1">
                  <span> <img src="<?= base_url('assets/icon/i-loc.svg')?>" class="mr-1"><a style="font-size : 13px;">GKU KU1.03.03</a></span><br>
                  <span> <img src="<?= base_url('assets/icon/i-calendar.svg')?>" class="mr-1"><a style="font-size : 13px;">10 Oktober 2019</a></span><br>
                  <a style="font-size : 13px;">Kategori: <span>Kartu</span></a><br>
                  <a style="font-size : 13px;">Status  : <span>HILANG</span></a><br>
               </div>
                <div class="mt-3">
                  <a class="font-weight-bold" style="font-size : 14px;">DESKRIPSI</a><br>
                  <a style="font-size : 13px;">Kehilangan KTM sekitar pukul 16:30 setelah kelas Kalkulus IIB. Kemungkinan lokasi hilang di bangku-bangku bagian belakang. Terdapat strap berwarna kuning dengan motif pisang.</a><br>
               </div>
               <div class="mt-3">
                  <a class="font-weight-bold" style="font-size : 14px;">DETAIL</a><br>
                  <div class="row">
                    <div class="col-8" style="font-size : 13px;">
                      <a>Ciri-Ciri:</a><br>
                      <li>Tempat kartu berwarna kuning</li>
                      <li>Tidak terdapat coretan</li>
                      <li>Masih menggunakan tinta nyata</li>
                    </div>
                    <!-- <div class="col-4" style="font-size : 13px;">
                      <a>Hilang Tanggal</a><br>
                      <a>2 Oktober 2019</a><br>
                    </div> -->
                  </div>
              </div>
                <button type="button" class="btn btn1-elang mt-4 btn-md btn-block text-white shadow" href="#">SAYA MENEMUKANNYA</button>
                <!-- href="<?= base_url('index.php/verifikasiBarangD')?>" -->
              </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>

    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  	<script src="assets/js/mixitup.min.js"></script>
  	<script src="assets/js/circle-progress.min.js"></script>
  	<script src="assets/js/owl.carousel.min.js"></script>
  	<script src="assets/js/main.js"></script>
    <!--======================================-->

  </body>

</html>
