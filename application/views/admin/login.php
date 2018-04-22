	<!DOCTYPE html>
	<html lang="en">
	  
	<head>
	    <meta charset="utf-8">
	    <title>moyn Admin Dashboard</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	    <meta name="apple-mobile-web-app-capable" content="yes"> 
	    
		<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url()?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

		<link href="<?php echo base_url()?>assets/css/font-awesome.css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
		    
		<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url()?>assets/css/pages/signin.css" rel="stylesheet" type="text/css">
		

	</head>

	<body>
		
		<div class="navbar navbar-fixed-top">
		
		<div class="navbar-inner">
			
			<div class="container">
				
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				
				<a class="brand" href="#">
					MOYN
				</a>		
				
				<div class="nav-collapse">
					<ul class="nav pull-right">
						
						<!-- <li class="">						
							<a href="signup.html" class="">
								Don't have an account?
							</a>
							
						</li> -->
						
						<li class="">						
							<a href="http://www.universalquotient.com" class="">
								<i class="icon-chevron-left"></i>
								Back to Homepage
							</a>
							
						</li>
					</ul>
					
				</div><!--/.nav-collapse -->	
		
			</div> <!-- /container -->
			
		</div> <!-- /navbar-inner -->
		
	</div> <!-- /navbar -->


	<style type="text/css">
			.logo-login img{
				display: block;
	    		margin: 10px auto 1px;
			    height: auto; 
			    width: auto; 
			    max-width: 275px; 
			    max-height: 275px;
			}
		</style>
		<div class="logo-login">
			<img src="<?php echo base_url()?>assets/img/logo/moyn.png">
		</div>
	<div class="account-container">
		
		
		<div class="content clearfix">
			
			<form action="<?php echo base_url()?>login/do_login" method="POST">
			
				<h1><center>Member Login</center></h1>
				
				<div class="login-fields">
					
					<div class="field">
						<label for="username">Username</label>
						<input type="text" id="username" name="username" placeholder="Username" class="login username-field" />
					</div> <!-- /field -->
					
					<div class="field">
						<label for="password">Password:</label>
						<input type="password" id="password" name="password" placeholder="Password" class="login password-field"/>
					</div> <!-- /password -->
					
				</div> <!-- /login-fields -->
				
				<div class="login-actions">
					
					<span class="login-checkbox">
						<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
						<label class="choice" for="Field">Keep me signed in</label>
					</span>
										
					<button class="button btn btn-success btn-large">Sign In</button>
					
				</div> <!-- .actions -->
				
			</form>
			
		</div> <!-- /content -->
		
	</div> <!-- /account-container -->



	<div class="login-extra">
		<a href="#">Reset Password</a>
	</div> <!-- /login-extra -->


	<script src="<?php echo base_url()?>assets/js/jquery-1.7.2.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>

	<script src="<?php echo base_url()?>assets/js/pages/signin.js"></script>

	</body>

	</html>
