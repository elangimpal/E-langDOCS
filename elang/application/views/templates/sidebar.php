<!-- ini side bar -->

<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/sidebar.css">
<div class="sidenav">
            <div class="profile">
                <h5>LAMAN PROFILE</h5>
            </div>

            
            <a href="#demo" class="btn" style="background-color:#142E3F; color:white; margin-left:-80px" data-toggle="collapse"><b>Dashboard</b></a>
            <div id="demo" class="collapse">
                <a href="<?= base_url('index.php/formDitemukan')?>">Menemukan Barang</a>
                <a href="<?= base_url('index.php/formHilang')?>">Kehilangan Barang Barang</a>
            </div>
            <a href="<?= base_url('index.php/Notifikasi')?>">Notifikasi</a>
            <a href="<?= base_url('index.php/BarangHilang')?>">Barang Hilang</a>
            <a href="<?= base_url('index.php/BarangDitemukan')?>">Barang Ditemukan</a>
            <a href="#clients">Pengaturan</a>
        </div>
