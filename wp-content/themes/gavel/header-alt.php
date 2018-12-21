<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gavel
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<meta http-equiv="Content-Security-Policy" content="frame-src *"> 


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gavel' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-header-inner">
			<div class="container-fluid">
				<div class="site-branding">
					<?php if ( is_front_page() ||is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				<div class="site-navigation clearfix">
					<a href="<?php echo get_permalink(24);?>" class="go-back"><i class="icon-arrow-left in"></i>Back to Resources<i class="icon-arrow-left out"></i></a>
				</div>
			</div><!-- .container-fluid -->
		</div><!-- .site-header-inner -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
