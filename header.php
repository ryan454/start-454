<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Start_454
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Met Tags -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /*
		X-UA-Compatible could be removed, but why not leave just one line in to shape up IE. Here's some good info:
		http://stackoverflow.com/questions/6771258/what-does-meta-http-equiv-x-ua-compatible-content-ie-edge-do and http://stackoverflow.com/questions/22059060/is-it-still-valid-to-use-ie-edge-chrome-1        
	*/
	?><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<?php if (is_search() or is_404()) : ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php endif; ?>
	
	<meta name="title" content="<?php bloginfo('name'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="<?php bloginfo('name'); ?>">
	<meta name="copyright" content="Copyright <?php bloginfo('name'); ?> <?php echo date('Y');?>. All Rights Reserved.">
	
	<?php /** Wordpress takes care of the <title> tag! Yay! (https://codex.wordpress.org/Title_Tag) */ ?>
	
	<!-- Some Link Tags! -->
	<?php /** Wordpress takes care of favicons! Yay! Don't forget to add it here: Admin > Appearance > Customize > Site Identity (https://codex.wordpress.org/Creating_a_Favicon) */ ?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	
	<?php /** Need old IE support? Uncomment and edit this template: get_template_part( 'template-parts/header-ie-support' ); (hopefully you don't) */ ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'start-454' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'start-454' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
