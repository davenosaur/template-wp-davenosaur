<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package davenosaur
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="mainWrapper clearfix">
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'davenosaur' ); ?></a>
	<header id="masthead" class="site-header" role="banner">

			<div class="site-branding">
				<div id="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="http://www.davenosaur.com/wp-content/uploads/2015/01/logo-horizontal-davenosaur.png" alt=""> </a>
					</div>
					<!-- <h1><?php bloginfo( 'name' ); ?></h1>
					<h2><?php bloginfo( 'description' ); ?></h2> -->
			
			</div><!-- .site-branding -->
			

			<div>
				 <?php get_search_form(); ?>
				
<div id="language">
<?php if ( function_exists( 'the_msls' ) ) the_msls(); ?>
</div>



			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'davenosaur' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
	<div id="content" class="site-content">
