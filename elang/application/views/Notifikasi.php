<!-- manggil navbar -->
<?php $this->load->view('templates/navbar')?>

<body>
    <div class="container">
        <!-- ini side bar -->
        <div class="sidenav">
            <div class="profile">
                <h5>LAMAN PROFILE</h5>
            </div>
            <a href="<?= base_url('index.php/Notifikasi')?>" style="color:white"><b>Notifikasi</b></a>
            <a href="<?= base_url('index.php/BarangHilang')?>">Barang Hilang</a>
            <a href="<?= base_url('index.php/BarangDitemukan')?>">Barang Ditemukan</a>
            <a href="#clients">Pengaturan</a>
        </div>

        <!-- ini main/body -->
        <div class="main">
            <div class="d-flex" style="width:1010px; height:130px; margin-left:180px; margin-top:20px">
                <div class="txt">
                    <h2>NOTIFIKASI</h2>
                </div>
                <div class="d-flex detailprof">
                    <div class="txt">
                        <h4>Shahnaz Nur Asyifa</h4>
                        <img src="<?= base_url('assets/img/profile.png')?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10 tabel">
                    <div class="table-responsive">
                        <form action="">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" name="vehicle1" value="semua"> pilih semua
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="vehicle1" value="Bike"> selamat datang di website E-LANG
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="vehicle1" value="Bike"> Mary menemukan barang anda
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="vehicle1" value="Bike"> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="vehicle1" value="Bike"> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="vehicle1" value="Bike"> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="vehicle1" value="Bike"> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    
                </div>
                
            </div>

        </div>
            

        </div>
    </div>
</body>