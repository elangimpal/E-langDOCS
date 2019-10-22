<!-- ini navbar di halaman homepage -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ELANG</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- CSS SENDIRI -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/header.css">

</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#11212E">
    <!-- Brand -->
    <a class="navbar-brand" href="#">
        <img src="<?= base_url('assets/img/elang.ico')?>" alt="" style="width:40px;height:40px;">
    </a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#" style="font-size:18px; color:white"><b>E-LANG</b></a>
        </li>
    </ul>

    <ul class="navbar-nav nav-right">
        <li class="nav-item items">
            <a class="nav-link" href="#" style="color:white"><b>DAFTAR</b></a>
        </li>
        <li class="nav-item items">
            <a class="nav-link" href="<?= base_url('index.php/Notifikasi')?>" style="color:white"><b>MASUK</b></a>
        </li>
        <li class="nav-item items">
            <a class="nav-link" href="#" style="color:white"><b>FAQ</b></a>
        </li>
    </ul>

    </nav>