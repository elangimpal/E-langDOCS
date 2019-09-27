<!DOCTYPE html>
<html lang="en">
<head>
	<title>ELANG</title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
  
	<link rel="stylesheet" href="assets/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome.min.css">
	<link rel="stylesheet" href="assets/owl.carousel.css">
	<link rel="stylesheet" href="assets/style.css">

	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#"> <img src="https://portal.merauke.go.id/files/momo.png" alt="" style="width:25px; height:25px;margin-right:20px;"><b>E-LANG</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <form class="my-2 my-lg-0">
            <div class="dropdown" style="margin-left:-90px;margin-bottom: -37px;">
                <button type="button" class="btn btn-dark dropdown-toggle " data-toggle="modal" data-target="#exampleModa3">shahnaz</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Edit Profil</a>
                    <a class="dropdown-item" href="#">Keluar</a>
                </div>
            </div>
		   <button type="button" class="btn btn-dark">FAQ</button>
          </form>
        </div>  
    </nav>
	<!-- Header section end -->
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModa3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
                    <a href="LamanProfile.html"><button type="button" class="btn btn-danger">edit profil</button></a> 
                    <a href="index.html"><button type="button" class="btn btn-danger">keluar</button></a> 
            </div>
          </div>
        </div>
      </div>


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<h2>TEMUKAN BARANGMU DISINI.</h2>
				<p>Lebih dari 1000 barang telah dikembalikan</p>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<form class="intro-newslatter">
						<input type="text" placeholder="Cari barang" style="margin-left:31%;text-align: center;">
                        <a href="cari.html"><button type="button" class="btn btn-basic" style="background-color: tan;margin-top: -45px;height:53px;margin-left: -15px;">Cari</button></a>
                       <a href="<?= site_url("formHilang_controller")?>"><button type="button" class="site-btn" id="lost">Saya kehilangan sesuatu</button></a> 
						<button type="button" data-toggle="modal" data-target="" class="site-btn" id="found" style="margin-left: 90px;">Saya menemukan sesuatu</button>
					</form>
				</div>
			</div>
		</div>
	</section>
    <!-- Hero section end -->
  
    

    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/mixitup.min.js"></script>
	<script src="assets/js/circle-progress.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>