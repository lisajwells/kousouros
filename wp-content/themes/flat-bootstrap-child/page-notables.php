<?php
/*
Template Name: Notables
*/

get_header(); ?>

<?php get_template_part( 'content', 'header' ); ?>

<!-- //* <img src="<?php bloginfo('template_url'); ?>/../images/sketch_court_1170x393.jpg"/> */ -->
<div class="container">
  <div id="main-grid">
    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">
    		<img id="notables-img" src="<?php echo content_url(); ?>/images/sketch_court_1170x279.jpg">
         <?php //while ( have_posts() ) : the_post(); ?>

          <!-- add id of page id and class of .notables_loop -->
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'notables_loop' ); ?>>

            <div class="entry-content">
	            <div class="row">
	            	<div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0 notables-container">
                  <div id="notables-menu">
          					<?php wp_nav_menu( array( 'theme_location' => 'notables-menu', 'container_class' => 'notables_menu_class' ) ); ?>
                  </div>

  	            	<div class="notables-content">


        						<?php  
  		                $appeals_query        = new WP_Query( 'category_name=appeals'); 
                      $bribery_query        = new WP_Query( 'category_name=bribery'); 
                      $extradition_query    = new WP_Query( 'category_name=extradition'); 
                      $healthcare_query     = new WP_Query( 'category_name=healthcare-and-pharmaceutical'); 
                      $homicide_query       = new WP_Query( 'category_name=homicide'); 
                      $miscellaneous_query  = new WP_Query( 'category_name=miscellaneous'); 
                      $narcotics_query      = new WP_Query( 'category_name=narcotics'); 
                      $racketeering_query   = new WP_Query( 'category_name=racketeering'); 
                      $whitecollar_query    = new WP_Query( 'category_name=white-collar-general'); ?>

                    <?php  
                      if ( is_page( 1414 )) {    

                          if ( $whitecollar_query->have_posts() ) : while ( $whitecollar_query->have_posts() ) : $whitecollar_query->the_post(); ?>

                            <h3><?php  the_title();  ?></h3>

                          <?php endwhile; else : ?>
                            <?php get_template_part( 'no-results' ) ?>
                          <?php endif; 
                      }?>

        						<div id="back-to-top-notables">
                      <a class="smoothscroll" href="#page">back to top&nbsp;<span class="fa fa-angle-up">&nbsp;</span></a>
                    </div>

  	            	</div><!-- notables content -->
                </div><!-- notables container -->

      				</div><!-- row -->
            </div><!-- .entry-content -->

          </article><!-- #post-## -->

        <?php //endwhile; // end of the loop. ?>

      </main><!-- #main -->
    </div><!-- #primary -->
  </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
