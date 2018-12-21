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
		
	<?php 

		while ( have_posts() ) : the_post();
		$pdf = get_field('pdf_file');

	?>
		<!-- <div class="banner page-banner banner-image-fix"></div> --><!-- .banner -->
		
		<div class="page-content-wrap resorce-content-wrap">
			<div class="container-fluid">
				<div class="col-max-8 col-center animate-it">
					<a href="<?php echo get_permalink(24);?>?filter=<?php echo get_post_type();?>" class="go-back"><i class="icon-arrow-left in"></i>Back to Resources<i class="icon-arrow-left out"></i></a>
					<div class="resource-single-main clearfix">
						<div class="resource-single-thumb">
							<?php the_post_thumbnail('res-thumb');?>
							<span>pdf</span>
						</div><!-- .resource-single-thumb -->
						<div class="resource-single-content">
							<?php the_title('<h1 class="font-book">', '</h1>');?>
							<div class="entry-content font-fira">
								<?php the_content();?>
							</div>
							<?php 
							if($pdf):
								if(get_post_type() == 'whitepaper'){
							?>
								<div class="download-form-main">
									<p class="font-fira">Fill in the details to download</p>
									<?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49"]'); ?>
								</div>
								<a href="<?php echo $pdf['url'];?>" id="download-anchor" class="hide" target="_blank"></a>
							<?php 
								}else{
									echo '<a href="'.$pdf['url'].'" class="button button-blue button-transparent" target="_blank"><i class="icon-download l-icon"></i>Download PDF</a>';
								}
								endif;
							?>
						</div><!-- .resource-single-content -->
					</div><!-- .resource-single-main -->
				</div>
			</div><!-- .container-fluid -->
		</div><!-- .page-content-wrap -->
	<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
<?php get_footer(); ?>
