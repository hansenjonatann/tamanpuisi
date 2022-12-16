<?php 

  require 'config.php';
  $isi = query("SELECT * FROM kirimpuisi LIMIT 3");
  $isi2 = query("SELECT * FROM kirimpuisi LIMIT 6 " );
  $users = mysqli_query($conn,"SELECT * FROM users");
  session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taman Puisi | Beranda</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <a class="nav-link active-link-custom" href="#">BERANDA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kategori.php">BACA PUISI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="kirim.html" >KIRIM PUISI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tentang.html">TENTANG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kontak.html">KONTAK</a>
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
                  <li><a class="dropdown-item" href="edit2.php">Edit Profil</a></li>
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </div>
              <?php } ?>
          </div>
        </div>
      </nav>

      <!-- ------------Main-------------- -->
      <section id="main-custom">
        <div class="container-md">
          <div class="row">
            <div class="main-text-custom text-center">
              <p>Komunitas Penulis Cerpen Indonesia</p>
              <div class="blue-line-custom"></div>
              <h2>Penyair Datang dan Pergi,</h2>
              <h1>Puisi Mereka Tetap Hidup</h1>
              <p>Puisi adalah salah satu sarana untuk menyampaikan ide atau gagasan terhadap suatu hal atau peristiwa</p>
              <button type="button" class="btn btn-info header-btn-custom"><a href="kategori.php">Mulai Membaca</a></button>
            </div>
          </div>
        </div>
      </section>
    </header>

  
      <!-- -------------Recommend Poetry--------------->
    <section id="recommend-custom">
      <div class="container-md">
      <h1 class="sub-title-custom text-center">REKOMENDASI</h1>
      <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="true">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slide1-custom">
              <?php foreach($isi as $poetry) : ?>
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
  } ?>
            <div class="card card-custom" style="width: 18rem;">
              <div class="card-body">
                <a href="bacapuisi.php?id=<?= $poetry['id']?>">
                <h3 class="card-title"><?= $poetry['judul']; ?></h3>
                <div class="category-line-custom"></div>
                <div class="keteranganCard-custom">
                <h6 class="card-subtitle mb-2">Kategori:<?= $kategorix; ?></h6>
                <h6 class="card-subtitle mb-2">Puisi dari: <?= $poetry['nama']; ?></h6>
                <h6 class="card-subtitle mb-2">Lolos Moderasi pada: <?php echo date('d-M-Y'); ?></h6>
              </div>
              </a>
             </div>
            </div>
          <?php endforeach; ?>
              </div>
        </div>
    </div>
    </div>
    </section>


  <!-- -------------------Quotes------------------>
  <section id="quotes-custom">
    <div class="container-md">
      <div class="row">
        <div class="col-md-6">
          <img src="gambar/wsrendra2.jpg" alt="">
        </div>
        <div class="col-md-6 quotes-text-custom">
          <h3 class="quotes-text-custom"> "Kesadaran adalah matahari, kesabaran adalah bumi, keberanian menjadi cakrawala, dan perjuangan adalah pelaksanaan kata-kata."</h3>
          <h3 class="quotes-name-custom">- W.S Rendra</h3>
        </div>
      </div>
    </div>
  </section>


<!-------------------- Newest and Popular ------------------------>
<section id="new-and-popular-custom">
  <div class="container-md">
  <div class="row">
    <div class="col-md-12">
      <h1 class="sub-title-custom  text-center">Puisi Terbaru</h1>
      <?php $i = 0; ?>
            <?php foreach($isi2 as $poetry) : ?>
                   <?php 
               $kategorixx = "";
              switch ($poetry['kategori']) {
              case 1 :
              $kategorixx = "Lainnya";
              break;
              case 2 : 
              $kategorixx = "Balada";
              break;
              case 3 :
              $kategorixx = "Elegi";
              break;
              case 4 : 
              $kategorixx = "Epigram";
              break;
              case 5 : 
              $kategorixx = "Himne";
              case 6 : 
              $kategorixx = "Ode";
              break;
              case 7 :
              $kategorixx = "Romansa";
              break;
              default :
              $kategorixx = ".";
              break;
  } ?>

        <div class="col-md-9 card-center-custom">
          <div class="card card2-custom">
            <div class="card-body card2-body-custom">
            <a href="bacapuisi.php?id=<?= $poetry['id']?>">
              <div class="card2-number-custom">
                <h1><?= $poetry['id']; ?></h1>
              </div>
              <div class="card2-content-custom">
                <h4 class="card-title"><?= $poetry['judul']; ?></h4>
                <div class="category-line2-custom"></div> 
                <p class="card-text">Oleh: <?= $poetry['nama']; ?></p>

              </div>
              <div class="card2-author-custom">
                <p class="card-text">Kategori: <?= $kategorixx; ?></p>
              </div>
              </a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
          <?php $i++; ?>
      </div>
      </div>
</div>
</section>

<!-- --------------Footer-------------->
<footer>
<div class="card text-center text-bg-dark footer-card-custom" >
  <div class="card-body footer-body-custom">
    <img src="gambar/TAMAN PUISI.png" alt="taman puisi logo">
    <h5 class="card-title">Kelompok 3 - Teknik Pemograman - 1SIMA20221 - Universitas Internasional Batam</h5>
    <p class="card-text">Website ini dirancang dan dibangun dengan cinta oleh kelompok 3. Kami menyediakan sebuah media untuk para pecinta puisi di seluruh Indonesia, <br> memberikan solusi dalam rangka kurangnya media untuk berkarya sastra puisi.</p>
    <div class="footer-social-media-custom">
      <a href="https://id-id.facebook.com/UIB.GoInternational/"><img src="gambar/facebook.png"></a>
      <a href="https://www.instagram.com/universitasinternasionalbatam/?hl=en"><img src="gambar/instagram.png"></a>
      <a href="https://twitter.com/uibatam"><img src="gambar/twitter.png"></a>
      <a href="https://www.youtube.com/@UIBChannelHumas"><img src="gambar/youtube.png"></a>
    </div>
  <div class="card-footer footer-copyright-custom">Copyright Ⓒ 2022 All Right Deserved</div>
</div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>