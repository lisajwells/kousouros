<?php
/*
Template Name: Notables
*/

get_header(); ?>

<a name="notables_top"></a><?php get_template_part( 'content', 'header' ); ?>

<div class="container">
    <div id="main-grid">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <img id="notables-img" src="<?php echo content_url(); ?>/images/sketch_court_1170x279.jpg">

                <!-- add id of page id and class of .notables_loop -->
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'notables_loop' ); ?>>

                    <div class="entry-content">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 notables-container">
                                <div id="notables-menu">
                                    <?php wp_nav_menu( array( 'theme_location' => 'notables-menu', 'container_class' => 'notables_menu_class' ) ); ?>
<!--                                     <div id="back-to-top-notables-fixed">
                                        <a class="smoothscroll" href="#notables_top">to top<br>
                                        <span class="fa fa-angle-double-up">&nbsp;</span></a>
                                    </div>
 -->
                                

                                </div>

                                <div class="notables-content">
                                    <?php  
                                    $whitecollar_query    = new WP_Query( 'category_name=white-collar-general'); 
                                    $healthcare_query     = new WP_Query( 'category_name=healthcare-and-pharmaceutical'); 
                                    $homicide_query       = new WP_Query( 'category_name=homicide'); 
                                    $racketeering_query   = new WP_Query( 'category_name=racketeering'); 
                                    $bribery_query        = new WP_Query( 'category_name=bribery'); 
                                    $narcotics_query      = new WP_Query( 'category_name=narcotics'); 
                                    $miscellaneous_query  = new WP_Query( 'category_name=miscellaneous-notables'); 
                                    $appeals_query        = new WP_Query( 'category_name=appeals'); 
                                    $extradition_query    = new WP_Query( 'category_name=extradition'); 
                                    ?>

                                    <?php if ( is_page( 'white-collar-general' )) {  // White Collar has one category  
                                        if ( $whitecollar_query->have_posts() ) : while ( $whitecollar_query->have_posts() ) : $whitecollar_query->the_post(); ?>

                                            <h3><a id="notable-<?php the_ID(); ?>"></a><?php  the_title();  ?></h3>

                                            <?php if ( has_tag( 'explanation-notables' )) { ?>
                                                <div class="explanation">
                                                    <?php the_content(); ?>
                                                </div>
                                            <?php } else { 
                                                the_content(); 
                                            } ?>

                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); 
                                        else : ?>
                                            <?php get_template_part( 'no-results' ) ?>
                                        <?php endif; // end the loop

                                    }?><!-- is_page -->


                                    <?php if ( is_page( 'white-collar-healthcare-pharmaceutical' )) {  // Healthcare has one category  
                                        if ( $healthcare_query->have_posts() ) : while ( $healthcare_query->have_posts() ) : $healthcare_query->the_post(); ?>

                                            <h3><a id="notable-<?php the_ID(); ?>"></a><?php  the_title();  ?></h3>

                                            <?php if ( has_tag( 'explanation-notables' )) { ?>
                                                <div class="explanation">
                                                    <?php the_content(); ?>
                                            </div>
                                            <?php } else { 
                                                the_content(); 
                                            } ?>

                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); 
                                        else : ?>
                                            <?php get_template_part( 'no-results' ) ?>
                                        <?php endif; // end the loop

                                    }?><!-- is_page -->

                                    <?php if ( is_page( 'homicide' )) { // Homicide has one category   
                                        if ( $homicide_query->have_posts() ) : while ( $homicide_query->have_posts() ) : $homicide_query->the_post(); ?>

                                            <h3><a id="notable-<?php the_ID(); ?>"></a><?php  the_title();  ?></h3>

                                            <?php if ( has_tag( 'explanation-notables' )) { ?>
                                                <div class="explanation">
                                                    <?php the_content(); ?>
                                                </div>
                                            <?php } else { 
                                                the_content(); 
                                            } ?>

                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); 
                                        else : ?>
                                            <?php get_template_part( 'no-results' ) ?>
                                        <?php endif; // end the loop

                                    }?><!-- is_page -->

                                    <?php if ( is_page( 'racketeering-bribery' )) {  // Bribery and Racketeering 2 categories ?>

                                        <h4>Racketeering</h4>

                                        <?php
                                            if ( $racketeering_query->have_posts() ) : while ( $racketeering_query->have_posts() ) : $racketeering_query->the_post(); ?>

                                            <h3><a id="notable-<?php the_ID(); ?>"></a><?php  the_title();  ?></h3>

                                                <?php if ( has_tag( 'explanation-notables' )) { ?>
                                                    <div class="explanation">
                                                        <?php the_content(); ?>
                                                    </div>
                                                <?php } else { 
                                                    the_content(); 
                                                } ?>
                                            <?php endwhile; ?>
                                            <?php wp_reset_postdata(); 
                                            else : ?>
                                                <?php get_template_part( 'no-results' ) ?>
                                            <?php endif; ?><!-- // end the loop -->

                                        <h4>Bribery</h4>

                                            <?php if ( $bribery_query->have_posts() ) : while ( $bribery_query->have_posts() ) : $bribery_query->the_post(); ?>

                                            <h3><a id="notable-<?php the_ID(); ?>"></a><?php  the_title();  ?></h3>

                                                <?php if ( has_tag( 'explanation-notables' )) { ?>
                                                    <div class="explanation">
                                                        <?php the_content(); ?>
                                                    </div>
                                                <?php } else { 
                                                    the_content(); 
                                                } ?>
                                            <?php endwhile; ?>
                                            <?php wp_reset_postdata(); 
                                            else : ?>
                                                <?php get_template_part( 'no-results' ) ?>
                                            <?php endif; // end the loop

                                    }?><!-- is_page -->

                                    <?php if ( is_page( 'narcotics' )) { // narcotics has one category   
                                        if ( $narcotics_query->have_posts() ) : while ( $narcotics_query->have_posts() ) : $narcotics_query->the_post(); ?>

                                            <h3><a id="notable-<?php the_ID(); ?>"></a><?php  the_title();  ?></h3>

                                            <?php if ( has_tag( 'explanation-notables' )) { ?>
                                                <div class="explanation">
                                                    <?php the_content(); ?>
                                                </div>
                                            <?php } else { 
                                                the_content(); 
                                            } ?>

                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); 
                                        else : ?>
                                            <?php get_template_part( 'no-results' ) ?>
                                        <?php endif; // end the loop

                                    }?><!-- is_page -->

                                    <?php if ( is_page( 'miscellaneous-appeals-extradition' )) { // Misc Appeals Exradition 3 categories ?>

                                        <h4>Miscellaneous</h4>

                                        <?php
                                        if ( $miscellaneous_query->have_posts() ) : while ( $miscellaneous_query->have_posts() ) : $miscellaneous_query->the_post(); ?>

                                            <h3><a id="notable-<?php the_ID(); ?>"></a><?php  the_title();  ?></h3>

                                            <?php if ( has_tag( 'explanation-notables' )) { ?>
                                                <div class="explanation">
                                                    <?php the_content(); ?>
                                                </div>
                                            <?php } else { 
                                                the_content(); 
                                            } ?>

                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); 
                                        else : ?>
                                            <?php get_template_part( 'no-results' ) ?>
                                        <?php endif; ?><!-- // end the loop -->

                                        <h4>Appeals</h4>

                                        <?php if ( $appeals_query->have_posts() ) : while ( $appeals_query->have_posts() ) : $appeals_query->the_post(); ?>

                                            <h3><a id="notable-<?php the_ID(); ?>"></a><?php  the_title();  ?></h3>

                                            <?php if ( has_tag( 'explanation-notables' )) { ?>
                                                <div class="explanation">
                                                    <?php the_content(); ?>
                                                </div>
                                            <?php } else { 
                                                the_content(); 
                                            } ?>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); 
                                        else : ?>
                                            <?php get_template_part( 'no-results' ) ?>
                                        <?php endif; ?><!-- // end the loop -->

                                        <h4>Extradition</h4>

                                        <?php if ( $extradition_query->have_posts() ) : while ( $extradition_query->have_posts() ) : $extradition_query->the_post(); ?>

                                            <h3><a id="notable-<?php the_ID(); ?>"></a><?php  the_title();  ?></h3>

                                            <?php if ( has_tag( 'explanation-notables' )) { ?>
                                                <div class="explanation">
                                                    <?php the_content(); ?>
                                                </div>
                                            <?php } else { 
                                                the_content(); 
                                            } ?>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); 
                                        else : ?>
                                            <?php get_template_part( 'no-results' ) ?>
                                        <?php endif; // end the loop
                                        
                                    }?><!-- is_page -->

                					<div id="back-to-top-notables">
                                        <a class="smoothscroll" href="#notables_top">back to top&nbsp;<span class="fa fa-angle-double-up">&nbsp;</span></a>
                                    </div>

                                </div><!-- notables content -->

                            </div><!-- notables container -->

                        </div><!-- row -->
                    </div><!-- .entry-content -->

                </article><!-- #post-## -->

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .row -->
</div><!-- .container -->


<?php get_footer(); ?>
