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
		<img src="<?php echo content_url(); ?>/images/sketch_court_1170x393.jpg">

        <?php while ( have_posts() ) : the_post(); ?>

          <!-- add id of page id and class of .notables_loop -->
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'notables_loop' ); ?>>

            <div class="entry-content">
	            <div class="row">
	            	<div class="col-md-2 col-md-offset-1">
					<?php wp_nav_menu( array( 'theme_location' => 'notables-menu', 'container_class' => 'notables_menu_class' ) ); ?>
					</div><!-- col-md-2 -->
	            	<div class="col-md-6 notables-content">

		                <?php  
						if ( is_page( 1414 )) {    
						    $notables_cat = 'white-collar';
						} elseif ( is_page( 1416 )) {	
						    $notables_cat = 'healthcare-and-pharmaceutical';
						} elseif ( is_page( 2245 )) {	
						    $notables_cat = 'homicide';
						} elseif ( is_page( 1418 )) {	
						    $notables_cat = 'racketeering-and-bribery';
						} elseif ( is_page( 1420 )) {	
						    $notables_cat = 'narcotics';
						} elseif ( is_page( 1422 )) {	
						    $notables_cat = 'appeals-and-extradition';
						};
						?>

						<?php  
		                $notables_query = new WP_Query( "category_name=$notables_cat" ); ?>

						<?php while ( $notables_query->have_posts() ) : $notables_query->the_post(); ?>

		                    <h3><?php  the_title();  ?></h3>
		                    <?php the_content(); ?>

	                	<?php endwhile; // end of the loop. ?>

	            	</div><!-- col-md-6 -->

				</div><!-- row -->
            </div><!-- .entry-content -->

          </article><!-- #post-## -->

        <?php endwhile; // end of the loop. ?>

      </main><!-- #main -->
    </div><!-- #primary -->
  </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
