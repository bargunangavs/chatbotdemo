<?php 
$args = array(
    'post_type'      => 'success_stories',
    'posts_per_page' => 1,
);
$success_stories = new WP_Query( $args );
if ( $success_stories->have_posts() ) : 
?>
	<div class="home-succes-strory">
		<div class="container-fluid">
			<div class="container-inner">
				<span class="section-title-alt">successstories</span>
				<?php while ( $success_stories->have_posts() ) : $success_stories->the_post(); ?>
					<div class="home-successstory-item animate-it">
						<?php the_post_thumbnail('thumbnail');?>
						<div class="home-successstory-item-inner">
							<?php 
								//printmeta('strory_for', '<h3>%s</h3>');
								the_title( '<h2 class="font-fira">', '</h2>');
							?>
							<a href="<?php echo get_permalink(26);?>/#success-story-<?php echo get_the_id();?>" class="read-more"><i class="icon-arrow-right out"></i>Read more<i class="icon-arrow-right in"></i></a>
						</div><!-- .home-successstory-item-inner -->
					</div><!-- .home-successstory-item -->
				<?php endwhile;?>
			</div><!-- .container-inner -->
		</div><!-- .container-fluid -->
	</div><!-- .home-succes-strory -->
<?php endif; wp_reset_postdata();?>