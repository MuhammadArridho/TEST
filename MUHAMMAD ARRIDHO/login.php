<?php 
session_start();
require 'function.php';

// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id
	$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username 
	if( $key === hash('sha256', $row['username']) ) {
		$_SESSION['login'] = true;
	}
	
}

if( isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}



if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			// set session
			$_SESSION["login"] = true;

			// cek remember me
			if( isset($_POST['remember']) ) {
				// buat cookie
				setcookie('id', $row['id'], time()+60);
				setcookie('key', hash('sha256', $row['username']), time()+60);
			}

			header("Location: admin.php");
			exit;
		}
	}

	$error = true;

}


?>
<!DOCTYPE html>
<html>
<head>
		<title>Halaman Login</title>
	<style type="text/css">
		body{
			font-family: arial;
			font-size: 14px;
			background-image: url(img/31.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}

		#utama{
			width: 300px;
			margin: 0 auto;
			margin-top: 12%;
		}

		#judul{
			padding: 15px;
			text-align: center;
			color: #fff;
			font-size: 20px;
			background-color: pink;
			border-top-right-radius: 10px; 
			border-top-left-radius: 10px;
			border-bottom:3px solid salmon;  

		}

		#input{
			width: 270px;
			margin: 0 auto;
			background-color: #ccc;
			padding: 15px;
			border-bottom-right-radius: 10px; 
			border-bottom-left-radius: 10px; 
			border-bottom:3px solid salmon; 
		}

		input{
			padding: 10px;
			border:0;

		}

		.lg{
			width: 240px;

		}

		.btn{
			background-color: pink;
			border-radius: 10px;
			color: #fff;
		}

		.btn:hover{
			background-color: salmon;
			cursor: pointer;
		}

	</style>
</head>
<body>


<div id="utama">
	<div id="judul">Halaman Login</div>
</div>

<div id="input">
	<form action=""method="post">
<div>
	<input type="text" name="username" placeholder="username" class="lg" />
</div>

<div style="margin-top: 10px;">
	<input type="password" name="password" placeholder="password" class="lg" />
</div>

<div style="margin-top: 10px;">
	<input type="submit" name="login" value="Login" class="btn" />
</div>

		<div class="container" style="text-align: center">
			<p>Belum Punya Akun? <a href="registrasi.php">Klik di sini</a></p>

	</form>





</body>
</html>