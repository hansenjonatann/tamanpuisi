<?php 

    require 'config.php';

    if( isset($_POST["signup"]) ) {

        if(register($_POST) > 0) {
            echo "<script>
                alert('Akun berhasil didaftarkan');
            </script>";
            header("location: login.php");
        } else{
            echo mysqli_error($conn);
        }
        
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taman Puisi | SignUp</title>
        <style>
            body{
                background: #39c0de;
                font-family: sans-serif;
            }

            .tulisan_signup{
                text-align: center;
                text-transform: uppercase;
            }

            .kotak_signup{
                width: 360px;
                background: white;
                margin: 80px auto;
                padding: 30px 20px;
                border-radius: 35px;
            }

            label{
                font-size: 11pt;
            }

            .form_signup{
                box-sizing: border-box;
                width: 100%;
                padding: 10px;
                font-size: 11pt;
                margin-bottom: 20px;
/*                color: steelblue;*/
                color: #000333;
                font-weight: 600;
            }

            .tombol_signup{
                background: #39c0de;
                color: white;
                font-size: 11pt;
                width: 100%;
                border: none;
                border-radius: 3px;
                padding: 10px 20px;
            }

            .tombol_signup:hover{
                background: #9bf6ff;
            }

          /*  .link{
                color: #232323;
                text-decoration: none;
                font-size: 11pt;
            }*/
    </style>
</head>
<body>
    <div class="kotak_signup">
        <p class="tulisan_signup">signup</p>

        <form action="" method="post" enctype="multipart/form-data">
            <label for ="username">Username : </label>
            <input type="text" name="username" id="username" class="form_signup" placeholder="Buat Username atau Email Anda..." required>
            <label for ="password">Password : </label>
             <input type="password" name="password" id="password" class="form_signup" placeholder="Buat Kata Sandi Anda..."  required >
             <label for ="cpassword">Konfirmasi Password: </label>
               <input type="password" name="cpassword" id="cpassword" class="form_signup" placeholder="Masukkan Kembali Kata Sandi Anda..." >
               <label for ="gambar">Gambar : </label>
               <input type="file" name="gambar" id="gambar" class="form_signup" > 
             <button type="submit" class="tombol_signup" name="signup">SIGNUP</button>   

             <br>
             <br>
             <center>
                <p>Sudah Punya Akun?<a href="login.php" class="link"> Login</a> Di Sini!</p>
             </center>
        </form>
    </div>
</body>
</html>