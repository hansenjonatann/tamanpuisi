<?php 
	session_start();

	$_SESSION['login'];

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Taman Puisi | Login</title>
</head>
<body>
	<form>
		<ul>
			<li>
				<label for ="username">Username : </label>
				<input type="text" name="username" id="username" > 
			</li>
		</ul>
	</form>
</body>
</html>