<div class="banner home-banner">
	<div class="banner-inner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-6 animate-it">
					<?php 
						printmeta('banner_title', '<h2>%s</h2>');
						printmeta('banner_description', '<p>%s</p>');
						printmeta('banner_label', '<span class="b-label font-fira">%s</span>');
					?>
					<ul class="list-inline">
						<li><a href="http://gavel.solutions/demo" class="button button-white" target="_blank"><span>Try it for free <i class="icon-angle-right"></i></span></a></li>
						<?php printmeta('banner_video_url', '<li><a href="%s" class="watch-video video-popup font-fira">Watch how it works</span></a></li>');?>
					</ul>
				</div><!-- .col -->
				<div class="col-xs-12 col-md-6 animate-it">
					<?php $banner_image = get_field('banner_image');?>
					<img src="<?php echo $banner_image['url'];?>" alt="<?php echo $banner_image['title'];?>">
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container-fluid -->
	</div><!-- .banner-inner -->
</div><!-- .banner -->