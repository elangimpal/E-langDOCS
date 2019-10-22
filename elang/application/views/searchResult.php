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



</head>

<body>
    <!-- Page Preloder -->

    <!-- Header section -->
    <!-- Header section end -->

    <!-- Modal -->


    <!-- Hero section -->
    <div>
        <!-- <div class="hero-text"> -->
        <div class="row">
            <!-- filter -->
            <div class="col-4 col-push-8 p-5">
                <div class="container" id="filter">
                    
                    
                    <!-- lokasi -->
                    <form action="/action_page.php">
                    <h5>Filter</h5>
                        <div class="form-inline">
                            <input class="form-control input-group my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-text1"><img src="<?= base_url()?>img/zoom-out.svg" style=""></span>
                            </div>
                        </div>
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
            <div class="col-8 col-push-4 p-5">
                <div class="font-of">
                    <div class="container pt-5 pr-5 pl-4">
                        <div>
                            <div class="row pt-4">
                                <div class="col-sm bg-white ml-4 box-of ">
                                    <div>
                                        <img class="col-12 pt-4 pkantin-of " src="../assets/img/p-kantin1.jpg">
                                    </div>
                                    <div class="pt-3 pb-3">
                                        <span class="font-weight-bold font18-of" id="judul">Kartu Tanda Mahasiswa</span> <br>
                                        <span class="font14-of fontc-6-of" id="status">Hilang </span><br>
                                        <span class="font14-of fontc-6-of" id="lokasi">
                                            <img src="<?= base_url()?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;">Gedung Tokong Nanas
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm bg-white ml-4 box-of ">
                                    <div>
                                        <img class="col-12 pt-4 pkantin-of " src="../assets/img/p-kantin1.jpg">
                                    </div>
                                    <div class="pt-3 pb-3">
                                        <span class="font-weight-bold font18-of" id="judul">Kartu Tanda Mahasiswa</span> <br>
                                        <span class="font14-of fontc-6-of" id="status">Ditemukan </span><br>
                                        <span class="font14-of fontc-6-of" id="lokasi">
                                            <img src="<?= base_url()?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;">Gedung Panambulai
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm bg-white  ml-4 box-of ">
                                    <div>
                                        <img class="col-12 pt-4 pkantin-of " src="../assets/img/p-kantin1.jpg">
                                    </div>
                                    <div class="pt-3 pb-3">
                                        <span class="font-weight-bold font18-of" id="judul">Modul PBO</span> <br>
                                        <span class="font14-of fontc-6-of" id="status">Hilang </span><br>
                                        <span class="font14-of fontc-6-of" id="lokasi">
                                            <img src="<?= base_url()?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;">Ged. F
                                        
                                        </span>
                                    </div>
                                </div>
                            <div class="row pt-4">
                            <div class="col-sm bg-white ml-4 box-of ">
                                    <div>
                                        <img class="col-12 pt-4 pkantin-of " src="../assets/img/p-kantin1.jpg">
                                    </div>
                                    <div class="pt-3 pb-3">
                                        <span class="font-weight-bold font18-of" id="judul">Kartu Bank ABC</span> <br>
                                        <span class="font14-of fontc-6-of" id="status">Ditemukan</span><br>
                                        <span class="font14-of fontc-6-of" id="lokasi">
                                            <img src="<?= base_url()?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;">Ged.A
                                        
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm bg-white ml-4 mr-4 box-of ">
                                    <div>
                                        <img class="col-12 pt-4 pkantin-of " src="../assets/img/p-kantin1.jpg">
                                    </div>
                                    <div class="pt-3 pb-3">
                                        <span class="font-weight-bold font18-of" id="judul">Kartu Tanda Mahasiswa</span> <br>
                                        <span class="font14-of fontc-6-of" id="status">Ditemukan</span><br>
                                        <span class="font14-of fontc-6-of" id="lokasi">
                                            <img src="<?= base_url()?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;">Lap. Tenis Sukabirus
                                        
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm bg-white ml-4 mr-4 box-of ">
                                    <div>
                                        <img class="col-12 pt-4 pkantin-of " src="../assets/img/p-kantin1.jpg">
                                    </div>
                                    <div class="pt-3 pb-3">
                                        <span class="font-weight-bold font18-of" id="judul">Dompet</span> <br>
                                        <span class="font14-of fontc-6-of" id="status">Hilang </span><br>
                                        <span class="font14-of fontc-6-of" id="lokasi">
                                            <img src="<?= base_url()?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;">Kantin Teknik
                                        
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!--  -->
                            <div class="row pt-4">
                                <div class="col-sm bg-white ml-4 mr-4 box-of ">
                                    <div>
                                        <img class="col-12 pt-4 pkantin-of " src="../assets/img/p-kantin1.jpg">
                                    </div>
                                    <div class="pt-3 pb-3">
                                        <span class="font-weight-bold font18-of" id="judul">Kartu Tanda Mahasiswa</span> <br>
                                        <span class="font14-of fontc-6-of" id="status">Hilang </span><br>
                                        <span class="font14-of fontc-6-of" id="lokasi">
                                            <img src="<?= base_url()?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;">Gedung Tokong Nanas
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm bg-white ml-4 mr-4 box-of ">
                                    <div>
                                        <img class="col-12 pt-4 pkantin-of " src="../assets/img/p-kantin1.jpg">
                                    </div>
                                    <div class="pt-3 pb-3">
                                        <span class="font-weight-bold font18-of" id="judul">Kartu Tanda Mahasiswa</span> <br>
                                        <span class="font14-of fontc-6-of" id="status">Ditemukan </span><br>
                                        <span class="font14-of fontc-6-of" id="lokasi">
                                            <img src="<?= base_url()?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;">Gedung Panambulai
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm bg-white ml-4 mr-4 box-of ">
                                    <div>
                                        <img class="col-12 pt-4 pkantin-of " src="../assets/img/p-kantin1.jpg">
                                    </div>
                                    <div class="pt-3 pb-3">
                                        <span class="font-weight-bold font18-of" id="judul">Modul PBO</span> <br>
                                        <span class="font14-of fontc-6-of" id="status">Hilang </span><br>
                                        <span class="font14-of fontc-6-of" id="lokasi">
                                            <img src="<?= base_url()?>img/map-pin.svg" style="max-width: 16px; max-height: 16px; margin-right: 5px;">Ged. F
                                        
                                        </span>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- </div> -->
            <!-- </section> -->
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