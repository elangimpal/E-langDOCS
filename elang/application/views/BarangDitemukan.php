<!-- manggil navbar -->
<?php $this->load->view('templates/navbar')?> 

<body>
    <div class="container">
        <!-- ini side bar -->
        <?php $this->load->view('templates/sidebar')?>

        <!-- ini main/body -->
        <div class="main">
            <div class="d-flex" style="width:1010px; height:130px; margin-left:180px; margin-top:20px">
                <div class="txt">
                    <h2>Barang Ditemukan</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10 tabel">
                        <form action="">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama Barang</th>
                                        <th>Kategori</th>
                                        <th>Lokasi</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Modul APPL</td>
                                        <td>Buku</td>
                                        <td>LABIF 03</td>
                                        <td>01 - 03 - 2019</td>
                                        <td style="color:green">DIKLAIM</td>
                                    </tr>
                                    <tr>
                                        <td>HP Samsung A10s</td>
                                        <td>Gadget</td>
                                        <td>MSU</td>
                                        <td>10 - 02 - 2019</td>
                                        <td style="color:green">DIKLAIM</td>
                                    </tr>
                                    <tr>
                                        <td>Dompet</td>
                                        <td>Lain-lain</td>
                                        <td>GKU</td>
                                        <td>05 - 01 - 2019</td>
                                        <td style="color:green">DIKLAIM</td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                </div>
            </div>
        </div>
    </div>
</body>