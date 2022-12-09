<?php 

    require 'config.php';

    if( isset($_POST["signup"]) ) {

        if(register($_POST) > 0) {
            echo "<script>
                alert('Akun berhasil didaftarkan');
            </script>";
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
    <title>Taman Puisi | Sign Up</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
    <div class="container">
        <div id="box">
            <div class="form-control">
                <h1 class="form-title">Sign Up</h1>
                <form action="" method="post">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" name="cpassword" placeholder="Konfirmasi Password">
                    <button type="submit" name="signup">Sign Up</button>
                </form>

                    <br>
                    <hr>
                <div class="pesan">
                    <p>Sudah Punya Akun? <a href="login.php">Login di sini!</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>