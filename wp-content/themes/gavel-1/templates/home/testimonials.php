<div class="testimonials-wrap">
	<div class="container-fluid">
		<div class="product-features-inner">
			<div class="container-inner">
				<?php if( have_rows('testimonials') ):?>
					<span class="section-title-alt">Testimonials</span>
					<div class="testimonials-carousel animate-it">
						<?php 
							while ( have_rows('testimonials') ) : the_row();
							$image = get_sub_field('image');
						?>
							<div class="testimonials-carousel-item">
								<div class="testimonials-carousel-content font-book">
									<?php the_sub_field('text');?>
								</div><!-- .testimonials-carousel-content -->
								<div class="testimonials-carousel-author">
									<img src="<?php echo $image['url'];?>" alt="<?php echo $image['title'];?>">
									<div class="testimonials-carousel-author-inner font-fira">
										<p><strong><?php the_sub_field('name');?></strong></p>
										<p><?php the_sub_field('designation');?></p>
									</div>
								</div>
							</div><!-- .testimonials-carousel-item -->
						<?php endwhile;?>
					</div><!-- .testimonials-carousel -->
				<?php endif;?>
			</div><!-- .container-inner -->
		</div><!-- .product-features-inner -->
	</div><!-- .container-fluid -->
</div><!-- .testimonials-wrap -->