<!DOCTYPE html>
<html>
<head>
	<title>UTS PEMWEB</title>
	<!-- FAVICON-->
	<link href="juan.jpeg" rel="icon">

	<meta charset="utf-8">
	<meta name="viewport" 
	content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="https://www.facebook.com/adi.teguh.733/"><i class="fab fa-facebook"></i></a></li>
				<li><a href="https://youtu.be/t50ZDZ_obBU"><i class="fab fa-youtube"></i></a></li>
				<li><a href="https://www.instagram.com/_froxyez/"><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://open.spotify.com/user/312cuopntgssn24firczfhqkcpiu?si=fnK6pCADRm-wgTh9ROXD8w&utm_source=copy-link"><i class="fab fa-spotify"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="data_pendaftar.php">Froxyez</a></h1>
			<ul>
				<li class="active"><a href="halaman.php">Beranda</a></li>
				<li><a href="about.html">Tentang</a></li>
				<li><a href="service.html">Layanan</a></li>
				<li><a href="contact.html">Contact</a></li>
                <li><a href="formulir.php">Daftar Disni</a></li>
			</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
		<h2>ア  デ  ィ  テ  グ  プ  ラ  モ  </h2>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<h3> Tentang Froxyez </h3>
			<p> <strong> Froxyez </strong>
				The author lives in Medan City, Province
				North Sumatra. Author completed
				Education at high school
				Negeri 1 Tanjung Morawa by majoring in Computer and Network Engineering  , graduated 3 years later in
				year 2021.
				In the same year the author was accepted as a student in the undergraduate study program
				Computer Science, Faculty of Computer Science and Information Technology at the University
				North Sumatra through the SMMPTN entrance (Mandiri Selection for Entry)
				Public universities). Until the writing of this paper, the author still
				registered as one of the Computer Science S1 Study Program Students,
				Faculty of Computer Science and Information Technology at the University of North Sumatra.</p>
		</div>
	</section>

	<!-- service -->
	<section class="service">
		<div class="container">
			<h3>Layanan</h3>
			<div class="box">
				<div class="col-4">
					<div class="icon"><i class="fas fa-gamepad"></i></div>
					<h4>Joki Game</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-book"></i></div>
					<h4>Joki Tugas</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-hamburger"></i></div>
					<h4>Pesan Disini</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-users"></i></div>
					<h4>Hubungan :3</h4>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2022 - Froxyez .</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>