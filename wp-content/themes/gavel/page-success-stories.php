<?php
/**
 * Template Name: Success Stories
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
						<span class="section-title-alt">Success Stories</span>
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
				<div class="page-content-wrap">
					<div class="container-fluid">
						<div class="container-inner no-side-label">
							<div class="container-inner-in">
								<div class="page-featured-text animate-it">
									<?php the_content();?>
								</div>
								<?php 
									$paged = get_query_var( 'paged', 1 );
									$args = array(
									    'post_type'      => 'success_stories',
									    'posts_per_page' => 6,
									    'paged' => $paged
									);
									$success_stories = new WP_Query( $args );
									if ( $success_stories->have_posts() ) : 
								?>
								<div id="loadmorecontainer" class="successstory-items">
									<?php 
										while ( $success_stories->have_posts() ) : $success_stories->the_post();
										$pdf = get_field('pdf');
									?>
										<div id="success-story-<?php echo get_the_id();?>" class="successstory-item clearfix animate-it">
											<div class="success-story-left">
												<a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
											</div><!-- .success-story-left -->
											<div class="success-story-right">
												<?php the_title( sprintf( '<h2 class="font-fira"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
												<a href="<?php the_permalink();?>" class="read-more"><i class="icon-arrow-right out"></i>Read more<i class="icon-arrow-right in"></i></a>
											</div><!-- .success-story-right -->
										</div><!-- .successstory-item -->
									<?php endwhile;?>
									<?php
					                    $link=get_next_posts_link('link',$success_stories->max_num_pages);
					                        if($link){
					                        echo '<div class="load-more text-center"><a href="'.get_next_posts_page_link().'" class="loadmore button button-transparent button-blue"><i class="icon-reload l-icon"></i><span>'.__('LOAD MORE', 'gavs').'</span></a></div>';
					                        }
					                ?>
								</div>
							</div>
						<?php endif; wp_reset_postdata();?>
						</div><!-- .container-inner -->
					</div><!-- .container-fluid -->
				</div><!-- .page-content-wrap -->
			<?php endwhile; // End of the loop. ?>
		</div><!-- .container-fluid -->
	</main><!-- #main -->
<?php get_footer(); ?>
