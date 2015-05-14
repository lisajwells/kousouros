<?php
/*
Template Name: Testimonials
*/

get_header(); ?>

<?php get_template_part( 'content', 'header' ); ?>

<div class="container">
    <div id="main-grid" class="row">
        <div id="primary" class="content-area col-md-8 col-md-offset-2">
            <main id="main" class="site-main" role="main">

                <!-- <?php //while ( have_posts() ) : the_post(); ?> --><!-- i don't know why we had this loop within a loop -->

                    <!-- add id of page id and class of .testimonial_loop -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'testimonial_loop' ); ?>>
                        <div class="entry-content">
                        <?php 

                            $testimonial_query = new WP_Query( 'category_name=testimonials');

                            if ( $testimonial_query->have_posts() ) : while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
                                <blockquote><?php the_content(); ?>
                                <footer><?php  the_title();  ?></footer></blockquote>
                            <?php endwhile; else : ?>
                                <?php get_template_part( 'no-results' ) ?>
                            <?php endif; ?>

                        </div><!-- .entry-content -->
                    </article><!-- #post-## -->

                <?php //endwhile; // end of the loop. ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
