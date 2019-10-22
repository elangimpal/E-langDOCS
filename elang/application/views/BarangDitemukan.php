<!-- manggil navbar -->
<?php $this->load->view('templates/navbar')?> 

<body>
    <div class="container">
        <!-- ini side bar -->
        <div class="sidenav">
            <div class="profile">
                <h5>LAMAN PROFILE</h5>
            </div>
            <a href="<?= base_url('index.php/Notifikasi')?>">Notifikasi</a>
            <a href="<?= base_url('index.php/BarangHilang')?>">Barang Hilang</a>
            <a href="<?= base_url('index.php/BarangDitemukan')?>" style="color:white"><b>Barang Ditemukan</b></a>
            <a href="<?= base_url('index.php/Profile') ?>">Pengaturan</a>
        </div>

        <!-- ini main/body -->
        <div class="main">
            <div class="d-flex" style="width:1010px; height:130px; margin-left:180px; margin-top:20px">
                <div class="txt">
                    <h2>Barang Ditemukan</h2>
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
                        <form action="">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" name="vehicle1" value="semua"> Nama Barang
                                        </th>
                                        <th>Kategori</th>
                                        <th>Lokasi</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="vehicle1" value="Bike"> Modul APPL
                                        </td>
                                        <td>Buku</td>
                                        <td>LABIF 03</td>
                                        <td>01 - 03 - 2019</td>
                                        <td style="color:green">DIKLAIM</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="vehicle1" value="Bike">
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="vehicle1" value="Bike"> 
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="vehicle1" value="Bike"> 
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="vehicle1" value="Bike"> 
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="vehicle1" value="Bike"> 
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                </div>
            </div>
        </div>
    </div>
</body>