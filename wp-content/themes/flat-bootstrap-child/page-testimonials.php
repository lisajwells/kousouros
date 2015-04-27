<?php
/*
Template Name: Testimonials
*/


get_header(); ?>

<!-- /* <?php get_template_part(/* 'content', 'header' */); ?> */ -->

<div class="container">
<div id="main-grid" class="row">

  <div id="primary" class="content-area col-md-8 col-md-offset-2">
    <main id="main" class="site-main" role="main">

     <?php while ( have_posts() ) : the_post(); ?>

 <article id="post-<?php the_ID(); ?>" <?php post_class( 'testimonial_loop' ); ?>>

    <div class="entry-content">

        <?php the_content(); ?>

      <?php 

        $testimonial_query = new WP_Query( 'category_name=testimonials');

        while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>

        <blockquote><?php the_content(); ?></blockquote>
        <h3><?php  the_title();  ?></h3>

      <?php endwhile; // end of the loop. ?>

        <?php edit_post_link( __( '<span class="glyphicon glyphicon-edit"></span> Edit', 'flat-bootstrap' ), '<footer class="entry-meta"><div class="edit-link">', '</div></footer>' ); ?>
        
        </div><!-- .entry-content -->
        
    </article><!-- #post-## -->
    
      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

    
</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
