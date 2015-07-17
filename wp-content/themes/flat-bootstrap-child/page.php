<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package flat-bootstrap
 */

get_header(); ?>

<?php get_template_part( 'content', 'header' ); ?>

<div class="container">
  <div id="main-grid" class="row">

      <div id="primary" class="content-area col-md-8">
        <main id="main" class="site-main" role="main">

          <?php if (have_posts()) : ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'page' ); ?>

          <?php endwhile; // end of the loop. ?>
          <?php endif; ?>

        </main><!-- #main -->
      </div><!-- #primary -->

    <?php get_sidebar(); ?>

  </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>