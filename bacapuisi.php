<?php 

  require 'config.php';
  $id = $_GET['id'];
  $isi = query("SELECT * FROM kirimpuisi WHERE id ='$id'");
  session_start();


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
                <a class="nav-link active-link-custom" href="index.php">BERANDA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kategori.php">BACA PUISI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kirim.php">KIRIM PUISI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tentang.php">TENTANG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kontak.php">KONTAK</a>
              </li>
            </ul>
            <?php if(!isset($_SESSION["username"])) {?>  
              <button type="button" class="btn btn-light btn-login-custom"><a href="login.php" id="login">LOGIN</a></button>
              <?php } ?>
            <?php if(isset($_SESSION["username"])) {?>  
            <div class="dropdown">
                <button class="btn btn-info btn-login-custom" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?= strtoupper($_SESSION["username"]) ?>
                </button>
                <ul class="dropdown-menu bg-info text-white">
                  <!-- <li><a class="dropdown-item" href="edit2.php">Edit Profil</a></li> -->
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </div>
              <?php } ?>
          </div>
        </div>
      </nav>

      <!-- ------------Main-------------- -->
      <section id="main-custom">
      <?php  foreach($isi as $poetry) : ?>
        <?php 

          $kategorix = "";
              switch ($poetry['kategori']) {
              case 1 :
              $kategorix = "Lainnya";
              break;
              case 2 : 
              $kategorix = "Balada";
              break;
              case 3 :
              $kategorix = "Elegi";
              break;
              case 4 : 
              $kategorix = "Epigram";
              break;
              case 5 : 
              $kategorix = "Himne";
              case 6 : 
              $kategorix = "Ode";
              break;
              case 7 :
              $kategorix = "Romansa";
              break;
              default :
              $kategorix = ".";
              break;
        }

         ?>
      <div class="container-md">
          <div class="kertas-custom opacity-0"></div>
          <div class="kertas-custom2 text-center">
                <div class="garismerah-custom"></div>
                <div class="garismerah-custom2"></div>
            <div class="bagian-atas-custom">
                <h6 class="warna-kategori"><b>Kategori: <?= $kategorix; ?> </b></h6>
                <h6 class="tanggal-moderasi"><b>Lolos Moderasi pada: <?php echo date('d F Y') ?></b></h6>
            </div>
            <h1><b><?= $poetry['judul']; ?></b></h1>
            <h6 class="penulis-custom"><b>Oleh: <?= $poetry['nama']; ?></b></h6>
            <p><?= $poetry["isi"]; ?></p>
          </div>
    </div>
  <?php endforeach; ?>
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