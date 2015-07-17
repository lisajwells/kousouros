<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The template used for displaying page content in page.php
 *
 * @package flat-bootstrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php get_template_part( 'content', 'page-nav' ); ?>

	</div><!-- .entry-content -->
	
</article><!-- #post-## -->