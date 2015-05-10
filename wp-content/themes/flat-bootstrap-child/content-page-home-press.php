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

<a href="#" class="btn btn-default" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/loFtozxZG0s">VIDEO</a>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div>
                    <iframe width="100%" height="350" src=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /* Most of this content is generated through Custom Fields added through Home Page edit. */ -->

<!-- HOME PRESS SECTION -->
<div class="section center" id="home-press"><!-- home press -->
  <div class="container">
    <div class="row">
    <h2><?php the_field('home_press_title'); ?></h2>    
      <p><?php the_field('home_press_subhed'); ?><p>
      <div class="col-md-3">
        <figure class="video" id="home-press-1-group">

          <?php $video_id = get_field( 'home_press_video_id_1' ); ?>

          <img class="youtube" rel="<?php echo $video_id?>" src="http://img.youtube.com/vi/<?php echo $video_id?>/mqdefault.jpg" />

          <figcaption><?php the_field('home_press_video_cap_1'); ?></figcaption>
          
        </figure>
      </div>
      <div class="col-md-3">
        <figure>
              <?php
              global $wp_embed;
              $video_url = get_field( 'home_press_video_link_2' );
              echo $wp_embed->run_shortcode( '[embed]' . $video_url .'&controls=2[/embed]' );?>
          <figcaption><?php the_field('home_press_video_cap_2'); ?></figcaption>
        </figure>
      </div>
      <div class="col-md-3">
        <figure>
              <?php
              global $wp_embed;
              $video_url = get_field( 'home_press_video_link_3' );
              echo $wp_embed->run_shortcode( '[embed]' . $video_url . '[/embed]' );?>
          <figcaption><?php the_field('home_press_video_cap_3'); ?></figcaption>
        </figure>
      </div>
      <div class="col-md-3">
        <figure>
              <?php
              global $wp_embed;
              $video_url = get_field( 'home_press_video_link_4' );
              echo $wp_embed->run_shortcode( '[embed]' . $video_url . '[/embed]' );?>
          <figcaption><?php the_field('home_press_video_cap_4'); ?></figcaption>
        </figure>
      </div>
    </div><!-- row
    <p style="text-align: center;"><a class="btn btn-hollow-blackborder" href="#">See more of Mr. Kousouros in the press</a></p>

  </div><!-- container -->
</div><!-- section home-press -->