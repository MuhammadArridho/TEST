<?php

session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}
require 'function.php';
$shorum = query("SELECT * FROM etutorial");
?>

<!DOCTYPE html>
<html>
<head>
		<title>Portfolio Muhammad Arridho</title>
	<style type="text/css">
		body{
			font-family: helvetica;
			font-size: 16px;
		}
		#canvas{
			width: 960px;
			margin: 0 auto;
			border: 1px solid silver;
		}


		#header{
			font-size: 20px;
			padding: 20px;
			background-image: url(galeri/snt.jpg);
			
		}

		#menu{
			background-color: #0066ff;
		}
		#menu ul{
			list-style: none;
			margin: 0;
			padding: 0;

		}

		#menu ul li.utama{
			display: inline-table;

		}

		#menu ul li:hover{
			background-color: pink;

		}

		#menu ul li a{
			display: block;
			text-decoration: none;
			line-height: 40px;
			padding: 0 10px;
			color: #fff;
		}

		.utama ul{
			display: none;
			position: absolute;
			z-index: 2;
		}

		.utama:hover ul{
			display: block;

		}

		.utama ul li{
			display: block;
			background-color: #5cf;
			width: 140px;
		}


		#isi{
			min-height: 400px;
			padding: 20px;
			background-image: url(galeri/30.jpeg);
		}

		#footer{
			text-align: center;
			height: 50px;
			line-height: 50px;
			position: absolute;
			top: 550px;
			left: 202px;
			bottom: 0px;
			width: 960px;
			margin: 0 auto;
			border: 1px solid silver;
			background-color: skyblue;

		}
	</style>
</head>
<body>

<div id="canvas">
	<div id="header">My Portfolio</div>

	<div id="menu">
		<ul>
			<li class="utama"><a href="index.php">Beranda</a></li>
<li class="utama"><a href="">Galery</a>
				<ul>
<li><a href="galeri.php">Lihat Data</a></li>
<li><a href="?page=Galery&action=tambah">Tambah Data</a></li>
	</ul>
</li>

<li class="utama"><a href="">About</a>
<ul>
<li><a href="About.php">Lihat Data</a></li>

</ul>
</li>


			<li class="utama"><a href="">Kontak</a>
				<ul>
<li><a href="kontak.php">Lihat</a></li>
				</ul>
			</li>
			<li class="utama" style="float:right;"><a href="login.php">Logout</a></li>
		</ul>
	</div>

	<div id="isi"><p></p>
	<?php 
			$page = @$_GET['page'];
			$action = @$_GET['action'];

		if($page == "Galery") {
			if($action == "") {
			include "melihat.php";
			}else if($action == "tambah"){
				include "tambah.php";
			}
		}

		 if($page == "Visi Misi") {
			if($action == "") {
			include "galery.php";
		}

		
		}else if($page == "Hoby") {
			echo "ini halaman Hoby";

		}

		if($page == "Contact Us") {
			if($action == "") {
			include "contac.php";
		}

		} else if ($page == "") {
			echo "welcome to  my Profile";
		}else {
			echo "4041 halaman tidak ditemukan";
		}
	 ?>


</div>

<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>