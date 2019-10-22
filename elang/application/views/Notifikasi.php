<!-- manggil navbar -->
<?php $this->load->view('templates/navbar') ?>

<body>
    <div class="container">
        <!-- ini side bar -->
        <?php $this->load->view('templates/sidebar')?>

        <!-- ini main/body -->
        <div class="main">
            <div class="d-flex" style="width:1010px; height:130px; margin-left:180px; margin-top:20px">
                <div class="txt">
                    <h2>NOTIFIKASI</h2>
                </div>
            </div>

            <!-- table notifikasi -->
        <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10 tabel">
                        <form action="">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>
                                            <!-- <input type="checkbox" name="vehicle1" value="Bike"> Selamat datang -->
                                            <div class="col-sm-12 pt-4 p-2 bg-white border-bottom-0 border-top-0 shadow-sm">
                                                <!-- <input type="checkbox" name="vehicle1" value="semua"><div class="col-12"> -->
                                                    <div class="alert alert-secondary" role="alert">
                                                        <a class="row">
                                                            <div class="col-10">
                                                                <span>Ciara</span><span>, </span><span class="fontc-3-of">telah menemukan binder anda, </span>
                                                                <span class="fontc-3-of">13.02 WIB</span>
                                                            </div>
                                                            <div class="btn-group col-2 rounded-lg pl-3 " role="group" aria-label="Basic example">
                                                                <button type="button" class="btn btn-info rounded-lg shadow-sm text-white font14-of" data-toggle="modal" data-target="#modalTampil">Hapus</button>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-sm-12 pt-4 p-2 bg-white border-bottom-0 border-top-0 shadow-sm">
                                                <!-- <input type="checkbox" name="vehicle1" value="semua"><div class="col-12"> -->
                                                    <div class="alert alert-secondary" role="alert">
                                                        <a class="row">
                                                            <div class="col-10">
                                                                <span>Maya</span><span>, </span><span class="fontc-3-of">telah menemukan KTM anda, </span>
                                                                <span class="fontc-3-of">10.15 WIB</span>
                                                            </div>
                                                            <div class="btn-group col-2 rounded-lg pl-3 " role="group" aria-label="Basic example">
                                                                <button type="button" class="btn btn-info rounded-lg shadow-sm text-white font14-of" data-toggle="modal" data-target="#modalTampil">Hapus</button>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <div class="col-sm-12 pt-4 p-2 bg-white border-bottom-0 border-top-0 shadow-sm">
                                                <!-- <input type="checkbox" name="vehicle1" value="semua"><div class="col-12"> -->
                                                    <div class="alert alert-secondary" role="alert">
                                                        <a class="row">
                                                            <div class="col-10">
                                                                <span>Hi shahnaz</span><span>, </span><span class="fontc-3-of">selamat datang di website kami, </span>
                                                                <span class="fontc-3-of"></span>
                                                            </div>
                                                            <div class="btn-group col-2 rounded-lg pl-3 " role="group" aria-label="Basic example">
                                                                <button type="button" class="btn btn-info rounded-lg shadow-sm text-white font14-of" data-toggle="modal" data-target="#modalTampil">Hapus</button>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                </div>
            </div>
            <!-- end table notifikasi -->
        </div>
        <!-- end main -->
    </div>
    <!-- end container -->
</body>