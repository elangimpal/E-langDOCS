<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php $this->load->view('templates/header') ?>
</head>

<style>
    body,
    html {
        height: 100%;
        background-color: #24315E;
    }

    .bg {
        /* The image used */
        background-image: url("assets/img/image.jpeg");
        /* Full height */
        height: 100%;
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-blend-mode: soft-light;
        opacity: 0.5;
    }

    #title {
        font-size: 48px;
        text-shadow: 0px 5px 5px rgba(0, 0, 0, 0.15);
    }
</style>

<body>
    <!-- <div style="background-color: #FFF6A9;">
        <br><br><br><br><br><br><br><br><br><br>
    </div> -->
    <div class="bg">
    </div>
    <div id="landing" style=" position: fixed; color: white; left: 25%; top: 45%;">
        <div id="title"><b>TEMUKAN BARANGMU DISINI</b></div>
        <center>
            <h5>Lebih dari 1000 barang telah dikembalikan.</h5>
        </center>
    </div>
    <div>
        <button id="btnKehilangan" type="submit" class="btn btn-primary" style="margin-left: 69%; margin-top: 2%;">Update Profil</button>
        <button id="btnKehilangan" type="submit" class="btn btn-primary" style="margin-left: 69%; margin-top: 2%;">Update Profil</button>

    </div>
</body>

</html>