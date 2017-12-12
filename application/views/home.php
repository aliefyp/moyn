<?php ?>

<html>
	<head>
    	<meta charset = "utf-8"> 
		<title>moyn</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/moyn.css">
		<script src="<?php echo base_url(); ?>assets/js/moyn.js"></script>
	</head>

	<body>
		<div class="container moyn__container">
			<div class="moyn__header"><img src="http://i65.tinypic.com/2rny2pu.png" alt="moyn-logo"></div>
			<ul class="moyn__menu">
				<li class="moyn__menu-item" id="profile" onclick="onMenuClick(this)"">PROFILE
					<div class="moyn__menu-content">
						<p>Established in 2018, moyn is an architectural design studio based on the countryside of centran Java.<br />
						the balance between spaces inside and outside, environment and architecture, human and architecture.<br />
						moyn architecture is seeking for equilibrium, a pursuit of idea to stand between them</p>
						<div class="moyn__founders-img">
							<div class="moyn__founders-img--left">
								<img src="http://i65.tinypic.com/ibw8et.png" alt="moyn-founders">
								<div class="desc">asdsdasdadsa</div>
							</div>
							<div class="moyn__founders-img--right">
								<img src="http://i65.tinypic.com/ibw8et.png" alt="moyn-founders">
								<div class="desc">xzcxcxczxc</div>
							</div>
						</div>
					</div>
				</li>
				<li class="moyn__menu-item" id="projects" onclick="onMenuClick(this)"">PROJECTS
				<div class="moyn__menu-content">
						<div class="moyn__gallery">
							<div class="row">
								<div class="col moyn__thumb">a</div>
								<div class="col moyn__thumb">s</div>
							</div>
							<div class="row">
								<div class="col moyn__thumb"></div>
								<div class="col moyn__thumb"></div>
							</div>
							<div class="row">
								<div class="col moyn__thumb"></div>
								<div class="col moyn__thumb"></div>
							</div>
							<div class="row">
								<div class="col moyn__thumb"></div>
								<div class="col moyn__thumb"></div>
							</div>
						</div>
					</div>
				</li>
				<li class="moyn__menu-item" id="contact" onclick="onMenuClick(this)"">CONTACT</li>
				<li class="moyn__menu-item" id="news" onclick="onMenuClick(this)"">NEWS</li>
				<li class="moyn__menu-item" id="shop" onclick="onMenuClick(this)"">SHOP</li>
			</ul>
		</div>
	</body>
</html>