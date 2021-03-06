<?php ?>

<html>
	<head>
    <meta charset = "utf-8"> 
		<title><?php echo $title ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/moyn.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/lightbox/css/lightbox.css">
		<link rel="icon" href="<?php echo base_url(); ?>assets/img/logo/favicon.png" type="image/gif" sizes="16x16">
	</head>

	<body>
		<div class="container moyn-container relative">
			<div class="moyn-header">
				<img src="<?php echo base_url(); ?>assets/img/logo/moyn.png" alt="moyn-logo">
				<div class="moyn-hamburger-holder show-sm">
					<div class="moyn-hamburger" id="hamburger-menu">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>

			<!-- menu desktop -->
			<div class="moyn-menu hide-sm">
				<div class="moyn-menu-item <?php if($this->uri->segment(1)=="profile"){echo 'active';}?>" id="profile">
					<a href="<?php echo base_url(); ?>profile">PROFILE</a>
					<div class="moyn-content">
						<div id="content-profile">
							<p class="mb-16">Established in 2018, moyn is an architectural design studio based on the countryside of central Java.
							the balance between spaces inside and outside, environment and architecture, human and architecture.
							moyn architecture is seeking for equilibrium, a pursuit of idea to stand between them
							<div class="moyn-founders">
								<div class="moyn-founders--left">
									<img src="<?php echo base_url(); ?>assets/img/founders/left-0.png" alt="moyn-founders">
									<div class="desc">
										<div>Aldila Septiano |</div>
										<div>Born in Surabaya, Indonesia |</div>
										<div>Graduated from Sepuluh Nopember Institute of Technology |</div>
										<div>Master degree of Architecture |</div>
										<div>Established moyn |</div>
									</div>
								</div>
								<div class="moyn-founders--right">
									<img src="<?php echo base_url(); ?>assets/img/founders/right-0.png" alt="moyn-founders">
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
				</div>
				<div class="moyn-menu-item <?php if($this->uri->segment(1)=="projects"){echo 'active';}?>" id="projects">
					<a href="<?php echo base_url(); ?>projects">PROJECTS</a>
					<div class="moyn-content-nav justify-content-end">
						<div class="proj-nav hide-sm" id="nav-project">
							<div class="proj-nav__item" id="nav-unbuilt" >&ndash;</div>
							<div class="proj-nav__item active" id="nav-studio" >0</div>
							<div class="proj-nav__item" id="nav-realized" >+</div>
						</div>
					</div>
					<div class="moyn-content" id="content-project">
						<div class="gallery" id="gallery-project"></div>
						<div class="proj-next" id="gallery-project-next">&gt;</div>
						<div class="proj-prev" id="gallery-project-prev">&lt;</div>
					</div>
				</div>
				<div class="moyn-menu-item <?php if($this->uri->segment(1)=="contact"){echo 'active';}?>" id="contact">
					<a href="<?php echo base_url(); ?>contact">CONTACT</a>
					<div class="moyn-content moyn-content--right">
						<div id="content-contact">
							<div class="mb-16">
								<div>Jl.Carikan Gondosuli</div>
								<div>Muntilan Magelang, 56415</div>
								<div>Indonesia</div>
								<div>7.5676, 110.2842 E</div>
							</div>
							<div>
								<div>+6281 3900 7 2121</div>
								<div>studio.moyn@gmail.com</div>
							</div>
						</div>
					</div>
				</div>
				<div class="moyn-menu-item <?php if($this->uri->segment(1)=="news"){echo 'active';}?>" id="news">
					<a href="<?php echo base_url(); ?>news">NEWS</a>			
					<div class="moyn-content">
						<div id="content-news">
							<ul class="moyn-accordion" id="news_accordion">
							</ul>
						</div>
					</div>
				</div>
				<div class="moyn-menu-item <?php if($this->uri->segment(1)=="shop"){echo 'active';}?>" id="shop">
					<a href="<?php echo base_url(); ?>shop">SHOP</a>		
					<div class="moyn-content">
						<div class="gallery" id="gallery-shop"></div>
						<div class="proj-next" id="gallery-shop-next">&gt;</div>
						<div class="proj-prev" id="gallery-shop-prev">&lt;</div>
					</div>
				</div>
			</div>

			<?php if(isset($view_product)) echo $view_product; ?>
			<?php if(isset($view_purchase)) echo $view_purchase; ?>
			<?php if(isset($view_news)) echo $view_news; ?>


			<!-- content sm -->
			<div class="moyn-content--sm show-sm" id="content-sm"></div>


			<!-- sidebar (mobile) -->
			<div class="moyn-overlay" id="sidebar-overlay"></div>
			<div class="moyn-sidebar show-sm" id="sidebar-menu">
				<ul>
					<li class="<?php if($this->uri->segment(1)=="profile" || $this->uri->segment(1)==""){echo 'active';}?>" id="profile">
						<a href="<?php echo base_url(); ?>profile">PROFILE</a>
					</li>
					<li class="<?php if($this->uri->segment(1)=="projects"){echo 'active';}?>" id="projects">
						<a href="<?php echo base_url(); ?>projects">PROJECTS</a>
					</li>
					<li class="<?php if($this->uri->segment(1)=="contact"){echo 'active';}?>" id="contact">
						<a href="<?php echo base_url(); ?>contact">CONTACT</a>
					</li>
					<li class="<?php if($this->uri->segment(1)=="news"){echo 'active';}?>" id="news">
						<a href="<?php echo base_url(); ?>news">NEWS</a>
					</li>
					<li class="<?php if($this->uri->segment(1)=="shop"){echo 'active';}?>" id="shop">
						<a href="<?php echo base_url(); ?>shop">SHOP</a>
					</li>
				</ul>
			</div>

			<!-- project control (mobile) -->
			<div class="moyn-control__holder show-sm <?php if($this->uri->segment(1) != "projects"){echo 'hide';}?>">
				<div class="moyn-control">
					<div class="moyn-control__item" id="nav-unbuilt-mobile">&ndash;</div>
					<div class="moyn-control__item active" id="nav-studio-mobile">0</div>
					<div class="moyn-control__item" id="nav-realized-mobile">+</div>
				</div>
			</div>

			<div class="moyn-lightbox-container"></div>
			
		</div>

		<div class="container moyn-footer">
			Copyright &copy 2018 | <span class="moyn-footer-logo">moyn</span>
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
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/underscore.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/moyn.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/moyn.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/lightbox/js/lightbox.js"></script>
	</body>
</html>
