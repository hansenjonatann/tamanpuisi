<?php 

	require 'config.php';

	if(isset($_POST["login"])) {



		$username = $_POST["username"];
		$password = $_POST["password"];

		$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

		if( mysqli_num_rows($result) === 1){

			// cek password
			$row = mysqli_fetch_assoc($result);
			if(password_verify($password , $row["password"] ) ) {
				header("location: index.html");
				exit;
			}
		}

		$error = true;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Taman Puisi | Log In</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="container" > 
		<div id="box">
			<div class="form-control">
				<h1 class="form-title">
					Log In
				</h1>
				<?php if( isset($error) ) :  ?> 
					<p style="color:red; font-style: italic;">Username atau kata sandi salah!!</p>
				<?php endif ?>
			</div>
			<form action="" method="post">
				<input type="text" name="username" placeholder="Enter your username">
				<input type="password" name="password" placeholder="Enter your password">
				<button type="submit" name="login" id="btnLogin">LOGIN</button>

				<hr>
				<div class="nohaveaccount">
					<p>Belum Punya Akun? <a href="signup.php">Daftar di sini!</a></p>
				</div>
			</form>
		</div>
	</div>

	<script type="text/javascript" src="script"></script>	
</body>
</html>