<div class="product-overview">
	<div class="container-fluid">
		<div class="container-inner animate-it product-overview-desc">
			<?php printmeta('main_title', '<h2 class="section-title">%s</h2>');?>
			<?php printmeta('main_description', '<p>%s</p>');?>
		</div><!-- .container-inner -->
		<div class="product-overview-inner">
			<div class="container-inner">
				<?php if( have_rows('product_overview') ):?>
					<span class="section-title-alt">PRODUCT OVERVIEW</span>
					<div class="product-overview-items">
						<?php 
							while ( have_rows('product_overview') ) : the_row();
							$image = get_sub_field('image');
						?>
							<div class="product-overview-item">
								<div class="flex-row flex-center">
									<div class="col-xs-12 col-md-6 flex-item">
										<div class="product-overview-image animate-it">
											<img src="<?php echo $image['url'];?>" alt="<?php echo $image['title'];?>">
										</div><!-- .product-overview-image -->
									</div><!-- .col -->
									<div class="col-xs-12 col-md-6 flex-item">
										<div class="product-overview-content animate-it">
											<h3 class="font-fira"><?php the_sub_field('title');?></h3>
											<p class="font-fira"><?php the_sub_field('description');?></p>
											<a href="<?php echo get_permalink(19);?>#<?php echo custom_URL(get_sub_field('title'));?>" class="read-more"><i class="icon-arrow-right out"></i>Read more<i class="icon-arrow-right in"></i></a>
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