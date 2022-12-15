<?php 

  require 'config.php';
  $puisi = query("SELECT * FROM kirimpuisi");



  // $puisi = query("SELECT kirimpuisi.*, kategori.nama as kategori_nama FROM kirimpuisi  JOIN kategori ON kategori.id = kirimpuisi.kategori_id");

  // tombol cari diklik
  if(isset($_POST['cari']) ) {
    $puisi = cari($_POST["keyword"]);
  }


?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Taman Puisi | Kategori</title>
  <link rel="stylesheet" href="kategori.css">
  <link rel="shorcut icon" type="text/css" href="gambar/TAMAN PUISI.png">
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
              <a class="nav-link active-link-custom" href="#">BACA PUISI</a>
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
    <!-- <form class="d-flex" role="search">
            <input class="form-control me-2 search-custom" type="search" placeholder="Search" aria-label="Search">
            <button class="btn search-btn-custom" type="submit">Search</button>
          </form> -->
          <button type="button" class="btn btn-light btn-login-custom"><a href="login.php" id="login">LOGIN</a></button>
            <button type="button" class="btn btn-info btn-signup-custom"><a href="signup.php">SIGN UP</a></button>
        </div>
      </div>
    </nav>

    <!-- --------------------------Navbar Kecil-------------------------->
    <!-- <nav class="navbar navbar-expand-lg navbar-kecil-custom">
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
              <a class="nav-link" href="#terbaru">Terbaru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#rekomendasi">Rekomendasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#balada">Balada</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#elegi">Elegi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#epigram">Epigram</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#himne">Himne</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#ode">Ode</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#romansa">Romansa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#satire">Satire</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#horror" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Lainnya
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#horror">Horror</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->

    <!-- ------------------Search-------------- -->
    <section id="search">
    <div class="container-md">
    <div class="row mt-3 justify-content-center">
        <div class="col-md-8">
          <h1 class="text-center text-search-custom">Cari Puisi</h1>
          <form action="" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="keyword" placeholder="Judul Puisi" id="search-input" autofocus autocomplete="off">
            <button class="btn btn-info search-btn-custom" type="submit" id="search-button" name="cari">Search</button>
          </div>
          </form>
        </div>
      </div>
      <hr>
    </div>
    </section>

    <!-- ---------------Isi------------- -->
    <!-- =====TERBAIK, DIUBAH MENJADI DAFTAR PUISI===== -->
        <section id="terbaik">
      <div class="container-md">
        <div class="judul">
          <h1 class="text-center">DAFTAR PUISI</h1>
        </div>
        <div class="isi">
        <?php $i = 0; ?>
        <?php foreach($puisi as $poetry) : ?>
          <div class="card card-custom" style="width: 18rem;">
            <div class="card-body">
              <a href="bacapuisi.php?id=<?= $poetry['id']?>">
                <h3 class="card-title"><?= $poetry['judul']; ?></h3>
                <div class="category-line-custom"></div>
                <div class="keteranganCard-custom">
                  <h6 class="card-subtitle mb-2">Kategori: <?= $poetry['kategori']; ?></h6>
                  <h6 class="card-subtitle mb-2">Puisi dari: <?= $poetry['nama']; ?></h6>
                  <h6 class="card-subtitle mb-2">Lolos Moderasi pada: 4 Desember 2022</h6>
                  <form action="bacapuisi.php" method="post">
                  </form>
                </div>
              </a>
            </div>
          </div>
      <?php endforeach; ?>
      <?php $i++; ?>
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

    <!-- =====TERBARU=====- -->
    <!-- <section id="terbaru">
      <div class="container-md">
        <div class="judul">
          <h1 class="text-center">Terbaru</h1>
        </div>
        <div class="isi">
          <div class="card card-custom" style="width: 18rem;">
            <div class="card-body">
              <a href="bacapuisi.html">
                <h3 class="card-title">Doa</h3>
                <div class="category-line-custom"></div>
                <div class="keteranganCard-custom">
                  <h6 class="card-subtitle mb-2">Kategori: Himne</h6>
                  <h6 class="card-subtitle mb-2">Puisi dari: Chairil Anwar</h6>
                  <h6 class="card-subtitle mb-2">Lolos Moderasi pada: 20 Oktober 2022</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- =====REKOMENDASI===== -->
    <!-- <section id="rekomendasi">
      <div class="container-md">
        <div class="judul">
          <h1 class="text-center">Rekomendasi</h1>
        </div>
        <div class="isi">
          <div class="card card-custom" style="width: 18rem;">
            <div class="card-body">
              <a href="bacapuisi.html">
                <h3 class="card-title">Doa</h3>
                <div class="category-line-custom"></div>
                <div class="keteranganCard-custom">
                  <h6 class="card-subtitle mb-2">Kategori: Himne</h6>
                  <h6 class="card-subtitle mb-2">Puisi dari: Chairil Anwar</h6>
                  <h6 class="card-subtitle mb-2">Lolos Moderasi pada: 20 Oktober 2022</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- =====BALADA===== -->
    <!-- <section id="balada">
      <div class="container-md">
        <div class="judul">
          <h1 class="text-center">Balada</h1>
        </div>
        <div class="isi">
          <div class="card card-custom" style="width: 18rem;">
            <div class="card-body">
              <a href="bacapuisi.html">
                <h3 class="card-title">Doa</h3>
                <div class="category-line-custom"></div>
                <div class="keteranganCard-custom">
                  <h6 class="card-subtitle mb-2">Kategori: Himne</h6>
                  <h6 class="card-subtitle mb-2">Puisi dari: Chairil Anwar</h6>
                  <h6 class="card-subtitle mb-2">Lolos Moderasi pada: 20 Oktober 2022</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- =====ELEGI===== -->
    <!-- <section id="elegi">
      <div class="container-md">
        <div class="judul">
          <h1 class="text-center">Elegi</h1>
        </div>
        <div class="isi">
          <div class="card card-custom" style="width: 18rem;">
            <div class="card-body">
              <a href="bacapuisi.html">
                <h3 class="card-title">Doa</h3>
                <div class="category-line-custom"></div>
                <div class="keteranganCard-custom">
                  <h6 class="card-subtitle mb-2">Kategori: Himne</h6>
                  <h6 class="card-subtitle mb-2">Puisi dari: Chairil Anwar</h6>
                  <h6 class="card-subtitle mb-2">Lolos Moderasi pada: 20 Oktober 2022</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- =====EPIGRAM===== -->
    <!-- <section id="epigram">
      <div class="container-md">
        <div class="judul">
          <h1 class="text-center">Epigram</h1>
        </div>
        <div class="isi">
          <div class="card card-custom" style="width: 18rem;">
            <div class="card-body">
              <a href="bacapuisi.html">
                <h3 class="card-title">Doa</h3>
                <div class="category-line-custom"></div>
                <div class="keteranganCard-custom">
                  <h6 class="card-subtitle mb-2">Kategori: Himne</h6>
                  <h6 class="card-subtitle mb-2">Puisi dari: Chairil Anwar</h6>
                  <h6 class="card-subtitle mb-2">Lolos Moderasi pada: 20 Oktober 2022</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- =====HIMNE===== -->
    <!-- <section id="himne">
      <div class="container-md">
        <div class="judul">
          <h1 class="text-center">Himne</h1>
        </div>
        <div class="isi">
          <div class="card card-custom" style="width: 18rem;">
            <div class="card-body">
              <a href="bacapuisi.html">
                <h3 class="card-title">Doa</h3>
                <div class="category-line-custom"></div>
                <div class="keteranganCard-custom">
                  <h6 class="card-subtitle mb-2">Kategori: Himne</h6>
                  <h6 class="card-subtitle mb-2">Puisi dari: Chairil Anwar</h6>
                  <h6 class="card-subtitle mb-2">Lolos Moderasi pada: 20 Oktober 2022</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- =====ODE===== -->
    <!-- <section id="ode">
      <div class="container-md">
        <div class="judul">
          <h1 class="text-center">Ode</h1>
        </div>
        <div class="isi">
          <div class="card card-custom" style="width: 18rem;">
            <div class="card-body">
              <a href="bacapuisi.html">
                <h3 class="card-title">Doa</h3>
                <div class="category-line-custom"></div>
                <div class="keteranganCard-custom">
                  <h6 class="card-subtitle mb-2">Kategori: Himne</h6>
                  <h6 class="card-subtitle mb-2">Puisi dari: Chairil Anwar</h6>
                  <h6 class="card-subtitle mb-2">Lolos Moderasi pada: 20 Oktober 2022</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- =====ROMANSA===== -->
    <!-- <section id="romansa">
      <div class="container-md">
        <div class="judul">
          <h1 class="text-center">Romansa</h1>
        </div>
        <div class="isi">
          <div class="card card-custom" style="width: 18rem;">
            <div class="card-body">
              <a href="bacapuisi.html">
                <h3 class="card-title">Doa</h3>
                <div class="category-line-custom"></div>
                <div class="keteranganCard-custom">
                  <h6 class="card-subtitle mb-2">Kategori: Himne</h6>
                  <h6 class="card-subtitle mb-2">Puisi dari: Chairil Anwar</h6>
                  <h6 class="card-subtitle mb-2">Lolos Moderasi pada: 20 Oktober 2022</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section> -->

      <!-- =====SATIRE===== -->
      <!-- <section id="satire">
        <div class="container-md">
          <div class="judul">
            <h1 class="text-center">Satire</h1>
          </div>
          <div class="isi">
            <div class="card card-custom" style="width: 18rem;">
              <div class="card-body">
                <a href="bacapuisi.html">
                  <h3 class="card-title">Doa</h3>
                  <div class="category-line-custom"></div>
                  <div class="keteranganCard-custom">
                    <h6 class="card-subtitle mb-2">Kategori: Himne</h6>
                    <h6 class="card-subtitle mb-2">Puisi dari: Chairil Anwar</h6>
                    <h6 class="card-subtitle mb-2">Lolos Moderasi pada: 20 Oktober 2022</h6>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      
      <!-- =====HORRROR===== -->
      <!-- <section id="horror">
        <div class="container-md">
          <div class="judul">
            <h1 class="text-center">Horror</h1>
          </div>
          <div class="isi">
            <div class="card card-custom" style="width: 18rem;">
              <div class="card-body">
                <a href="bacapuisi.html">
                  <h3 class="card-title">Doa</h3>
                  <div class="category-line-custom"></div>
                  <div class="keteranganCard-custom">
                    <h6 class="card-subtitle mb-2">Kategori: Himne</h6>
                    <h6 class="card-subtitle mb-2">Puisi dari: Chairil Anwar</h6>
                    <h6 class="card-subtitle mb-2">Lolos Moderasi pada: 20 Oktober 2022</h6>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section> -->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>