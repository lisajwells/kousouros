<!-- /* Most of this content is generated through Custom Fields added through Home Page edit. */ -->

<!-- HOME TESTIMONIALS SECTION -->
<div class="section bg-darkgray" id="home-testimonials"><!-- home testimonials -->
    <div class="container">

        <h2><?php the_field('home_testimonials_title'); ?></h2>    
        
        <div class="row"><!-- carousel row -->
            <?php $testimonial_query = new WP_Query( 'category_name=testimonials&posts_per_page=9');  ?>

            <!-- THE TEXT CAROUSEL -->
            <div id="home-testimonials-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#home-testimonials-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home-testimonials-carousel" data-slide-to="1"></li>
                    <li data-target="#home-testimonials-carousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <?php $counter = 0; ?>
                        <?php while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
                            <?php $counter++; ?>
                            <?php if($counter < 4) : ?>
                                <div class="col-md-4">
                                    <blockquote><?php the_excerpt(); ?><footer><?php  the_title();  ?></footer></blockquote>
                                </div><!-- col-4 -->
                            <?php endif; ?>
                        <?php endwhile; // end of the loop. ?>
                    </div>

                    <div class="item">
                        <?php $counter = 0; ?>
                        <?php while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
                            <?php $counter++; ?>
                            <?php if($counter > 3 && $counter < 7) : ?>
                                <div class="col-md-4">
                                    <blockquote><?php the_excerpt(); ?><footer><?php  the_title();  ?></footer></blockquote>
                                </div><!-- col-4 -->
                            <?php endif; ?>
                        <?php endwhile; // end of the loop. ?>
                    </div>
                      
                    <div class="item">
                        <?php $counter = 0; ?>
                        <?php while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
                            <?php $counter++; ?>
                            <?php if($counter > 6 && $counter < 10) : ?>
                                <div class="col-md-4">
                                    <blockquote><?php the_excerpt(); ?><footer><?php  the_title();  ?></footer></blockquote>
                                </div><!-- col-4 -->
                            <?php endif; ?>
                        <?php endwhile; // end of the loop. ?>
                    </div>
                  
                <!-- /* Restore original Post Data */ -->
                <?php  wp_reset_postdata();  ?>

                </div><!-- carousel inner -->

                <!-- Controls -->
                <a class="left carousel-control" href="#home-testimonials-carousel" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#home-testimonials-carousel" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- home-testimonials-carousel -->
            <!-- THE TEXT CAROUSEL -->

        </div><!-- carousel .row -->
        <p class="testimonials-button"><a class="btn btn-hollow" href="<?php bloginfo('url'); ?>/testimonials">Read More Testimonials</a></p>
    </div><!-- .container -->
</div><!-- section testimonials