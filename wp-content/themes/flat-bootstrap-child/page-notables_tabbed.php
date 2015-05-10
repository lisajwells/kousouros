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
							<li><a href="#racketeering" data-toggle="tab">Racketeering&sol;<br>Bribery</a></li>
							<li><a href="#narcotics" data-toggle="tab">Narcotics</a></li>
							<li><a href="#misc" data-toggle="tab">Miscellaneous&sol;<br>Post-Conviction&sol;<br>Appeals&sol;<br>Extradition</a></li>
						</ul>

						<?php  
		                $notables_white_query = new WP_Query( 'category_name=white-collar');
		                $notables_health_query = new WP_Query( 'category_name=healthcare');
		                $notables_homicide_query = new WP_Query( 'category_name=homicide');
		                $notables_racketeer_query = new WP_Query( 'category_name=racketeering-and-bribery');
		                $notables_narcotics_query = new WP_Query( 'category_name=narcotics');
		                $notables_misc_query = new WP_Query( 'category_name=miscellaneous');
		                ?>

						<div class="tab-content">
							<div class="tab-pane fade in active notable" id="white-collar">

				               <?php  while ( $notables_white_query->have_posts() ) : $notables_white_query->the_post(); ?>

				                    <h4 class="notables-title"><i class="fa fa-square fa-rotate-45">&nbsp;</i><?php  the_title();  ?></h4>
				                    <?php the_content(); ?>

				                <?php endwhile; // end of the loop. ?>
							</div>
							<div class="tab-pane fade notable" id="healthcare">
				               <?php  while ( $notables_health_query->have_posts() ) : $notables_health_query->the_post(); ?>

				                    <h4 class="notables-title"><?php  the_title();  ?></h4>
				                    <?php the_content(); ?>

				                <?php endwhile; // end of the loop. ?>
							</div>
							<div class="tab-pane fade notable" id="homicide">
				               <?php  while ( $notables_homicide_query->have_posts() ) : $notables_homicide_query->the_post(); ?>

				                    <h4 class="notables-title"><?php  the_title();  ?></h4>
				                    <?php the_content(); ?>

				                <?php endwhile; // end of the loop. ?>
							</div>
							<div class="tab-pane fade notable" id="racketeering">
				               <?php  while ( $notables_racketeer_query->have_posts() ) : $notables_racketeer_query->the_post(); ?>

				                    <h4 class="notables-title"><?php  the_title();  ?></h4>
				                    <?php the_content(); ?>

				                <?php endwhile; // end of the loop. ?>
							</div>
							<div class="tab-pane fade notable" id="narcotics">
				               <?php  while ( $notables_narcotics_query->have_posts() ) : $notables_narcotics_query->the_post(); ?>

				                    <h4 class="notables-title"><?php  the_title();  ?></h4>
				                    <?php the_content(); ?>

				                <?php endwhile; // end of the loop. ?>
							</div>
							<div class="tab-pane fade notable" id="misc">
				               <?php  while ( $notables_misc_query->have_posts() ) : $notables_misc_query->the_post(); ?>

				                    <h4 class="notables-title"><?php  the_title();  ?></h4>
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
