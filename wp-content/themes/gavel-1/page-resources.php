<?php
/**
 * Template Name: Resources
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
		<div class="banner page-banner blog-banner">
			<div class="banner-inner">
				<div class="container-fluid">
					<?php the_title('<h1>','</h1>');?>
				</div><!-- .container-fluid -->
			</div><!-- .banner-inner -->
		</div><!-- .banner -->
		<div class="page-resouce-wrap">
			<div class="container-fluid">
				<?php 
					
					if(empty($_GET['filter'])){
						$filter = 'post';
					}else{
						$filter = $_GET['filter'];
					}
				?>
				<ul class="list-unstyled resource-tab font-fira clearfix">
					<li<?php if($filter == 'post'){ echo ' class="active"';}?>><a href="<?php echo get_permalink(24);?>">Blogs</a></li>
					<li<?php if($filter == 'article'){ echo ' class="active"';}?>><a href="<?php echo get_permalink(24);?>?filter=article">Articles</a></li>
					<li<?php if($filter == 'whitepaper'){ echo ' class="active"';}?>><a href="<?php echo get_permalink(24);?>?filter=whitepaper">Whitepapers</a></li>
					<li<?php if($filter == 'brochure'){ echo ' class="active"';}?>><a href="<?php echo get_permalink(24);?>?filter=brochure">Brochures</a></li>
					<li<?php if($filter == 'video'){ echo ' class="active"';}?>><a href="<?php echo get_permalink(24);?>?filter=video">Videos</a></li>
				</ul>
				<?php 
					if($filter == 'post'):
					$paged = get_query_var( 'paged', 1 );
					$args = array(
					    'post_type'      => $filter,
					    'posts_per_page' => 16,
					    'paged' => $paged
					);
					$resources = new WP_Query( $args );
					if ( $resources->have_posts() ) : 
				?>
					<div id="loadmorecontainer" class="flex-row resource-items">
						<?php while ( $resources->have_posts() ) : $resources->the_post();?>
							<div class="col-xs-6 col-sm-4 col-md-3 flex-item animate-it">
								<div class="resource-item">
									<a href="<?php the_permalink();?>" class="resource-thumb"><?php the_post_thumbnail('card-thumb');?></a>
									<h2><a href="<?php the_permalink();?>"><?php echo wp_trim_words(get_the_title(),'7', '..');?></a></h2>
									<a href="<?php the_permalink();?>" class="read-more"><i class="icon-arrow-right out"></i>Read more <i class="icon-arrow-right in"></i></a>
								</div><!-- .col -->
							</div><!-- .col -->
						<?php endwhile;?>
						<?php
		                    $link=get_next_posts_link('link',$resources->max_num_pages);
		                        if($link){
		                        echo '<div class="load-more col-xs-12 flex-item text-center"><a href="'.get_next_posts_page_link().'" class="loadmore button button-transparent button-blue"><i class="icon-reload l-icon"></i><span>'.__('LOAD MORE', 'gavs').'</span></a></div>';
		                        }
		                ?>
		                <?php else:?>
		                	<div class="col-xs-12 text-center">
		                		<h2>Nothing to show</h2>
		                	</div>
					</div><!-- .row -->
				<?php 
					endif; wp_reset_postdata();
				elseif($filter == 'video'):
				$paged = get_query_var( 'paged', 1 );
					$args = array(
					    'post_type'      => $filter,
					    'posts_per_page' => 16,
					    'paged' => $paged
					);
					$videos = new WP_Query( $args );
					if ( $videos->have_posts() ) : 
				?>
					<div id="loadmorecontainer" class="flex-row resource-items">
						<?php while ( $videos->have_posts() ) : $videos->the_post(); $video_url = get_field('video_url');?>
							<div class="col-xs-6 col-sm-4 col-md-3 flex-item animate-it">
								<a href="<?php echo $video_url;?>" class="resource-item video-item video-popup">
									<span class="resource-thumb"><?php the_post_thumbnail('card-thumb');?></span>
									<h2><?php the_title();?></h2>
									<!-- <a href="<?php the_permalink();?>" class="read-more"><i class="icon-arrow-right out"></i>Read more <i class="icon-arrow-right in"></i></a> -->
								</a><!-- .col -->
							</div><!-- .col -->
						<?php endwhile;?>
						<?php
		                    $link=get_next_posts_link('link',$videos->max_num_pages);
		                        if($link){
		                        echo '<div class="load-more col-xs-12 flex-item text-center"><a href="'.get_next_posts_page_link().'" class="loadmore button button-transparent button-blue"><i class="icon-reload l-icon"></i><span>'.__('LOAD MORE', 'gavs').'</span></a></div>';
		                        }
		                ?>
		                <?php else:?>
		                	<div class="col-xs-12 text-center">
		                		<h2>Nothing to show</h2>
		                	</div>
					</div><!-- .row -->
				<?php 
					endif; wp_reset_postdata();

				else:
					$paged = get_query_var( 'paged', 1 );
					$args = array(
					    'post_type'      => $filter,
					    'posts_per_page' => 16,
					    'paged' => $paged
					);
					$resources = new WP_Query( $args );
					if ( $resources->have_posts() ) : 
				?>
					<div id="loadmorecontainer" class="flex-row resource-items">
						<?php while ( $resources->have_posts() ) : $resources->the_post();?>
							<div class="col-xs-12 col-sm-6 col-md-4 flex-item animate-it">
								<a href="<?php the_permalink();?>" class="resource-list-item">
									<div class="resource-item-image">
										<?php the_post_thumbnail('res-thumb');?>
									</div><!-- .resource-item-image -->
									<div class="resource-item-content">
										<?php the_title('<h3 class="font-fira">','</h3>');?>
									</div><!-- .resource-item-content -->
								</a><!-- .resource-list-item -->
							</div><!-- .col -->
						<?php endwhile;?>
						<?php
		                    $link=get_next_posts_link('link',$resources->max_num_pages);
		                        if($link){
		                        echo '<div class="load-more col-xs-12 flex-item text-center"><a href="'.get_next_posts_page_link().'" class="loadmore button button-transparent button-blue"><i class="icon-reload l-icon"></i><span>'.__('LOAD MORE', 'gavs').'</span></a></div>';
		                        }
		                ?>
		                <?php else:?>
		                	<div class="col-xs-12 text-center">
		                		<h2>Nothing to show</h2>
		                	</div>
					</div><!-- .row -->
				<?php 
					endif; wp_reset_postdata();

				endif;
				?>

			</div><!-- .container-fluid -->
		</div><!-- .page-content-wrap -->
	</main><!-- #main -->
<?php get_footer(); ?>
