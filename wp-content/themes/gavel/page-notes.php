<?php
/**
 * Template Name: Release Notes
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
					<div class="col-max-10 col-center animate-it">
						<?php the_title('<h1>','</h1>');?>
					</div><!-- .col-max-# -->
				</div><!-- .container-fluid -->
			</div><!-- .banner-inner -->
		</div><!-- .banner -->
		

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="page-content-wrap">
					<div class="container-fluid">
						<div class="col-max-10 col-center">
							<div class="release-notes">
								<?php 
									$outs = array(); if( have_rows('release_notes') ):
									while ( have_rows('release_notes') ) : the_row();  ob_start();
								?>
									<div class="release-note-item animate-it">
										<div class="release-note-image">
											<i class="icon-star"></i>
										</div>
										<div class="release-note-content font-fira">
											<h3><?php the_sub_field('version');?></h3>
											<h2 class="font-fira"><?php the_sub_field('title');?></h2>
											<?php the_sub_field('content');?>
										</div>
									</div><!-- .contact-details-item -->
								<?php $outs[] = ob_get_clean(); endwhile; 
							        else :
							        endif;
							        $outs = array_reverse($outs);
							        echo implode($outs);
							    ?>
						</div><!-- .col-max-# -->
					</div><!-- .container-fluid -->
				</div><!-- .page-content-wrap -->
			<?php endwhile; // End of the loop. ?>
		</div><!-- .container-fluid -->
	</main><!-- #main -->
<?php get_footer(); ?>
