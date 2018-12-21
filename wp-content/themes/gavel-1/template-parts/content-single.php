<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gavel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<a href="<?php echo get_permalink(24);?>" class="go-back"><i class="icon-arrow-left in"></i>Back to Resources<i class="icon-arrow-left out"></i></a>
		<?php the_title( '<h1 class="single-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content single-entry font-fira">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gavel' ),
				'after'  => '</div>',
			) );
		?>
		<?php printmeta('more_link', '<a href="%s" class="button button-blue button-transparent" target="_blank"><i class="icon-link l-icon"></i>Read more at Gavstech.com</a>');?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

