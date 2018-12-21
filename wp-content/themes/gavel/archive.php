<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thirdi
 */

get_header(); ?>
	<main id="main" class="site-main" role="main">
			
				<?php if ( have_posts() ) : ?>
					<div class="banner page-banner">
					<div class="banner-inner">
						<div class="container-fluid">
							<div class="col-max-10 col-center">
								<?php 
									the_archive_title( '<h1>', '</h1>' );
									the_archive_description( '<div class="taxonomy-description">', '</div>' );
								?>
							</div><!-- .col-max-# -->
						</div><!-- .container-fluid -->
					</div><!-- .banner-inner -->
				</div><!-- .banner -->
				<div class="page-content-wrap">
				<div class="container-fluid">
					<div class="col-max-10 col-center">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				</div>
					</div><!-- .container-fluid -->
				<?php endif; ?>
				</div>
		</main><!-- #main -->
	
<?php get_footer(); ?>
