<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taman Puisi | Tentang</title>
    <link rel="stylesheet" href="tentang.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <?php session_start();?>
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
                <a class="nav-link" href="index.php">BERANDA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kategori.php">BACA PUISI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kirim.php">KIRIM PUISI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active-link-custom" href="#">TENTANG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kontak.php">KONTAK</a>
              </li>
            </ul>
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
      
          <!-- --------------Tentang Kami------------- -->
      <section id="tentang-kami-custom">
        <div class="container-md">
        <div class="row">
        <div class="about-text-custom col-md-6">
            <h1>Tentang Kami</h1>
            <h3>Taman Puisi merupakan website yang dibuat oleh kelompok 3 teknik pemograman kelas 1SIMA 20221</h3>
            <p>Pembuatan website ini bertujuan untuk melestarikan karya sastra puisi di Indonesia. Di website ini, kita dapat membaca maupun mengirim puisi. Besar harapan kami agar kedepannya website ini dapat memberikan manfaat yang lebih besar untuk masyarakat, khususnya bagi para pecinta puisi.</p>
            <div class="footer-social-media-custom">
              <button type="button" class="btn btn-info btn-about-custom"><a href="kontak.html">Kontak Kami</a></button>
              <a href="https://id-id.facebook.com/UIB.GoInternational/"><img src="gambar/facebook.png"></a>
              <a href="https://www.instagram.com/universitasinternasionalbatam/?hl=en"><img src="gambar/instagram.png"></a>
              <a href="https://twitter.com/uibatam"><img src="gambar/twitter.png"></a>
              <a href="https://www.youtube.com/@UIBChannelHumas"><img src="gambar/youtube.png"></a>
              </div>
        </div>
        <div class="about-img-custom col-md-6">
            <img src="gambar/aboutfoto.jpg" alt="">
        </div>
        </div>
    </div>
      </section>

        <!-- -------------------Quotes------------------>
  <section id="quotes-custom">
    <div class="container-md">
      <div class="row">
        <div class="col-md-6">
          <img src="gambar/wijitukul.jpg" alt="">
        </div>
        <div class="col-md-6 quotes-text-custom">
          <h3 class="quotes-text-custom"> "Apa guna punya ilmu tinggi kalau hanya untuk mengibuli, apa guna banyak baca buku kalau mulut kau bungkam melulu."</h3>
          <h3 class="quotes-name-custom">- Wiji Thukul</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- ------------------Our Team------------- -->
  <section id="our-team-custom">
    <div class="container-md">
    <h1 class="sub-title-custom text-center">Kelompok 3</h1>
    <div class="flex-custom">
    <div class="card card-custom text-center" style="width: 18rem;">
        <img src="gambar/ourteam.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Jesen Jeverlino</h5>
          <p>Ketua Kelompok</p>
        </div>
      </div>
    <div class="card card-custom text-center" style="width: 18rem;">
        <img src="gambar/ourteam.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Hansen Jonatan</h5>
          <p>Anggota Kelompok</p>
        </div>
      </div>
    <div class="card card-custom text-center" style="width: 18rem;">
        <img src="gambar/ourteam.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Java Ardiandi</h5>
          <p>Anggota Kelompok</p>
        </div>
      </div>
    </div>
    <div class="flex-custom2">
    <div class="card card-custom text-center" style="width: 18rem;">
        <img src="gambar/ourteam.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Davina</h5>
          <p>Anggota Kelompok</p>
        </div>
      </div>
    <div class="card card-custom text-center" style="width: 18rem;">
        <img src="gambar/ourteam.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Eric Farijis</h5>
          <p>Anggota Kelompok</p>
        </div>
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
      <div class="card-footer footer-copyright-custom">Copyright ??? 2022 All Right Deserved</div>
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>