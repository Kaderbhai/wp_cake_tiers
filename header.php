<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cakes
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<!-- BOOTSTRAP CORE CSS -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">	

<!-- FONT AWESOME ICONS -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!--GFONTS-->
<link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script|Josefin+Slab|Raleway|Tangerine" rel="stylesheet">

<?php wp_head(); ?>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cakes' ); ?></a>

<!-- HEADER 
============================================= -->
<hr class="margin">
<header class="site-header" role="banner">
	
	<!-- NAVBAR 
	============================================= -->
	
	<div class="container-fluid" id="navbar-con">
		<div class="navbar-wrapper">
			<div class="navbar navbar-default navbar-center">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button> <!-- button -->	 
					</div> <!-- navbar-header -->
					  
					<?php 
						wp_nav_menu( array(
						
							'theme_location'	=> 'primary',
							'depth' 			=> 2,
							'container'			=> 'nav',
							'container_class'	=> 'navbar-collapse collapse',
							'menu_class'		=> 'nav navbar-nav navbar-left',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker()
						
						)	);
					?>
						
						<a class="navbar-brand" href="http://localhost/home">
							<img class="logo-image" src="/wp-content/themes/cakes/assets/img/cake_tiers_logo5.png" alt="Cake Tiers Logo">
						</a>					
					
					<?php 
						wp_nav_menu( array(
						
							'theme_location'	=> 'secondary',
							'depth' 			=> 2,
							'container'			=> 'nav',
							'container_class'	=> 'navbar-collapse collapse',
							'menu_class'		=> 'nav navbar-nav navbar-right',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker()
						
						)	);
					?>
					
				</div> <!-- fixed nav-bar container -->	
			</div> <!-- navbar type -->
		</div> <!-- navbar-wrapper -->
	</div> <!-- navbar container -->
</header>
<hr class="margin">


