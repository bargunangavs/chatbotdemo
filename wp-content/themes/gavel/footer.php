<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gavel
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container-fluid">
			<span class="footer-logo"><img src="<?php echo get_template_directory_uri();?>/assets/images/gavs-logo.svg" alt="GAVS"></span>
			<div class="row">
				<div class="col-xs-12 col-md-7 col-lg-8">
					<p class="site-info"><span><?php the_field('footer_text', 'option');?></span><a href="<?php echo get_permalink(157);?>">Release Notes</a><a href="<?php echo get_permalink(3);?>">Privacy Policy</a><a href="<?php echo get_permalink(154);?>">Terms of use</a></p>
					<ul class="list-inline social-lnks">
						<?php 
							printmeta('facebook', '<li><a href="%s" target="_blank" title="Facebook"><i class="icon-facebook-alt"></i></a></li>', '', 'option');
							printmeta('google', '<li><a href="%s" target="_blank" title="Google"><i class="icon-google"></i></a></li>', '', 'option');
							printmeta('twitter','<li><a href="%s" target="_blank" title="Twitter"><i class="icon-twitter"></i></a></li>', '', 'option');
							printmeta('instagram','<li><a href="%s" target="_blank" title="Instagram"><i class="icon-instagram"></i></a></li>', '', 'option');
							printmeta('youtube','<li><a href="%s" target="_blank" title="YouTube"><i class="icon-youtube-play"></i></a></li>', '', 'option');
							?>
					</ul>
				</div><!-- .col -->
				<!-- <div class="col-xs-12 col-md-5 col-lg-4">
					<h2 class="font-fira">Get Weekly News on GAVel</h2>
					<div class="subscribe-form">
						<?php // echo do_shortcode('[contact-form-7 id="5" title="GAVel subscribe"]');?>
					</div>
				</div> --> <!-- .col --> 
			</div><!-- .row -->
		</div><!-- .container-fluid -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
