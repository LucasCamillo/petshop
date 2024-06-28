<!DOCTYPE html>
<html lang="PT-BR">

<head>
	<title>Mundo Pet</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="/petshop/public/css/animate.css">

	<link rel="stylesheet" href="/petshop/public/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/petshop/public/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="/petshop/public/css/magnific-popup.css">


	<link rel="stylesheet" href="/petshop/public/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="/petshop/public/css/jquery.timepicker.css">

	<link rel="stylesheet" href="/petshop/public/css/flaticon.css">
	<link rel="stylesheet" href="/petshop/public/css/style.css">
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
								<a class="dropdown-item" href="/../petshop/src/models/process_logout.php">Logout</a>
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
	<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
				<div class="col-md-11 ftco-animate text-center">
					<h1 class="mb-4">Cuidados da mais alta qualidade para seus amiguinhos</h1>
					<p><a href="#" class="btn btn-primary mr-md-4 py-3 px-4" href="index.php?page=about">Mais sobre nós<span class="ion-ios-arrow-forward"></span></a></p>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section bg-light ftco-no-pt ftco-intro">
		<div class="container">
			<div class="row">
				<div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
					<div class="d-block services active text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-blind"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Passeios</h3>
							<p>Passeios diários que garantem saúde e felicidade para o seu amigo peludo.</p>
							<a href="index.php?page=team" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
					<div class="d-block services text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-dog-eating"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Cuidados Pet</h3>
							<p>Oferecemos uma ampla gama de conselhos e cuidados para ajudar você a cuidar do seu pet de maneira eficiente e carinhosa.</p>
							<a href="index.php?page=team" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
					<div class="d-block services text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-grooming"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Banho e Tosa</h3>
							<p>Transformamos o momento de banho e tosa em uma experiência relaxante e renovadora para o seu pet.</p>
							<a href="index.php?page=team" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row d-flex no-gutters">
				<div class="col-md-5 d-flex">
					<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/about-1.jpg);">
					</div>
				</div>
				<div class="col-md-7 pl-md-5 py-md-5">
					<div class="heading-section pt-md-5">
						<h2 class="mb-4">Porque escolher a Mundo Pet?</h2>
					</div>
					<div class="row">
						<div class="col-md-6 services-2 w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
							<div class="text pl-3">
								<h4>Conselhos sobre cuidados animais</h4>
								<p>Oferecemos uma ampla gama de conselhos e cuidados para ajudar você a cuidar do seu pet de maneira eficiente e carinhosa. Desde dicas de alimentação até orientações sobre exercícios e cuidados diários.</p>
							</div>
						</div>
						<div class="col-md-6 services-2 w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-customer-service"></span></div>
							<div class="text pl-3">
								<h4>Suporte ao Cliente</h4>
								<p>Oferecemos um suporte ao cliente excepcional, com atendimento personalizado para garantir que você e seu pet recebam o melhor cuidado possível.</p>
							</div>
						</div>
						<div class="col-md-6 services-2 w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-emergency-call"></span></div>
							<div class="text pl-3">
								<h4>Serviços de emergencia</h4>
								<p>Sabemos que emergências podem acontecer a qualquer momento. Por isso, temos um serviço de emergência disponível 24 horas, garantindo que seu pet receba atenção imediata e cuidados urgentes quando mais precisar. </p>
							</div>
						</div>
						<div class="col-md-6 services-2 w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-veterinarian"></span></div>
							<div class="text pl-3">
								<h4>Ajuda veterinária</h4>
								<p>Nossos veterinários dedicados e altamente qualificados estão comprometidos em oferecer o melhor cuidado possível para seus pets. Entendemos que cada animal é único e merece uma abordagem personalizada para sua saúde.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter" id="section-counter">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 text-center">
						<div class="text">
							<strong class="number" data-number="539">0</strong>
						</div>
						<div class="text">
							<span>Clientes</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 text-center">
						<div class="text">
							<strong class="number" data-number="5">0</strong>
						</div>
						<div class="text">
							<span>Profissionais</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 text-center">
						<div class="text">
							<strong class="number" data-number="5">0</strong>
						</div>
						<div class="text">
							<span>Serviços Oferecidos</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 text-center">
						<div class="text">
							<strong class="number" data-number="37">0</strong>
						</div>
						<div class="text">
							<span>Pets Hospedados</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	</section>

	<section>
		<div class="container">
			<div class="row justify-content-center pb-5 mb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2>Hall da Fama dos Nossos Clientes</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-1.jpg);">
						<a href="images/gallery-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
						<div class="desc w-100 px-4">
							<div class="text w-100 mb-3">
								<span>Gato persa</span>
								<h2><a href="work-single.html">Fred</a></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/alaska2.jpg);">
						<a href="images/alaska2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
						<div class="desc w-100 px-4">
							<div class="text w-100 mb-3">
								<span>Husky Siberiano</span>
								<h2><a href="work-single.html">Alaska</a></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-3.jpg);">
						<a href="images/gallery-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
						<div class="desc w-100 px-4">
							<div class="text w-100 mb-3">
								<span>Gato Persa</span>
								<h2><a href="work-single.html">Schneider</a></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-2.jpg);">
						<a href="images/gallery-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
						<div class="desc w-100 px-4">
							<div class="text w-100 mb-3">
								<span>Lulu da Pomerania</span>
								<h2><a href="work-single.html">Luna</a></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-5.jpg);">
						<a href="images/gallery-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
						<div class="desc w-100 px-4">
							<div class="text w-100 mb-3">
								<span>Beagle</span>
								<h2><a href="work-single.html">Rodolfo</a></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/gallery-6.jpg);">
						<a href="images/gallery-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
						<div class="desc w-100 px-4">
							<div class="text w-100 mb-3">
								<span>Pug</span>
								<h2><a href="work-single.html">Bartolomeu</a></h2>
							</div>
						</div>
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
						<li class="nav-item"><a href="index.php?page=team" class="nav-link">Conheça nosso time</a></li>
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