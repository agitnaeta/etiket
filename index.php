<!DOCTYPE html>
<html>
<head>
	<title> Aplikasi Tiket</title>
	<link rel="stylesheet" type="text/css" href="src/css.css">
	<link rel="stylesheet" type="text/css" href="src/main.css">
	<script type="text/javascript" src="src/js.js"></script>
	<script type="text/javascript" src="src/bs.js"></script>
	
</head>
<body>
<section id="header">
<div class="container" >
	<div class="row">
		<?php include 'view/navbar.php';?>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h1>Aplikasi Tiket</h1>
				<h3> Aplikasi Reservasi Tiket</h3>
			</div>
		</div>
	</div>
	<div class="row" id="box-pencarian">
			<?php include 'view/kotak_pencarian.php';?>
	</div>
</div>	
</section>
<section id="">
	<div class="container">
		<div class="col-md-12 " id="konten">
			<h3>Hasil Pencarian</h3>
			<hr>
			<div class='panel panel-footer'>
				<h3>Pesawat</h3>
				<small>Deksripsi</small>
				 <div class='text-right'><a href="" class="btn btn-lg btn-warning">  Pesan</a></div>
			</div>
			<div class='panel panel-footer'>
				<h3>Pesawat</h3>
				<small>Deksripsi</small>
				 <div class='text-right'><a href="" class="btn btn-lg btn-warning">  Pesan</a></div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="footer">
		<div class="container">
			<div class="col-md-4">
				<h3>Alamat</h3>
			</div>
			<div class="col-md-4">
				<h3>Kontak</h3>
			</div>
				
			<div class="col-md-4">
				<h3>Media Sosial</h3>
			</div>
		</div>
	</div>
</section>
</body>
</html>