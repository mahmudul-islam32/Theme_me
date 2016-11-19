<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Cluster - Creative Portfolio HTML Template</title>
	
	<!-- Main CSS file -->
	
	

	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/icon/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/icon/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/icon/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/icon/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/icon/apple-touch-icon-57-precomposed.png">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	
    	
	<?php wp_head(); ?>
	
</head>
<body <?php body_class();?>>

	<!-- PRELOADER -->
	<div id="st-preloader">
		<div id="pre-status">
			<div class="preload-placeholder"></div>
		</div>
	</div>
	<!-- /PRELOADER -->

	
	<!-- HEADER -->
	<header id="header">
		<nav class="navbar st-navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#st-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
					</button>
					<a class="logo" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
				</div>

				<div class="collapse navbar-collapse" id="st-navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
				    	<li><a href="#header">Home</a></li>
				    	<li><a href="#services">Services</a></li>
				    	<li><a href="#our-works">Works</a></li>
				    	<li><a href="#pricing">Pricing</a></li>
				    	<li><a href="#our-team">Team</a></li>
				    	<li><a href="#contact">Contact</a></li>
				    	<li><a href="blog.html">Blog</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
	</header>
	<!-- /HEADER -->