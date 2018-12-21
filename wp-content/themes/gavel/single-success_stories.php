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
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<a href="<?php echo get_permalink(26);?>" class="go-back"><i class="icon-arrow-left in"></i>Back to Success stories<i class="icon-arrow-left out"></i></a>
							<?php the_title( '<h1 class="single-title">', '</h1>' ); ?>
						</header><!-- .entry-header -->
						<div class="row">
							<div class="col-xs-12 col-md-7">
								<div class="entry-content single-entry font-fira">
									<div class="success-story-content-in font-fira animate-it">
										<h4 class="font-fira">Challenge</h4>
										<?php the_content();?>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-6 animate-it">
											<?php printmeta('solution', '<div class="success-story-content-in font-fira"><h4 class="font-fira">Solution</h4>%s</div>');?>
										</div><!-- .col-->
										<div class="col-xs-12 col-sm-6 animate-it">
											<?php printmeta('benefits', '<div class="success-story-content-in font-fira"><h4 class="font-fira">Benefits</h4>%s</div>');?>
										</div><!-- .col-->
									</div><!-- .row -->
									<?php printmeta('more_link', '<a href="%s" class="button button-blue button-transparent" target="_blank"><i class="icon-link l-icon"></i>Read more at Gavstech.com</a>');?>
								</div><!-- .entry-content -->
							</div><!-- .col -->
							<div class="col-xs-12 col-md-5">
								<?php
									$pdf = get_field('pdf');
									if($pdf){
										echo '<a href="'.$pdf['url'].'" class="button button-blue button-transparent" target="_blank"><i class="icon-pdf l-icon"></i>Download the Success Story</a>';
									}
								?>
							</div><!-- .col -->
						</div><!--.row -->

					</article><!-- #post-## -->

				</div>
			</div><!-- .container-fluid -->
		</div><!-- .page-content-wrap -->
	<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
<?php get_footer(); ?>
