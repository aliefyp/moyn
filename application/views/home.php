<?php ?>

<html>
	<head>
    <meta charset = "utf-8"> 
		<title><?php echo $title ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/moyn.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/slick/slick-theme.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/owl/css/owl.carousel.css"/>
	</head>

	<body>
		<div class="container moyn__container">
			<div class="moyn__header"><img src="http://i65.tinypic.com/2rny2pu.png" alt="moyn-logo"></div>
			<ul class="moyn__menu">
				<li class="moyn__menu-item" id="profile">PROFILE
					<div class="moyn__menu-content">
						<p>Established in 2018, moyn is an architectural design studio based on the countryside of central Java.<br />
						the balance between spaces inside and outside, environment and architecture, human and architecture.<br />
						moyn architecture is seeking for equilibrium, a pursuit of idea to stand between them</p>
						<div class="moyn__founders-img">
							<div class="moyn__founders-img--left">
								<img src="http://i65.tinypic.com/ibw8et.png" alt="moyn-founders">
								<div class="desc">
									<div>Aldila Septiano |</div>
									<div>Born in Surabaya, Indonesia |</div>
									<div>Graduated from Sepuluh Nopember Institute of Technology |</div>
									<div>Master degree of Architecture |</div>
									<div>Established moyn |</div>
								</div>
							</div>
							<div class="moyn__founders-img--right">
								<img src="http://i65.tinypic.com/ibw8et.png" alt="moyn-founders">
								<div class="desc">
									<div>| Ra'id N. Naufal</div>
									<div>| Born in Magelang, Indonesia</div>
									<div>| Graduated from Sepuluh Nopember Institute of Technology</div>
									<div>| Works at studio tonton</div>
									<div>| Established moyn</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="moyn__menu-item" id="projects">PROJECTS
					<div class="moyn__content-nav justify-content-end">
						<div class="proj-nav">
							<div class="proj-nav__item" id="nav-unbuilt" >&ndash;</div>
							<div class="proj-nav__item" id="nav-studio" >0</div>
							<div class="proj-nav__item" id="nav-realized" >+</div>
						</div>
					</div>
					<div class="moyn__menu-content">
						<!-- <div class="moyn__gallery" id="proj-gallery"></div> -->
						<div class="proj-gallery" id="proj-gallery"></div>
						<div class="proj-next" id="gallery-next">&gt;</div>
						<div class="proj-prev" id="gallery-prev">&lt;</div>
					</div>
				</li>
				<li class="moyn__menu-item" id="contact">CONTACT
					<div class="moyn__menu-content ta-right">
						<div class="mb-16">
							<div>Jl.Carikan Gondosuli</div>
							<div>Muntailan Magelang, 56415</div>
							<div>Indonesia</div>
							<div>7.5676, 110.2842 E</div>
						</div>
						<div>
							<div>+62 81 235 414818</div>
							<div>studio.moyn@gmail.com</div>
						</div>
					</div>
				</li>
				<li class="moyn__menu-item" id="news">NEWS</li>
				<li class="moyn__menu-item" id="shop">SHOP
					<div class="moyn__menu-content">
						<div class="moyn__gallery" id="gallery-unbuilt">
							<div class="med-thumb media">
								<div class="med-thumb__image" style="background-image: url('http://placehold.it/100x100')"></div>
								<div class="med-thumb__body media-body">
									<div class="med-thumb__title">ASDSAD</div>
									<div class="med-thumb__desc">asdsad</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
			<div class="moyn__footer">
				Copyright &copy 2018 | <span><img src="http://i65.tinypic.com/2rny2pu.png" alt="moyn-logo" height="16"></span>
			</div>
			<div class="moyn__slider">
				<div class="overlay">
					<div class="carousel">
						<img src="http://placehold.it/2000x2000" alt="">
						<img src="http://placehold.it/2000x2000" alt="">
						<img src="http://placehold.it/2000x2000" alt="">
						<img src="http://placehold.it/2000x2000" alt="">
					</div>
				</div>
			</div>
		</div>
		<script>
			var baseUrl = "<?php echo base_url(); ?>"
		</script>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/moyn.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/slick/slick.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/owl/js/owl.carousel.js"></script>
	</body>
</html>