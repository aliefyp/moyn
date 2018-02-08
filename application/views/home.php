<?php ?>

<html>
	<head>
    <meta charset = "utf-8"> 
		<title><?php echo $title ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/moyn.css">
	</head>

	<body>
		<div class="container relative">
			<div class="moyn__header">
				<img src="http://i65.tinypic.com/2rny2pu.png" alt="moyn-logo">
				<!-- hamburger (mobile) -->
				<nav class="navbar navbar-dark moyn__navbar--mobile ">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</nav>
				<!-- end of hamburger -->
			</div>

			<!-- menu desktop -->
			<div class="moyn__menu">
				<div class="moyn__menu-item  <?php if($this->uri->segment(1)=="profile"){echo 'active';}?>" id="profile">
					<a href="<?php echo base_url(); ?>profile">PROFILE</a>
					<div class="moyn__menu-content" id="content-profile">
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
				</div>
				<div class="moyn__menu-item <?php if($this->uri->segment(1)=="projects"){echo 'active';}?>" id="projects">
					<a href="<?php echo base_url(); ?>projects">PROJECTS</a>
					<div class="moyn__content-nav justify-content-end" id="content-project">
						<div class="proj-nav">
							<div class="proj-nav__item" id="nav-unbuilt" >&ndash;</div>
							<div class="proj-nav__item active" id="nav-studio" >0</div>
							<div class="proj-nav__item" id="nav-realized" >+</div>
						</div>
					</div>
					<div class="moyn__menu-content">
						<!-- <div class="moyn__gallery" id="gallery"></div> -->
						<div class="gallery" id="gallery-project"></div>
						<div class="proj-next" id="gallery-project-next">&gt;</div>
						<div class="proj-prev" id="gallery-project-prev">&lt;</div>
					</div>
				</div>
				<div class="moyn__menu-item <?php if($this->uri->segment(1)=="contact"){echo 'active';}?>" id="contact">
					<a href="<?php echo base_url(); ?>contact">CONTACT</a>
					<div class="moyn__menu-content ta-right" id="content-contact">
						<div class="mb-16">
							<div>Jl.Carikan Gondosuli</div>
							<div>Muntailan Magelang, 56415</div>
							<div>Indonesia</div>
							<div>7.5676, 110.2842 E</div>
						</div>
						<div>
							<div>+6281 3900 7 2121</div>
							<div>studio.moyn@gmail.com</div>
						</div>
					</div>
				</div>
				<div class="moyn__menu-item <?php if($this->uri->segment(1)=="news"){echo 'active';}?>" id="news">
					<a href="<?php echo base_url(); ?>news">NEWS</a>			
				</div>
				<div class="moyn__menu-item <?php if($this->uri->segment(1)=="shop"){echo 'active';}?>" id="shop">
					<a href="<?php echo base_url(); ?>shop">SHOP</a>		
					<div class="moyn__menu-content">
						<div class="gallery" id="gallery-shop"></div>
						<div class="proj-next" id="gallery-shop-next">&gt;</div>
						<div class="proj-prev" id="gallery-shop-prev">&lt;</div>
					</div>
				</div>
			</div>

			<div class="moyn__extra-content <?php if($this->uri->segment(1)=="product"){echo 'active';}?>">
				<div class="purchasing">
					<img src="<?php echo $product->url_img_item ?>" alt="<?php echo $product->name_item ?>" class="product-img" />
					<div class="product-desc">
						<div class="title"><?php echo $product->name_item ?></div>
						<div class="description"><?php echo $product->deskripsi_item ?></div>
						<button class="purchase" onclick="goBack()">BACK</button>
						<button class="purchase">BUY</button>
						<form action="" class="mt-32" id="purchase-form">
							<div class="mb-16">Please fill following form</div>
							<input class="mb-8" type="text" placeHolder="Fullname" required autofocus />
							<input class="mb-8" type="text" placeHolder="Email" required />
							<input class="mb-8" type="text" placeHolder="Quantity" required />
							<input class="mb-8" type="text" placeHolder="Phone" required />
							<textarea class="mb-8" cols="30" rows="3" placeHolder="Shipping Address" required></textarea>
							<textarea class="mb-8" cols="30" rows="3" placeHolder="Message" required></textarea>
						</form>
					</div>
				</div>
			</div>


			<!-- menu mobile -->
			<div class="moyn__menu--mobile">
				<div class="collapse" id="navbarToggleExternalContent">
					<div>
						<div class="moyn__menu-item <?php if($this->uri->segment(1)=="profile" || $this->uri->segment(1)==""){echo 'active';}?>" id="profile">
							<a href="<?php echo base_url(); ?>profile">PROFILE</a>
						</div>
						<div class="moyn__menu-item <?php if($this->uri->segment(1)=="projects"){echo 'active';}?>" id="projects">
							<a href="<?php echo base_url(); ?>projects">PROJECTS</a>
						</div>
						<div class="moyn__menu-item <?php if($this->uri->segment(1)=="contact"){echo 'active';}?>" id="contact">
							<a href="<?php echo base_url(); ?>contact">CONTACT</a>
						</div>
						<div class="moyn__menu-item <?php if($this->uri->segment(1)=="news"){echo 'active';}?>" id="news">
							<a href="<?php echo base_url(); ?>news">NEWS</a>
						</div>
						<div class="moyn__menu-item <?php if($this->uri->segment(1)=="shop"){echo 'active';}?>" id="shop">
							<a href="<?php echo base_url(); ?>shop">SHOP</a>
						</div>
					</div>
				</div>
			</div>
			<div class="moyn__content--mobile" id="content-mobile"></div>

			<!-- footer -->
			<div class="moyn__footer">
				Copyright &copy 2018 | <span><img src="http://i65.tinypic.com/2rny2pu.png" alt="moyn-logo" height="16"></span>
			</div>

			<!--  -->
			<!-- <div class="popup">
				<div class="overlay">
					<div class="modal-form purchasing">
					</div>
					<div class="close" id="carousel-close">x</div>					
				</div>
			</div> -->

			<!-- carousel -->
			<div class="popup" id="popup-slider">
				<div class="overlay">
					<div class="carousel" id="carousel">
						<img src="http://placehold.it/800x800" alt="">
						<img src="http://placehold.it/700x800" alt="">
						<img src="http://placehold.it/800x900" alt="">
						<img src="http://placehold.it/800x800" alt="">
					</div>
					<div class="navigation" id="carousel-nav">
						<div class="navigation__prev" id="carousel-nav-prev"><</div>
						<div class="navigation__next" id="carousel-nav-next">></div>
					</div>
					<div class="close" id="carousel-close">x</div>
				</div>
			</div>
			<!-- carousel -->
			
		</div>
		<script>
			var baseUrl = "<?php echo base_url(); ?>"
			var route = "<?php echo $this->uri->segment(1); ?>"
			function goBack() {
				window.history.back();
			}
		</script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/moyn.js"></script>
	</body>
</html>