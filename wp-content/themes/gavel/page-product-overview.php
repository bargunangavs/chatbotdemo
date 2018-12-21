<?php
/**
 * Template Name: Product Overview
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
					<div class="container-inner">
					<span class="section-title-alt">Product overview</span>
					<div class="animate-it">
						<?php 
							printmeta('banner_title', '<h1>%s</h1>');
							printmeta('banner_description', '<p>%s</p>');
						?>
					</div>
					</div><!-- .container-inner -->
				</div><!-- .container-fluid -->
			</div><!-- .banner-inner -->
		</div><!-- .banner -->

			<?php while ( have_posts() ) : the_post(); ?>

			<div class="product-overview">
				<div class="container-fluid">
					<div class="product-overview-inner">
						<div class="container-inner no-side-label">
							<?php if( have_rows('product_overview') ):?>
								<div class="product-overview-items">
									<?php 
										while ( have_rows('product_overview') ) : the_row();
										$image = get_sub_field('image');
									?>
										<div id="<?php echo custom_URL(get_sub_field('title'));?>" class="product-overview-item product-overview-item-main">
											<div class="flex-row">
												<div class="col-xs-12 col-md-6 flex-item animate-it">
													<div class="product-overview-image">
														<img src="<?php echo $image['url'];?>" alt="<?php echo $image['title'];?>">
													</div><!-- .product-overview-image -->
												</div><!-- .col -->
												<div class="col-xs-12 col-md-6 flex-item animate-it">
													<div class="product-overview-content font-fira">
														<h3 class="font-fira"><?php the_sub_field('title');?></h3>
														<p class="tag-line"><?php the_sub_field('description');?></p>
														<?php the_sub_field('content');?>
													</div><!-- .product-overview-content -->
												</div><!-- .col -->
											</div><!-- .row -->
										</div><!-- .product-overview-item -->
									<?php endwhile;?>
								</div><!-- .product-overview-items -->
							<?php endif;?>
						</div><!-- .container-inner -->
					</div><!-- .product-overview-inner -->
				</div><!-- .container-fluid -->
			</div><!-- .product-overview -->
			<?php endwhile; // End of the loop. ?>
	</main><!-- #main -->
<?php get_footer(); ?>
