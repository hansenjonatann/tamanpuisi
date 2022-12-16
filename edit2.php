<?php 

  require 'config.php';

  // ambil data di url
  $id = $_GET['id'];

  // query data berdasarkan id
  $edit = mysqli_query($conn,"SELECT * FROM users WHERE id = $id LIMIT 1");
  // cek apakah tombol ubah sudah dipencet atau belum
  if(isset($_POST['editted']) ) {



    // cek apakah data berhasil diubah atau tidak
    if(ubah($_POST) > 0) {
    echo "
          <script>
          alert('data berhasil diubah!');
          document.location.href = 'index.php';
          </script>
          ";
  } else {
    echo "
          <script>
            alert('data gagal diubah');
            document.location.href = 'edit2.php';
          </script>
          ";
      }   
  }


 ?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taman Puisi | Edit Profile   </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .col-lg-6{
            margin: auto !important;
        }
        body{
            background-color:#39c0de;
        }
    </style>
  </head>
  <body>
          <!-- CONTENT START -->
    <section>
      
      <!-- Container Start -->
      <div class="container py-5">
        <!-- row start -->
        <div class="row">
          
          <!-- Col start -->
          <div class="col-lg-6">
            

            <div class="card text-center p-5">
              <div class="card-body">
                
            <?php while($data = mysqli_fetch_array($edit)) :  ?>
            <img src="<?= $data['gambar']; ?> alt='profile' class='img img-thumbnail w-50 rounded-circle'">
            <h2><?= $data['username']; ?></h2>

            

            <form action="" method="post" enctype="multipart/form-data">
              <p class="card-text text-muted">
              <input type="text" name="bio" placeholder="Bio" class="form-control" >
            </p>
              <input type="hidden" name="id" value="<?= $data['id']; ?>">
              <input type="hidden" name="id" value="<?= $data['id']; ?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ubah Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" value="<?= $data['username']; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ubah Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Ubah Gambar Profil</label><br>
                    <img src="users/<?= $data['gambar']; ?>"><br>
                    <input class="form-control" type="file" id="formFile" name="gambar">
                </div>
              <?php endwhile; ?>
                <button type="submit" class="btn btn-primary" name="editted">Ubah</button>
                <a href="index.php" class="btn btn-primary">Cancel</a>
                </form>

              </div>

            </div>

          </div>
          <!-- Col end -->
        </div>
        <!-- row end -->
      </div>
      <!-- Container End -->

    </section>
    <!-- CONTENT END -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>