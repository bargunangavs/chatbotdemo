<div class="get-start">
	<div class="container-fluid">
		<div class="flex-row flex-center">
			<div class="col-xs-12 col-sm-6 col-lg-3 flex-item animate-it">
				<?php $image = get_field('gs_image');?>
				<img src="<?php echo $image['url'];?>" alt="<?php echo $image['title'];?>">
			</div><!-- .col-->
			<div class="col-xs-12 col-sm-6 col-lg-4 flex-item animate-it">
				<?php 
					printmeta('gs_title','<h2 class="font-fira">%s</h2>');
					printmeta('gs_description','<p class="font-fira">%s</p>');
				?>
			</div><!-- .col-->
			<div class="col-xs-12 col-lg-5 gs-btn-wrap flex-item animate-it">
				<ul class="list-inline">
					<li>
						<a href="http://gavel.solutions/demo" class="button button-main" target="_blank"><span>Try it for free<i class="icon-angle-right"></i></span></a>
					</li>
					<li>
						<a href="<?php echo get_permalink(30);?>" class="button button-blue button-transparent"><span>Contact sales</span></a>
					</li>
				</ul>
			</div><!-- .col-->
		</div><!-- .row -->
	</div><!-- .container-fluid -->
</div><!-- .testimonials-wrap -->