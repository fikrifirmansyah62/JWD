<?php

session_start();

if( !isset($_SESSION["login"]) ){
  header('location: login.php');
  exit;
}
    require 'functions.php';

    if(isset($_POST["submit"]) ) {
       if(tambah($_POST) > 0 ) {
           echo "<script>
                    alert('Data Berhasil Di Tambahkan...!');
                    document.location = 'buku.php';
           </script>";
       }else {
        echo "<script>
        alert('Data Gagal Di Tambahkan...!');
        document.location = 'buku.php';
</script>";
         }
    }
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

    <title>Book</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
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
          <a class="nav-link" aria-current="page" href="index.php"> 
            <i class="bi bi-house-fill">
             Home
          </i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="buku.php">
          <i class="bi bi-book-half"> Book</i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="anggota.php">
            <i class="bi bi-people-fill"> Member</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Peminjaman</a>
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

    <!-- Main -->
    <section id="tambah">
        <div class="container">
            <div class="row">
                <div class="col">
                <h1>BOOK</h1>
                
                <Form action="" method="POST" class="form">
                <label for="judul"  style="padding-top: 10px;">Judul Buku </label>
                <input type="text" name="judul" id="judul" class="form-content" autocomplete="off">

                <label for="buat" style="padding-top: 10px;">Penyusun </label>
                <input type="text" name="penyusun" id="buat" class="form-content" autocomplete="off">

                <label for="terbit" style="padding-top: 10px;">Penerbit </label>
                <input type="text" name="penerbit" id="terbit" class="form-content" autocomplete="off">

                <label for="thn" style="padding-top: 10px;">Tahun </label>
                <input type="text" name="tahun" id="thn" class="form-content" autocomplete="off">

                <button type="submit" name="submit" id="submit-btn" style="margin: 20px auto;">Tambah</button>
                <button name="submit" id="submit-btn" style="margin: 20px auto;"><a href="buku.php">Kembali</a></button>
                </Form>
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