<?php
/*
Template Name: Notables
*/


get_header(); ?>

<?php get_template_part( 'content', 'header' ); ?>

<div class="container">
  <div id="main-grid" class="row">
    <div id="primary" class="content-area col-md-8 col-md-offset-2">
      <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class( 'notables_loop' ); ?>>

            <div class="entry-content">

<!-- /***********************/ -->

			<div class="row">
				<div class="col-md-12" id="notables-panel">

					<!-- tabs left -->
					<div class="tabbable tabs-left">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#white-collar" data-toggle="tab">White Collar</a></li>
							<li><a href="#healthcare" data-toggle="tab">Healthcare&sol;<br>Pharmaceutical</a></li>
							<li><a href="#homicide" data-toggle="tab">Homicide</a></li>
						</ul>

						<?php  
		                $notables_white_query = new WP_Query( 'category_name=white-collar');
		                $notables_health_query = new WP_Query( 'category_name=healthcare');
		                $notables_homicide_query = new WP_Query( 'category_name=homicide');
		                ?>

						<div class="tab-content">
							<div class="tab-pane fade in active notable" id="white-collar">

				               <?php  while ( $notables_white_query->have_posts() ) : $notables_white_query->the_post(); ?>
				               	
				                    <?php  the_title();  ?>
				                    <?php the_content(); ?>

				                <?php endwhile; // end of the loop. ?>
							</div>
							<div class="tab-pane fade notable" id="healthcare">
				               <?php  while ( $notables_health_query->have_posts() ) : $notables_health_query->the_post(); ?>

				                    <?php  the_title();  ?>
				                    <?php the_content(); ?>

				                <?php endwhile; // end of the loop. ?>
							</div>
							<div class="tab-pane fade notable" id="homicide">
				               <?php  while ( $notables_homicide_query->have_posts() ) : $notables_homicide_query->the_post(); ?>

				                    <?php  the_title();  ?>
				                    <?php the_content(); ?>

				                <?php endwhile; // end of the loop. ?>
							</div>
						</div><!-- tab-content -->

					</div>
					<!-- /tabs -->

				</div><!-- col-12 -->
			</row>

<!-- /***********************/ -->





            </div><!-- .entry-content -->

          </article><!-- #post-## -->

        <?php endwhile; // end of the loop. ?>

      </main><!-- #main -->
    </div><!-- #primary -->
  </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
