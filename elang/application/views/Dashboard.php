<!-- manggil navbar -->
<?php $this->load->view('templates/navbar')?>
<link href="img/elang.ico" rel="shortcut icon" />

<body>
    <div class="container">
        <!-- ini side bar -->
        <div class="sidenav">
            <div class="profile">
                <h5>LAMAN PROFILE</h5>
            </div>

            <a href="<?= base_url('index.php/Dashboard')?>" style="color:white"><b>Dashboard</b></a>
            <a href="<?= base_url('index.php/Notifikasi')?>">Notifikasi</a>
            <a href="<?= base_url('index.php/BarangHilang')?>">Barang Hilang</a>
            <a href="<?= base_url('index.php/BarangDitemukan')?>">Barang Ditemukan</a>
            <a href="<?= base_url('index.php/Profile')?>">Pengaturan</a>
        </div>

        <!-- ini main/body -->
        <div class="main">
            <div class="d-flex" style="width:1010px; height:130px; margin-left:180px; margin-top:20px">
                <div class="txt">
                    <h2>Temukan Barangmu Disini.</h2>
                    <h6 style="text-align: left">Lebih dari 100 barang telah dikembalikan</h6>
                </div>
                <div class="cari">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="d-flex bg-white border-bottom-0 border-top-0 shadow-sm" style="width:1010px; height:330px; margin-left:180px; margin-top:80px; border-radius:15px;">
                <div class="col-sm-5 border-bottom-0 border-top-0 shadow-sm" style="margin:40px; background-color:lightblue; border-radius:10px">
                    <a href="<?= base_url('index.php/formHilang')?>">
                        <div class="img2">
                            <img src="<?= base_url('assets/img/lost-item.png')?>" style="width:110px; height: 110px;">
                        </div>    
                        <div class="txt2">
                            <h4 style="color:black">Kehilangan Barang</h4>
                        </div>
                    </a>
                    
                </div>
                
                <div class="col-sm-5 border-bottom-0 border-top-0 shadow-sm" style="margin:40px; background-color:lightblue; border-radius:10px">
                    <a href="<?= base_url('index.php/formHilang')?>">
                        <div class="img3">
                            <img src="<?= base_url('assets/img/lost-item.png')?>" style="width:110px; height: 110px;">
                        </div>    
                        <div class="txt3">
                            <h4 style="color:black">Menemukan Barang</h4>
                        </div>
                    </a>    
                    
                </div>
            </div>
        </div>
    </div>
</body>