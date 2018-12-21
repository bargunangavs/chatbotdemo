<?php
/**
 * Template Name: Contact Us
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
						<?php 
							printmeta('banner_title', '<h1>%s</h1>');
							printmeta('banner_description', '<p>%s</p>');
						?>
					</div><!-- .col-max-# -->
				</div><!-- .container-fluid -->
			</div><!-- .banner-inner -->
		</div><!-- .banner -->
		

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="page-content-wrap">
					<div class="container-fluid">
						<div class="col-max-10 col-center">
							<div class="row">
								<div class="col-xs-12 col-md-7 animate-it">
									<div class="contact-form-main font-fira">
										<?php echo do_shortcode('[contact-form-7 id="149" title="Contact us"]');?>
									</div>
								</div><!-- .col -->
								<div class="col-xs-12 col-md-5">
									<?php if( have_rows('conatct_details') ):?>
										<div class="contact-details-main">
											<h2 class="animate-it">For sales contact</h2>
											<?php 
												while ( have_rows('conatct_details') ) : the_row();
												$c_falg = get_sub_field('flag');
											?>
												<div class="contact-details-item animate-it">
													<img src="<?php echo $c_falg['url'];?>" alt="<?php echo $c_falg['title'];?>">
													<?php the_sub_field('address');?>
												</div><!-- .contact-details-item -->
											<?php endwhile;?>
										</div><!-- .contact-details-main -->
									<?php endif;?>
								</div><!-- .col -->
							</div><!-- .row -->
						</div><!-- .col-max-# -->
					</div><!-- .container-fluid -->
				</div><!-- .page-content-wrap -->
			<?php endwhile; // End of the loop. ?>
		</div><!-- .container-fluid -->
	</main><!-- #main -->
<?php get_footer(); ?>
