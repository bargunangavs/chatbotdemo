<?php
/**
 * Template Name: Home
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gavel
 */

get_header(); ?>
	<main id="main" class="site-main" role="main">

		<?php 
		while ( have_posts() ) : the_post(); 

			get_template_part( 'templates/home/banner' ); 
			get_template_part( 'templates/home/overview' ); 
			get_template_part( 'templates/home/success-story' );
			get_template_part( 'templates/home/features' );
			get_template_part( 'templates/home/testimonials' );
			get_template_part( 'templates/home/get-start' );


		endwhile; // End of the loop. 
		?>

	</main><!-- #main -->
			
<?php get_footer(); ?>
