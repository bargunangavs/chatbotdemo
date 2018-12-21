<?php
/**
 * Template Name: About
 *
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
		<div class="banner page-banner banner-image-fix">
			<div class="banner-inner">
				<div class="container-fluid animate-it">
					<?php the_title('<h1>','</h1>');?>
				</div><!-- .container-fluid -->
			</div><!-- .banner-inner -->
		</div><!-- .banner -->
		

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="page-banner-image">
					<div class="container-fluid animate-it">
						<?php the_post_thumbnail('full');?>
					</div>
				</div><!-- .page-banner-image -->
				<div class="page-content-wrap">
					<div class="container-fluid">
						<div class="col-max-10 col-center">
							<div class="featured-text font-fira animate-it">
								<?php the_field('main_text');?>
							</div>
							<div class="entry-content font-fira animate-it">
								<?php the_content();?>
							</div><!-- .entry-content -->
							<div class="button-align text-center animate-it">
								<a href="https://www.gavstech.com/about-us/" class="button button-blue button-transparent" target="_blank"><i class="icon-link l-icon"></i>Read more at Gavstech.com</a>
							</div>
						</div><!-- .col-max-# -->
					</div><!-- .container-fluid -->
				</div><!-- .page-content-wrap -->
			<?php endwhile; // End of the loop. ?>
		</div><!-- .container-fluid -->
	</main><!-- #main -->
<?php get_footer(); ?>
