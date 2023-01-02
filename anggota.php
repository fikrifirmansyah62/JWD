<?php

session_start();

if( !isset($_SESSION["login"]) ){
  header('location: login.php');
  exit;
}

  require 'functions.php';
  $anggota = query ("SELECT * FROM anggota ORDER BY nama ASC");

  //tombol cari
  if(isset($_POST["cari"])) {
    $anggota = cari2($_POST["keyword"]);
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

    <title>Member</title>
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
          <a class="nav-link" aria-current="page" href="index.php">
          <i class="bi bi-house-fill">
            Home
          </i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="buku.php">
            <i class="bi bi-book-half"> Book</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="anggota.php">
          <i class="bi bi-people-fill"> Member</i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Peminjaman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
          <i class="bi bi-box-arrow-left"> Logout</i>
          </a>
        </li>
    </div>
  </div>
</nav>

    <!-- content -->
    <sections id="buku">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <h1>MEMBER</h1>

            <div class="col mt-5">
              <table class="table caption-top">
                <caption>List of Member</caption>
                
                <a href="tambah_anggota.php" class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">Tambah Data Anggota</a>
                
                <form action="" method="POST">
                <input type="text" name="keyword" placeholder="Search" class="ms-5 me-1" autofocus autocomplete="off">
                <button type="submit" name="cari" class="btn btn-success"><i class="bi bi-search"></i></button>
                </form>
                
                <thead>
                  <tr class="text-center">
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomer HP</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($anggota as $row) :?>
                  <tr>
                    <td class="text-center"><?= $i ?></td>
                    <td><?= $row["nama"] ?></td>
                    <td class="text-center"><?= $row["email"] ?></td>
                    <td class="text-center"><?= $row["no_hp"] ?></td>
                    <td class="text-center"><?= $row["alamat"] ?></td>
                    <td class="text-center">
                    <a href="update_anggota.php?ID=<?= $row ["ID"]; ?>">Edit</a> || 
                    <a href="hapus_anggota.php?ID=<?= $row["ID"]; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">Delete</a> </td>
                  </tr>
                  <?php $i++ ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </sections>
    
     <!-- footer -->
     <div class="container-fluid bg-light p-2 text-dark bg-opacity-50 text-center">
      <div class="row fw-bold">
        <div class="col">Copyright &copy;Muhammad Fikri Firmansyah 2021</div>
      </div>
    </div>

 </body>
 </html>