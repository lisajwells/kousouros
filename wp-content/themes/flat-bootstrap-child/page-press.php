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

        <!-- add id of page id and class of .press_loop -->
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'press_loop' ); ?>>

					<div class="row">
						<div class="col-md-10 col-md-offset-1 press-subhed">
							<h3>Print</h3>
						</div>
					</div>

					<div class="row"><!-- Here starts the 2 Press-Print columns -->
						<div class="entry-content-press1 col-md-5 col-md-offset-1"><!-- DailyNews, NYT, Journal News-->
							<?php 
								$press_print1_query = new WP_Query( 'category_name=daily-news');
								$press_print2_query = new WP_Query( 'category_name=new-york-times');
								$press_print3_query = new WP_Query( 'category_name=journal-news');
							?>

							<img class="press-logo" id="dailynews-logo" src="http://localhost:8888/kousouros_law/wp-content/uploads/2015/04/press-dailynews.png">

							<?php while ( $press_print1_query->have_posts() ) : $press_print1_query->the_post(); ?>
								<!-- get content-press-print.php template part -->
								<?php get_template_part( 'content', 'press-print' ); ?>
							<?php endwhile; // end of the loop. ?>

							<img class="press-logo" id="nyt-logo" src="http://localhost:8888/kousouros_law/wp-content/uploads/2015/04/press-nytimes.png">

							<?php while ( $press_print2_query->have_posts() ) : $press_print2_query->the_post(); ?>
								<?php get_template_part( 'content', 'press-print' ); ?>
							<?php endwhile; // end of the loop. ?>

							<img class="press-logo" id="journalnews-logo" src="http://localhost:8888/kousouros_law/wp-content/uploads/2015/04/press-journalnews.png">

							<?php while ( $press_print3_query->have_posts() ) : $press_print3_query->the_post(); ?>
								<?php get_template_part( 'content', 'press-print' ); ?>
							<?php endwhile; // end of the loop. ?>

						</div><!-- .entry-content -->

						<div class="entry-content-press2 col-md-5"><!-- Newsday, TheTimesOfSmithtown -->
							<?php 
								$press_print4_query = new WP_Query( 'category_name=newsday');
								$press_print5_query = new WP_Query( 'category_name=times-of-smithtown');
							?>

							<img class="press-logo" id="newsday-logo" src="http://localhost:8888/kousouros_law/wp-content/uploads/2015/04/press-newsday.png">

							<?php while ( $press_print4_query->have_posts() ) : $press_print4_query->the_post(); ?>
								<?php get_template_part( 'content', 'press-print' ); ?>
							<?php endwhile; // end of the loop. ?>

							<img class="press-logo" id="timessmithtown-logo" src="http://localhost:8888/kousouros_law/wp-content/uploads/2015/04/thetimes.png">

							<?php while ( $press_print5_query->have_posts() ) : $press_print5_query->the_post(); ?>
								<?php get_template_part( 'content', 'press-print' ); ?>
							<?php endwhile; // end of the loop. ?>

					</div><!-- .entry-content -->
				</div><!-- .row Print -->


				<div class="row"><!-- Here starts the TV section -->
					<div class="col-md-10 col-md-offset-1 press-subhed">
						<h3>Cable and Network Appearances</h3>
					</div>
				</div>

				<div class="row">
					<div class="entry-content-press3 col-md-5 col-md-offset-1">

						<?php 
							$press_tv1_query = new WP_Query( 'category_name=tv&tag=tv-column-1');
						?>

						<?php while ( $press_tv1_query->have_posts() ) : $press_tv1_query->the_post(); ?>
								<?php get_template_part( 'content', 'press-tv' ); ?>
						<?php endwhile; // end of the loop. ?>

					</div><!-- .entry-content-press3 -->

					<div class="entry-content-press3 col-md-5">
						
						<?php 
							$press_tv2_intro = new WP_Query( 'category_name=tv&tag=tv-column-2-intro');
						?>
						<?php while ( $press_tv2_intro->have_posts() ) : $press_tv2_intro->the_post(); ?>
							<div class="press-tv-post">
								<p class="press-title"><?php  the_title();  ?></p>
								<p class="press-content"><?php echo get_the_content(); ?></p>
							</div>
						<?php endwhile; // end of the loop. ?>

						<?php 
							$press_tv2_query = new WP_Query( 'category_name=tv&tag=tv-column-2');
						?>

						<?php while ( $press_tv2_query->have_posts() ) : $press_tv2_query->the_post(); ?>
								<?php get_template_part( 'content', 'press-tv' ); ?>
						<?php endwhile; // end of the loop. ?>

					</div><!-- .entry-content-press3 -->
				</div><!-- .row TV -->

			</article><!-- #post-## -->

		<?php endwhile; // end of the big loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
