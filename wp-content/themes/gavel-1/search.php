<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package gavel
 */
get_header(); ?>

	<main id="main" class="site-main" role="main">
		
			<?php if ( have_posts() ) : ?>
				<div class="banner page-banner">
			<div class="banner-inner">
				<div class="container-fluid">
					<div class="col-max-10 col-center">
						<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'millasays' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</div><!-- .col-max-# -->
				</div><!-- .container-fluid -->
			</div><!-- .banner-inner -->
		</div><!-- .banner -->

				<?php /* Start the Loop */ ?>
				<div class="page-content-wrap">
					<div class="container-fluid">
					<div class="col-max-10 col-center">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );
					?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			</div>
				</div><!-- .container-fluid -->
			</div>
			
			<?php endif; ?>
		
	</main><!-- #main -->
<?php get_footer(); ?>
