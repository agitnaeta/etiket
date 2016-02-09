<!DOCTYPE html>
<html>
<head>
	<title> Aplikasi Tiket</title>
	<link rel="stylesheet" type="text/css" href="src/css.css">
	
	<link rel="stylesheet" type="text/css" href="src/main.css">
	<link rel="stylesheet" type="text/css" href="src/fa/css/font-awesome.css">
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
		<div class="col-md-12 garis" id="">
			<h3>Hasil Pencarian</h3>
			<hr>
			<div id="hasil_pencarian">
				<?php include 'view/hasil_pencarian.php';?>
			</div>		
		</div>
	</div>
</section>
<section class="garis footer">
<br>
<?php include 'view/footer.php';?>
</section>
</body>
</html>