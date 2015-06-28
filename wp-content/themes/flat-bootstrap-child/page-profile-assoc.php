<?php
/*
Template Name: Profile Associates
*/

get_header(); ?>

<?php get_template_part( 'content', 'header' ); ?>

<div class="container">
    <div id="main-grid" class="row">
        <div id="primary" class="content-area col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">

            <main id="main" class="site-main" role="main">

                <!-- <?php //while ( have_posts() ) : the_post(); ?> --><!-- i don't know why we had this loop within a loop -->

                    <!-- add id of page id and class of .testimonial_loop -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'associates_loop' ); ?>>
                        <div class="entry-content">
                        <?php 

                            $associates_query = new WP_Query( 'category_name=profile-associate');

                            if ( $associates_query->have_posts() ) : while ( $associates_query->have_posts() ) : $associates_query->the_post(); ?>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <?php 
                                        if ( has_post_thumbnail() ) { // check if post has Post Thumbnail assigned to it.
                                            the_post_thumbnail('full');
                                        } 
                                        ?>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <h3><?php  the_title();  ?></h3>
                                        <?php the_content(); ?>
                                    </div>
                                </div><!-- row -->
                            <?php endwhile; 
                                wp_reset_postdata(); 
                            else :
                                get_template_part( 'no-results' );
                            endif; ?>

                        </div><!-- .entry-content -->

                    </article><!-- #post-## -->

                <?php //endwhile; // end of the loop. ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .row -->

</div><!-- .container -->

<?php get_footer(); ?>
