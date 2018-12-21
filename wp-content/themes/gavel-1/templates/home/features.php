<div class="product-features">
	<div class="container-fluid">
		<div class="container-inner">
			<div class="section-head clearfix animate-it">
				<?php printmeta('f_title', '<h2 class="section-title">%s</h2>');?>
				<a href="<?php echo get_permalink(21 );?>" class="read-more"><i class="icon-arrow-right out"></i>Read more <i class="icon-arrow-right in"></i></a>
			</div>
		</div><!-- .container-inner -->
		<div class="product-features-inner">
			<div class="container-inner fix-right">
				<?php if( have_rows('features') ):?>
					<span class="section-title-alt">Features</span>
					<div class="product-features-items flex-row flex-grid-center">
						<?php 
							while ( have_rows('features') ) : the_row();
							$image = get_sub_field('image');
						?>
							<div class="col-xs-12 col-sm-6 col-md-4 flex-item animate-it" >
								<a href="<?php echo get_permalink(21);?>/#<?php echo custom_URL(get_sub_field('title'));?>" class="product-feature-item flex-inner">
									<div class="product-feature-item-inner">
										<img src="<?php echo $image['url'];?>" alt="<?php echo $image['title'];?>">
										<h3 class="font-fira"><?php the_sub_field('title');?></h3>
									</div>
								</a><!-- .product-feature -->
							</div><!-- .col -->
						<?php endwhile;?>
					</div><!-- .product-feature-items -->
				<?php endif;?>
			</div><!-- .container-inner -->
		</div><!-- .product-features-inner -->
	</div><!-- .container-fluid -->
</div><!-- .product-features -->