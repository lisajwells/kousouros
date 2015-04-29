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

          <article id="post-<?php the_ID(); ?>" <?php post_class( 'press_loop' ); ?>>

						<div class="row">
	            <div class="col-md-10 col-md-offset-1 press-subhed">
	            <h3>Print</h3>
	          </div>
	          </div>

						<div class="row">

            <div class="entry-content-press1 col-md-5 col-md-offset-1"><!-- DailyNews, NYT, Journal News-->
                <?php the_content(); ?>
                <?php 

                $press_print1_query = new WP_Query( 'category_name=daily-news');
                $press_print2_query = new WP_Query( 'category_name=new-york-times');
                $press_print3_query = new WP_Query( 'category_name=journal-news');

                ?>


								<h4>Daily News</h4>

                <?php while ( $press_print1_query->have_posts() ) : $press_print1_query->the_post(); ?>

                    <p class="print-date"><?php  the_date();  ?></p>
                    <p class="print-title"><?php  the_title();  ?></p>

                <?php endwhile; // end of the loop. ?>

								<h4>New York Times</h4>

                <?php while ( $press_print2_query->have_posts() ) : $press_print2_query->the_post(); ?>

                    <p class="print-date"><?php  the_date();  ?></p>
                    <p class="print-title"><?php  the_title();  ?></p>

                <?php endwhile; // end of the loop. ?>

								<h4>Journal News</h4>

                <?php while ( $press_print3_query->have_posts() ) : $press_print3_query->the_post(); ?>

                    <p class="print-date"><?php  the_date();  ?></p>
                    <p class="print-title"><?php  the_title();  ?></p>
                    
 <?php if( get_field( 'download_pdf_file_url') ): ?>
    <a target="_blank" href="<?php the_field('download_pdf_file_url'); ?>">Télécharger le PDF</a>
      <?php else: ?>
     <?php endif; ?>


                <?php endwhile; // end of the loop. ?>


            </div><!-- .entry-content -->


            <div class="entry-content-press2 col-md-5"><!-- Newsday, TheTimesOfSmithtown -->
                <?php the_content(); ?>
                <?php 

                $press_print4_query = new WP_Query( 'category_name=newsday');
                $press_print5_query = new WP_Query( 'category_name=times-of-smithtown');

                ?>

								<h4>Newsday</h4>

                <?php while ( $press_print4_query->have_posts() ) : $press_print4_query->the_post(); ?>

                    <p class="print-date"><?php  the_date();  ?></p>
                    <p class="print-title"><?php  the_title();  ?></p>

                <?php endwhile; // end of the loop. ?>

								<h4>Times of Smithtown</h4>

                <?php while ( $press_print5_query->have_posts() ) : $press_print5_query->the_post(); ?>

                    <p class="print-date"><?php  the_date();  ?></p>
                    <p class="print-title"><?php  the_title();  ?></p>

                <?php endwhile; // end of the loop. ?>


            </div><!-- .entry-content -->

          </div><!-- .row Print -->

						<div class="row">
	            <div class="col-md-10 col-md-offset-1 press-subhed">
	            <h3>Cable and Network Appearances</h3>
	          </div>
	          </div>


          <div class="row"><!-- Here starts the TV section -->
          	
            <div class="entry-content-press3 col-md-5 col-md-offset-1">

                <?php 

                $press_tv1_query = new WP_Query( 'category_name=TV');

                ?>

                <?php while ( $press_tv1_query->have_posts() ) : $press_tv1_query->the_post(); ?>

                    <p><?php  the_title();  ?></p>
                    <p><?php the_content(); ?></p>

                <?php endwhile; // end of the loop. ?>

              </div><!-- .entry-content-press3 -->

          </div><!-- .row TV -->

          </article><!-- #post-## -->

        <?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php //get_sidebar(); ?>

</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
