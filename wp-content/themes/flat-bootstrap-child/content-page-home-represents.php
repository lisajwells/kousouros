<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The template used for displaying page content for the home page. It contains 
 * everything after the_content()
 *
 * @package flat-bootstrap
 */
?>

<!-- /* Most of this content is generated through Custom Fields added through Home Page edit. */ -->

<!-- HOME REPRESENTS SECTION -->
<div class="section" id="home-represents"><!-- home represents -->
  <div class="container">

    <div class="row"><!-- the whole stripe-->

      <div class="col-md-8 col-md-offset-4">

        <div id="home-represents-box">
          <div class="row">
            <div class="col-md-4">
              <?php
              global $wp_embed;
              $video_url = get_field( 'home_represents_video_link' );
              echo $wp_embed->run_shortcode( '[embed]' . $video_url . '[/embed]' );?>
              <p style="text-align: center;"><a class="btn btn-hollow-blackborder" href="#">Watch More Videos</a></p>
            </div>
            <div class="col-md-8">
              <h2><?php the_field('home_represents_title'); ?></h2>    
              <p><?php the_field('home_represents_text'); ?></p>
            </div>
          </div><!-- row-->
        </div><!-- home-represents-box -->

      </div><!-- col-8 offset -->

    </div><!-- row the whole stripe -->

  </div><!-- .container -->
</div><!-- section home-represents -->