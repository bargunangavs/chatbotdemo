<?php
/**
 * Template Name: Newsletter
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cgw
 */

get_header('alt-2'); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<main id="main" class="site-main campaign-single" role="main">
				<?php 
					$banner_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
					$style = '';
					if($banner_image){
						$style = ' style="background-image: url('.$banner_image['0'].')"';
					}
				?>
				<div class="banner campaign-banner news-letter-banner"<?php echo $style;?>>
					<div class="container-fluid">
						<div class="row news-letter-banner-inner">
							<div class="col-xs-12 col-md-4">
								<div class="site-branding">
									<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								</div>
								<h1><?php the_title();?></h1>
							</div><!-- .col -->
							<div class="col-xs-12 col-md-8">
								<?php printmeta('banner_title', '<h2>%s</h2>');?>
							</div><!-- .col -->
						</div><!-- .row -->
					</div><!-- .container-fluid -->
				</div><!-- .page-banner -->
				<div class="page-content-main">
					<div class="newsletter-single-inner">
						<div class="container-fluid">
							<div class="row font-fira">
								<div class="col-xs-12 col-md-4">
									
								</div><!-- .col -->
								<div class="col-xs-12 col-md-8">
									<div class="newsletter-subscribe">
										<?php echo do_shortcode( '[contact-form-7 id="5" title="GAVel subscribe"]');?>
									</div>
								</div><!-- .col -->
								<div class="col-xs-12 col-md-8 pull-right">
									<div class="newsletter-content-in">
										<?php the_content();?>
									</div>
								</div><!-- .col -->
								<div class="col-xs-12 col-md-4">
									<?php printmeta('testimonial', '<div class="newsletter-tesi"><p>%s</p></div>');?>
								</div><!-- .col -->
								
							</div><!-- .row -->
						</div><!-- .container-fluid -->
					</div>
				</div><!-- .page-content-main -->
		</main><!-- #main -->
	<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>
