<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cgw
 */

get_header('alt'); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<main id="main" class="site-main" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class('campaign-single'); ?>>
				<?php 
					$banner_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
					$style = '';
					if($banner_image){
						$style = ' style="background-image: url('.$banner_image['0'].')"';
					}
				?>
				<header class="banner campaign-banner"<?php echo $style;?>>
					<div class="campaign-banner-inner"></div>
				</header><!-- .page-banner -->
				<div class="page-content-main">
					<div class="container-fluid">
						<div class="row campaign-single-inner">
							<div class="col-xs-12 col-md-7">
								<?php the_title('<h1 class="campaign-title font-fira">','</h1>');?>
								<div class="entry-content font-fira">
								<?php the_content();?>
								</div><!-- .entry-content -->
								<footer></footer>
							</div><!-- .col -->
							<div class="col-xs-12 col-md-4 col-md-offset-1">
								<div class="sidebar-form">
									<p class="form-label font-fira">Fill in the details to download</p>
									<?php 
										echo do_shortcode('[gravityform id=2 title=false description=false ajax=true tabindex=49 field_values="url='.get_permalink().'"]'); 
										$pdf = get_field('pdf');
									?>
									<a href="<?php echo $pdf['url'];?>" target="_blank" class="hide" id="download-campaign"></a>
								</div>
							</div><!-- .col -->
							
						</div><!-- .row -->
					</div><!-- .container-fluid -->
					
				</div><!-- .page-content-main -->
			</article>
		</main><!-- #main -->
	<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>
