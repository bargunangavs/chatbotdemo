<?php
/**
 * The template for displaying all pages.
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
		<div class="banner page-banner">
			<div class="banner-inner">
				<div class="container-fluid">
					<div class="col-max-10 col-center">
						<?php the_title('<h1>','</h1>');?>
					</div><!-- .col-max-# -->
				</div><!-- .container-fluid -->
			</div><!-- .banner-inner -->
		</div><!-- .banner -->
		<div class="page-content-wrap">
			<div class="container-fluid">
				<div class="col-max-10 col-center">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // End of the loop. ?>
				</div><!-- .col-max-# -->
			</div><!-- .container-fluid -->
		</div><!-- .page-content-wrap -->
	</main><!-- #main -->
<?php get_footer(); ?>
