<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The Sidebar positioned on the right. If no widgets added, display some as samples.
 *
 * @package flat-bootstrap
 */
?>
	<div id="secondary" class="widget-area col-md-4" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'Sidebar' ) ) : ?>

			<aside id="pages" class="widget widget_pages">
				<h2 class="widget-title"><?php _e( 'Site Content', 'flat-bootstrap' ); ?></h2>
				<ul>
					<?php wp_list_pages( array( 'title_li' => '' ) ); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
