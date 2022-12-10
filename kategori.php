<?php 

  //require 'config.php';

  //$puisi = query("SELECT * FROM kirimpuisi");

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
    </nav>

    <!-- ---------------Isi------------- -->
    <!-- =====TERBAIK===== -->
    <section id="terbaik">
      <div class="container-md">
        <div class="judul">
          <h1 class="text-center">Terbaik</h1>
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
    </section>

    <!-- =====TERBARU=====- -->
    <section id="terbaru">
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
    </section>

    <!-- =====REKOMENDASI===== -->
    <section id="rekomendasi">
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
    </section>

    <!-- =====BALADA===== -->
    <section id="balada">
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
    </section>

    <!-- =====ELEGI===== -->
    <section id="elegi">
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
    </section>

    <!-- =====EPIGRAM===== -->
    <section id="epigram">
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
    </section>

    <!-- =====HIMNE===== -->
    <section id="himne">
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
    </section>

    <!-- =====ODE===== -->
    <section id="ode">
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
    </section>

    <!-- =====ROMANSA===== -->
    <section id="romansa">
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
    </section>

      <!-- =====SATIRE===== -->
      <section id="satire">
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
      </section>
      
      <!-- =====HORRROR===== -->
      <section id="horror">
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
      </section>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>