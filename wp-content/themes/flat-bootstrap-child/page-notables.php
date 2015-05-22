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
          						if ( is_page( 1414 )) {    
          						    $notables_cat = 'white-collar';
          						} elseif ( is_page( 1416 )) {	
          						    $notables_cat = 'healthcare-and-pharmaceutical';
          						} elseif ( is_page( 2245 )) {	
          						    $notables_cat = 'homicide';
          						} elseif ( is_page( 1418 )) {	
          						    $notables_cat = 'racketeering';
                      } elseif ( is_page( 2468 )) { 
                          $notables_cat = 'bribery';
          						} elseif ( is_page( 1420 )) {	
          						    $notables_cat = 'narcotics';
          						} elseif ( is_page( 1422 )) {	
          						    $notables_cat = 'appeals-and-extradition';
          						};
        						?>

        						<?php  
  		                $notables_query = new WP_Query( "category_name=$notables_cat" ); ?>

        						<?php if ( $notables_query->have_posts() ) : while ( $notables_query->have_posts() ) : $notables_query->the_post(); ?>

                      <h3><?php  the_title();  ?></h3>

                          <?php if ( has_tag( 'explanation-notables' )) { ?>
                            <div class="explanation">
                              <?php the_content(); ?>
                            </div>
                          <?php } else { ?>
                          <?php the_content(); ?>
                          <?php } ?>

                    <?php endwhile; else : ?>
                      <?php get_template_part( 'no-results' ) ?>
                    <?php endif; ?>

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
