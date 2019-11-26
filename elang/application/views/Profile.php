<?php $this->load->view('templates/navbar') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaturan Profil</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/profile.css">
    <link rel="stylesheet" href="assets/bootstrap.min.css">

    <!-- Favicon -->
    <link href="img/elang.ico" rel="shortcut icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
    input[type=text] {
        width: 500px;
    }
</style>

<body>

    <!-- ini side bar -->
    <?php $this->load->view('templates/sidebar') ?>

    <!-- Modal Ganti Password -->
    <div id="modalPassword" class="modal fade">
        <div class="modal-dialog modal-login modal-sm" style="margin-top: 14%;">
            <div class="modal-content">
                <form action="#" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title" style="margin-left: 15%;">Ganti kata sandi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kata sandi lama</label>
                            <input type="password" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Kata sandi baru</label>
                            <input type="password" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary pull-right" value="Ganti Sandi">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal HAPUS AKUN -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="margin-top: 14%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel" style="margin-left: 35%;">HAPUS AKUN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus akun anda? Akun tidak bisa diperoleh kembali setelah ini.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Hapus akun</button>
                </div>
            </div>
        </div>
    </div> -->


    <!-- ini body profile -->
    <div style="margin-top: 8.9%; margin-left: 24%">
        <h2>Pengaturan Profil</h2>
    </div>
    <div class="container" style="margin-left: 23.5%; margin-top: 2.5%;">
        <div class="row">
            <div class="col-3" style="width: 600px;">
                <div class="boxed boxed--lg boxed--border" style="box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15); border-radius: 30px;">
                    <div class="text-block text-center">
                        <img src="<?= base_url('assets/img/profile/profile-pic.jpg') ?>" alt="Avatar" class="avatar" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25); width: 75px; height: 75px; border-radius: 50%; margin-right: 38%; margin-top: 10%;">
                        <br><br><br><br>
                        <!-- $data['user'] = $this->db->where('username', $username); -->
                        <h5 style="color: cadetblue; margin-top: 20px;">Shahnaz</h5>
                        <span>Shahnaz Nur Asyifa</span><br>
                    </div>
                    <hr>
                    <div class="text-block">
                        <ul class="menu-vertical" style=" list-style-type: none;">
                            <li>
                                <a class="nav-link trigger-btn" href="#modalPassword" data-toggle="modal">Kata Sandi</a>
                            </li>
                            <!-- <li>
                                <a class="nav-link trigger-btn" href="#exampleModal" data-toggle="modal">Hapus Akun</a>
                            </li> --> 
                        </ul>
                        <br>
                    </div>
                </div>
            </div>
            <div style="width: 600px; margin-left: 28px;">
                <div class="boxed boxed--lg boxed--border" style="box-shadow: 0px 10px 35px rgba(0, 0, 0, 0.15); border-radius: 30px;">
                <form action="<?= base_url('index.php/Profile_controller/updateProfile') ?>" method="post">
                    <div class="form-group"><br>
                        <h2 style="margin-left: 5%;">Profil</h2><br>
                        <div class="form-area" style="margin-left: 5%">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="Shahnaz Nur Asyifa"><br>
                            <label>Username</label>
                            <input type="text" class="form-control" id="nama" name="username" value="Shahnaz"><br>
                            <label>Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="ddcantik@gmail.com"><br>
                            <label>No. Ponsel</label>
                            <input type="text" class="form-control" id="noPonsel" name="no_handphone" value="0898989898"><br>
                            <label>Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="Sukabirus"><br>
                            <?php ?>
                        </div>
                        <button id="btnSave" type="submit" class="btn btn-primary" style="margin-left: 69%; margin-top: 2%;">Update Profil</button>
                    </div>
                </form>
                    <br>
                </div>
            </div>
        </div>
    </div>


</body>

</html>