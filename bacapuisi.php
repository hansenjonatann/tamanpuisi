<?php 

  require 'config.php';

  $isi = query("SELECT * FROM kirimpuisi ");
  



 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taman Puisi | Baca Puisi</title>
    <link rel="stylesheet" href="bacapuisi.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
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
                <a class="nav-link active-link-custom" href="index.html">BERANDA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kategori.php">BACA PUISI</a>
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

      <!-- ------------Main-------------- -->
      <section id="main-custom">
      <?php foreach($isi as $poetry) : ?>
      <div class="container-md">
          <div class="kertas-custom opacity-0"></div>
          <div class="kertas-custom2 text-center">
                <div class="garismerah-custom"></div>
                <div class="garismerah-custom2"></div>
            <div class="bagian-atas-custom">
                <h6 class="warna-kategori"><b>Kategori: <?= $poetry['kategori']; ?> </b></h6>
                <h6 class="tanggal-moderasi"><b>Lolos Moderasi pada: 4 Desember 2022</b></h6>
            </div>
            <h1><b><?= $poetry['judul']; ?></b></h1>
            <h6 class="penulis-custom"><b>Oleh: <?= $poetry['nama']; ?></b></h6>
          <!--   <p>Tuhanku <br>
                Dalam termangu <br>
                Aku masih menyebut nama-Mu <br>
                Biar susah sungguh <br>
                Mengingat Kau penuh seluruh <br>
                CayaMu panas suci <br>
                Tinggal kerlip lilin di kelam sunyi <br>
                
                Tuhanku <br>
                Aku hilang bentuk <br>
                Remuk <br>
                Tuhanku <br>
                Aku mengembara di negeri asing <br>
                Tuhanku <br>
                Di pintu-Mu aku mengetuk <br>
                Aku tidak bisa berpaling</p> -->
          </div>
    </div>
  <?php endforeach; ?>
  <!-- <?php $i//++//; ?> -->
</section>


<!-- --------------Footer-------------->
<footer>
<div class="card text-center text-bg-dark footer-card-custom" >
  <div class="card-body footer-body-custom">
    <img src="gambar/TAMAN PUISI.png" alt="taman puisi logo">
    <h5 class="card-title">Kelompok 3 - Teknik Pemograman - 1SIMA20221 - Universitas Internasional Batam</h5>
    <p class="card-text">Website ini dirancang dan dibangun dengan cinta oleh kelompok 3. Kami menyediakan sebuah media untuk para pecinta puisi di seluruh Indonesia, <br> memberikan solusi dalam rangka kurangnya media untuk berkarya sastra puisi.</p>
    <div class="footer-social-media-custom">
      <a><img src="gambar/facebook.png" alt=""></a>
      <a><img src="gambar/instagram.png" alt=""></a>
      <a><img src="gambar/twitter.png" alt=""></a>
      <a><img src="gambar/youtube.png" alt=""></a>
    </div>
  <div class="card-footer footer-copyright-custom">Copyright Ⓒ 2022 All Right Deserved</div>
</div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>