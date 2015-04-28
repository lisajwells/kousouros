<?php
/**
 * Theme: Flat Bootstrap
 * 
 * Template Name: Page - Press (based on No Sidebar)
 *
 * Page with no sidebar, but still contained within the page margins
 *
 * This is the template that displays full width pages with no sidebar.
 *
 * @package flat-bootstrap
 */

get_header(); ?>

<?php get_template_part( 'content', 'header' ); ?>

<div class="container">
<div id="main-grid" class="row">

	<div id="primary" class="content-area-wide col-md-12">
		<main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class( 'testimonial_loop' ); ?>>

            <div class="entry-content">
                <?php the_content(); ?>
                <?php 

                $press_query = new WP_Query( 'category_name=press');

                while ( $press_query->have_posts() ) : $press_query->the_post(); ?>

                    <p><?php the_content(); ?></p>
                    <?php  the_title();  ?></p>

                <?php endwhile; // end of the loop. ?>

                <?php edit_post_link( __( '<span class="glyphicon glyphicon-edit"></span> Edit', 'flat-bootstrap' ), '<footer class="entry-meta"><div class="edit-link">', '</div></footer>' ); ?>

            </div><!-- .entry-content -->

          </article><!-- #post-## -->

        <?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php //get_sidebar(); ?>

</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
