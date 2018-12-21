<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gavel
 */

get_header(); ?>
	<main id="main" class="site-main" role="main">
		
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="banner page-banner banner-image-fix"></div><!-- .banner -->
		<div class="page-banner-image">
			<div class="container-fluid">
				<div class="col-max-10 col-center">
					<div class="resource-single-image animate-it">
						<?php the_post_thumbnail('banner-image');?>
					</div>
				</div>
			</div><!-- .container-fluid -->
		</div><!-- .page-banner-image -->
		<div class="page-content-wrap">
			<div class="container-fluid">
				<div class="col-max-10 col-center animate-it">
					<?php get_template_part( 'template-parts/content', 'single' ); ?>
				</div>
			</div><!-- .container-fluid -->
		</div><!-- .page-content-wrap -->
	<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
<?php get_footer(); ?>
