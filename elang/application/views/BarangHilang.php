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
                    <h2>Barang Hilang</h2>
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
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>KTM</td>
                                        <td>Kartu</td>
                                        <td>Situ techno</td>
                                        <td>16 - 02 - 2019</td>
                                        <td style="color:red">HILANG</td>
                                        <td><img src="<?= base_url('assets/img/edit.png')?>" style="width:24px;height:24px;left:929px"> </td>
                                        <td><img src="<?= base_url('assets/img/delete.png')?>" style="width:24px;height:24px;left:979px"> </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Binder</td>
                                        <td>Buku</td>
                                        <td>Kantin Teknik</td>
                                        <td>01 - 01 - 2019</td>
                                        <td style="color:green">DITEMUKAN</td>
                                        <td><img src="<?= base_url('assets/img/edit.png')?>" style="width:24px;height:24px;left:929px"> </td>
                                        <td><img src="<?= base_url('assets/img/delete.png')?>" style="width:24px;height:24px;left:979px"> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                </div>
            </div>
        </div>
    </div>
</body>