<!DOCTYPE html>
<html lang="PT-BR">

<head>
	<title>Mundo Pet</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="../public/css/animate.css">

	<link rel="stylesheet" href="../public/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../public/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../public/css/magnific-popup.css">


	<link rel="stylesheet" href="../public/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="../public/css/jquery.timepicker.css">

	<link rel="stylesheet" href="../public/css/flaticon.css">
	<link rel="stylesheet" href="../public/css/style.css">
</head>

<body>
	<?php 
		require_once '../src/models/helper_login.php';
		$userLoggedIn = isLoggedIn();
	?>
	<div class="wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-6 d-flex align-items-center">
					<p class="mb-0 phone pl-md-2">
						<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +47 1234 5678</a>
						<a href="#"><span class="fa fa-paper-plane mr-1"></span> mundopet@email.com</a>
					</p>
				</div>
				<div class="col-md-6 d-flex justify-content-md-end">
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php?page=home"><span class="flaticon-pawprint-1 mr-2"></span>Mundo Pet</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php?page=home" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="index.php?page=about" class="nav-link">Sobre Nós</a></li>
					<li class="nav-item"><a href="index.php?page=team" class="nav-link">Conheça nosso time</a></li>
					<li class="nav-item"><a href="index.php?page=gallery" class="nav-link">Galeria</a></li>
					<li  class="nav-item dropdown" ><a href="index.php?page=login" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sua Conta</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<?php if ($userLoggedIn): ?>	
								<a class="dropdown-item" href="../src/models/process_logout.php">Logout</a>
								<a class="dropdown-item" href="index.php?page=appointments">Agendamentos</a>
							<?php else: ?>
								<a class="dropdown-item" href="index.php?page=login">Login</a>
							<?php endif; ?>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end">
				<div class="col-md-9 ftco-animate pb-5">
					<h1 class="mb-0 bread">Conheça nossa equipe</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/doutor_03.jpg);"></div>
						</div>
						<div class="text pt-3 px-3 pb-4 text-center">
							<h3>Lucas Camilo</h3>
							<span class="position mb-2">Veterinário</span>
							<div class="faded">
								<p>Apaixonado por cuidar de animais há mais de uma década.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/doutor_04.jpg);"></div>
						</div>
						<div class="text pt-3 px-3 pb-4 text-center">
							<h3>Nathaly Sousa</h3>
							<span class="position mb-2">Veterinário</span>
							<div class="faded">
								<p>Meu compromisso é proporcionar cuidados de qualidade e afeto para garantir a saúde e felicidade dos seus queridos pets..</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/doutor_05.jpg);"></div>
						</div>
						<div class="text pt-3 px-3 pb-4 text-center">
							<h3>José Washington</h3>
							<span class="position mb-2">Expecilista em banho e tosa</span>
							<div class="faded">
								<p>Com anos de experiência e amor pelos animais, garanto que seu peludo receberá tratamento VIP em cada sessão.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/doutor_06.jpg);"></div>
						</div>
						<div class="text pt-3 px-3 pb-4 text-center">
							<h3>Vovó Dora</h3>
							<span class="position mb-2">Dog Walker</span>
							<div class="faded">
								<p>Com carinho e dedicação, garanto passeios divertidos e seguros para o seu melhor amigo e para mim, em meus passeios matinais.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
	</section>

	<!-- RODAPÉ -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
					<h2 class="footer-heading">Mundo Pet</h2>
					<p>Nossa missão é amar e cuidar dos pets.</p>
					<ul class="ftco-footer-social p-0">
						<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
						<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
						<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
					<h2 class="footer-heading">Galeria de Fotos</h2>
					<div class="block-21 mb-4 d-flex">
						<a class="img mr-4 rounded" style="background-image: url(images/image_1.jpg);"></a>
						<div class="text">
							<h3 class="heading"><a href="index.php?page=gallery">Visite nossa galeria de fotos</a></h3>
							<div class="meta">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
					<h2 class="footer-heading">Links Rápidos</h2>
					<ul class="list-unstyled">
						<li class="nav-item"><a href="index.php?page=home" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="index.php?page=about" class="nav-link">Sobre Nós</a></li>
						<li class="nav-item"><a href="index.php?page=team" class="nav-link">Conheça nosso time </a></li>
						<li class="nav-item"><a href="index.php?page=gallery" class="nav-link">Galeria</a></li>
						<li class="nav-item"><a href="index.php?page=login" class="nav-link">Login</a></li>
						<li class="nav-item"><a href="index.php?page=contact" class="nav-link">Contate-nos</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
					<h2 class="footer-heading">Ficou com duvidas?</h2>
					<div class="block-23 mb-3">
						<ul>
							<li><span class="icon fa fa-map"></span><span class="text">180 Rua Colon, Joinville, SC, BR</span></li>
							<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+47 1234 5678</span></a></li>
							<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">mundopet@email.com</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-md-12 text-center">

					<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			</div>
		</div>
	</footer>




	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>



</body>

</html>