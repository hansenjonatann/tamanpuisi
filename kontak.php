<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Taman Puisi | Kontak</title>
    <link rel="stylesheet" href="kontak.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
  </head>
  <body>
  <?php session_start();?>
    <!-- ---------------- Header ----------------- -->
    <header>
      <!-- --------------Navbar------------- -->
      <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-md container-custom">
          <a class="navbar-brand" href="#"
            ><img src="gambar/TAMAN PUISI.png" alt="Logo"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
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
                <a class="nav-link" href="tentang.php">TENTANG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active-link-custom" href="#">KONTAK</a>
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
      
      <!-- -----------------contact-form-custom------------- -->
      <section id="contact-custom">
        <div class="container-md">
          <div class="contact-relative-custom">
          <div class="text-contact-custom text-center">
            <h1>Kontak Kami</h1>
            <p><span>
              Ayo berikan saran, masukan atau bahkan ide-ide baru untuk perkembangan Taman Puisi kedepannya???
            </span>
            </p>
            <p><span>Telepon:</span> 0812-xxxx-xxxx</p>
            <p><span>Email:</span> Kelompok3tekpro@gmail.com</p>
            <p><span>Alamat:</span> Universitas Internasional Batam</p>
          </div>
          <form action="kontakcode.php" method="post">
            <div class="row">
              <div class="col-md-6">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namapengguna">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              <div id="emailHelp" class="form-text">Kami tidak akan membagikan alamat email anda kepada orang lain</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
              <input type="tel" class="form-control" name="notelepon">
              <div id="emailHelp" class="form-text">Kami tidak akan membagikan nomor telepon anda kepada orang lain</div>
            </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <textarea class="form-control text-area-custom" placeholder="Tinggalkan pesan anda di sini!" id="floatingTextarea2" style="height: 100px" name="pesan"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
            <button type="submit" class="btn btn-info submit-btn-custom" name="submit">Kirim</button>
          </div>
          </div>
          </form>
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
    </header>
  </body>
</html>
