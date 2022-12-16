<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taman Puisi | Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

  </head>
  <body>
    <!-- HEADER START -->
    <header class="bg-info shadow">

      <div class="container d-flex flex-wrap justify-content-between py-2 text-light">
        Selamat Datang di Halaman Profil...

        <div>
          Hello <b><?= $kontak['nama']; ?></b>
          <a href="#" class="link-danger text-decoration-none fw-bold ms-2">
            <i class="fa-solid fa-sign-out"></i>
            Log Out
          </a>
        </div>
      </div>

    </header>
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <section>
      
      <!-- Container Start -->
      <div class="container py-5">
        <!-- row start -->
        <div class="row">
          
          <!-- Col start -->
          <div class="col-lg-4">
            

            <div class="card text-center p-5">
              <div class="card-body">
                
            <img src="https://wallpapercave.com/wp/wp9566480.png" alt="profil" class="img img-thumbnail w-50 rounded-circle">

            <h2>Nama Pengguna</h2>

            <p class="card-text text-muted">
              Web Developer di hansenjonatann.githubio dan content creator di youtube HJ Codin
            </p>

            <button class="btn btn-info btn-sm">
              <i class="fa-solid fa-pencil me-1"></i>
              Ubah Profil
            </button>

              </div>

            </div>

          </div>
          <!-- Col end -->
          <!-- Col start -->
          <div class="col-lg-8">
            
            <div class="shadow border rounded p-5 mb-5">
              <h2>Tentang Saya</h2>

              <p></p>
            </div>

            <div class="shadow border rounded p-5 mb-5">
              <h2>Informasi Kontak</h2>

              <!-- row start -->
              <div class="row">
                
                <!-- col start -->
                <div class="col-lg-6">
                  
                  <p class="card-text">
                    <span class="text-muted mb-1 d-block">Alamat :</span>
                    <i class="fa-solid fa-map me-2 text-success"></i>
                    <textarea placeholder="Masukkan Alamat Anda di sini!" class="form-control"></textarea>
                  </p> <!-- alamat end -->

                  <p class="card-text">
                    <span class="text-muted mb-1 d-block">Alamat Email :</span>
                    <input type="email" name="email" class="d-flex">
                  </p><!-- alamat email end -->
                  <p></p><!-- nomor telepon end -->
                  <p></p><!-- alamat website  end -->

                </div>
                <!-- col end -->

                <!-- col start -->
                <div class="col-lg-6">
                  
                  <div>
                    Ikuti saya di :
                  </div>

                </div>
                <!-- col end -->

              </div>
              <!-- row row end -->
            </div>
          
          </div>
          <!-- Col end -->

        </div>
        <!-- row end -->
      </div>
      <!-- Container End -->

    </section>
    <!-- CONTENT END -->

    <!-- FOOTER START -->
    <footer class="text-center bg-dark text-light py-5">
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
    <!-- FOOTER END -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>