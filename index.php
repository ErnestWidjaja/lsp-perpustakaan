<?php 
include 'model.php';
$isLogin = new Model();
$isLogin->isLogin();
error_reporting(0);

 ?>
<!DOCTYPE html>
<html>
<head>
  <!-- <title>Dashboard</title> -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
  <script type="text/javascript" href="asset/js/jquery.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Perpustakaan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="peminjaman.php">Peminjaman <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="buku.php">Data Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="anggota.php">Data Anggota</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="petugas.php">Data Petugas</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" action="proses.php" method="post">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="logout">Logout</button>
      </form>
    </div>
  </nav>
</body>
</html>