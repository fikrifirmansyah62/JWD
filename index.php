<?php
  session_start();

	if( !isset($_SESSION["login"]) ){
    header('location: login.php');
		exit;

	}

  include 'functions.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstarp Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <!-- My css -->
    <link rel="stylesheet" href="css/style2.css">

    <title>Welcome To The Library</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand fw-bold" href="index.php">
      <img src="img/icon.jpg" alt="Perpustakaan" width="70" height="30" class="d-inline-block align-text-top">
      LIBRARY
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"> 
          <i class="bi bi-house-fill">
            Home
          </i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="buku.php">
          <i class="bi bi-book-half"> Book</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="anggota.php">
          <i class="bi bi-people-fill"> Member</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="print_laporan.php">Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
          <i class="bi bi-box-arrow-left"> Logout</i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <!-- main -->
    <section id="home">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1>
                    SELAMAT DATANG DI PERPUSTAKA DIGITAL</h1>
                </div>
                <div class="row">
                <div class="col-6 mt-3">
                    <img src="img/1.jpg" alt="foto" class="rounded-3">
                </div>
                <div class="col-6 mt-5">
                    <h2 class="text-center text-uppercase fs-1 mb-3 mt-2">
                        Perpustakaan Digital
                    </h2>
                    <p class="text-lg-start">
                    Digital Library adalah perpustakaan yang mengelola semua atau
                    sebagian yang substansi dari koleksi-koleksinya dalam bentuk
                    komputerisasi sebagai bentuk alternatif, suplemen atau pelengkap
                    terhadap cetakan konvensional dalam bentuk mikro material yang saat
                    ini didominasi koleksi perpustakaan.
                    </p>
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <div class="container-fluid bg-light p-2 text-dark bg-opacity-50 text-center">
      <div class="row fw-bold">
        <div class="col">Copyright &copy;Muhammad Fikri Firmansyah 2021</div>
      </div>
    </div>

 </body>
 </html>