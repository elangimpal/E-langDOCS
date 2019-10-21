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
    <link rel="stylesheet" href="assets/button-file.css">

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
      

	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/bg-1.png">
		<div>
			<div class="hero-text">
            <div class="row">
            <!-- filter -->
            <div class="col-4 col-push-8 p-5" >
                    <div class="container" id="filter">
                    <label for="filter">Filter</label>
                    <div class="input-group md-form form-sm form-2 pl-0">
                        <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <span class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
                                aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <!-- lokasi -->
                    <form action="/action_page.php">
                        <div class="form-inline">
                        <label for="selLok">Lokasi</label>
                        <select class="form-control" id="selLok" name="selLok">
                            <option>Semua</option>
                            <option>Telkom University</option>
                            <option>Tokong Nanas</option>
                            <option>GSG</option>
                        </select>
                        </div>
                        <br>
                    <!-- Kategori -->
                    <div class="form-inline">
                    <label for="selKat">Kategori</label>
                        <select class="form-control" id="selKat" name="selKat">
                            <option>Semua</option>
                            <option>Buku</option>
                            <option>Kartu Identitas</option>
                            <option>Tas</option>
                        </select>
                    </div>
                    <br>
                    <!-- jenis -->
                    <div class="form-inline">
                    <label for="selJenis">Jenis</label>
                        <select class="form-control" id="selJEnis" name="selJenis">
                            <option>Semua</option>
                            <option>Kehilangan</option>
                            <option>Menemukan</option>
                        </select>
                    </div>
                    <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                </div>
                <!-- result -->
                <div class="col-8 col-push-4 p-5" >
                    <div class="container overflow-auto">
                        <div class="card-deck row">
                            <div class="card col">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title" id="judul">Card title</h5>
                                <p class="card-text" id="status">HILANG</p>
                                <p class="card-text" id="lokasi">GKU</p>
                                <p class="card-text" id="update"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card col">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title" id="judul">Card title</h5>
                                <p class="card-text" id="status">HILANG</p>
                                <p class="card-text" id="lokasi">GKU</p>
                                <p class="card-text" id="update"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card col">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title" id="judul">Card title</h5>
                                <p class="card-text" id="status">HILANG</p>
                                <p class="card-text" id="lokasi">GKU</p>
                                <p class="card-text" id="update"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
  
                        </div>      

                        <div class="card-deck row">
                            <div class="card col">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title" id="judul">Card title</h5>
                                <p class="card-text" id="status">HILANG</p>
                                <p class="card-text" id="lokasi">GKU</p>
                                <p class="card-text" id="update"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card col">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title" id="judul">Card title</h5>
                                <p class="card-text" id="status">HILANG</p>
                                <p class="card-text" id="lokasi">GKU</p>
                                <p class="card-text" id="update"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card col">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title" id="judul">Card title</h5>
                                <p class="card-text" id="status">HILANG</p>
                                <p class="card-text" id="lokasi">GKU</p>
                                <p class="card-text" id="update"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>    

                    </div>
                </div>
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