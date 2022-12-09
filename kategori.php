<?php

require 'kirim.php';

$result = mysqli_query($conn, "SELECT * FROM kirimpuisi");

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Taman Puisi | Kategori</title>
  <link rel="stylesheet" href="kategori.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <!-- ---------------- Header ----------------- -->
  <header>
    <!-- --------------Navbar------------- -->
    <nav class="navbar navbar-expand-lg navbar-custom">
      <div class="container-md container-custom">
        <a class="navbar-brand" href="#"><img src="gambar/TAMAN PUISI.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5 ul-custom">
            <li class="nav-item">
              <a class="nav-link" href="index.html">BERANDA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active-link-custom" href="#">KATEGORI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kirim.html">KIRIM PUISI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tentang.html">TENTANG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontak.html">KONTAK</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2 search-custom" type="search" placeholder="Search" aria-label="Search">
            <button class="btn search-btn-custom" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- --------------------------Navbar Kecil-------------------------->
    <nav class="navbar navbar-expand-lg navbar-kecil-custom">
      <div class="container-md container-custom">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto ul-nav-kecil-custom">
            <li class="nav-item">
              <a class="nav-link" href="#terbaik">Terbaik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Terbaru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Rekomendasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Balada</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Elegi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Epigram</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Himne</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ode</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Romansa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Satire</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Lainnya
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Horror</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- ---------------Isi------------- -->
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <section id="terbaik">
        <div class="container-md">
          <div class="judul">
            <h1 class="text-center">Terbaik</h1>
          </div>
          <div class="isi">
            <div class="card card-custom" style="width: 18rem;">
              <div class="card-body">
                <h3 class="card-title text-center"><?= $row['judul']; ?></h3>
                <div class="category-line-custom"></div>
                <div class="keteranganCard-custom">
                  <h6 class="card-subtitle mb-2">Kategori: <?= $row{
                                                            'kategori'}; ?></h6>
                  <h6 class="card-subtitle mb-2">Puisi dari: <?= $row{
                                                              'nama'}; ?></h6>
                  <h6 class="card-subtitle mb-2">Lolos Moderasi pada: 20 Oktober 2022</h6>
                </div>
              </div>
            </div>
          <? } ?>
          </div>
        </div>
      </section>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>