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



<!-- HOME NOTABLES SECTION -->
<div class="section bg-darkgray" id="home-notable"><!-- home notable -->
  <div class="container">
    <div class="row">
      
      <div class="col-md-6">
        <h2><?php the_field('home_notables_title'); ?></h2>    
        <p><?php the_field('home_notables_body'); ?></p>
        <p class="center"><a class="btn btn-hollow" href="#">Read more notable cases</a></p>
      </div><!-- col-6 -->

      <div class="col-md-6 home-notables-blurbs center"><!-- big six -->

        <div class="row">
          <div class="col-md-6">
            <p class="yellowfont"><?php the_field('home_notables_blurb_1'); ?></p>
          </div>
          <div class="col-md-6">
            <p><?php the_field('home_notables_blurb_2'); ?></p>
          </div>
        </div><!-- row -->

        <div class="row">
          <div class="col-md-6">
            <p><?php the_field('home_notables_blurb_3'); ?></p>
          </div>
          <div class="col-md-6">
            <p class="yellowfont"><?php the_field('home_notables_blurb_4'); ?></p>
          </div>
        </div><!-- row -->

      </div><!-- col-6 big six-->

    </div><!-- row -->
  </div><!-- container-->
</div><!-- section home-notable-->

<!-- HOME NATIONAL AND INTERNATIONAL SECTION -->
<div class="section" id="home-national"><!-- home-national -->
  <div class="container">
  <h3><?php the_field('home_national_title'); ?></h3>    

    <div class="row">
      <div class="col-md-4 col-md-offset-2">
          <img class="alignnone size-full wp-image-904 aligncenter" src="http://localhost:8888/kousouros_law/wp-content/uploads/2013/03/image-alignment-150x150.jpg" alt="Image Alignment 150x150" width="150" height="150" />
      </div>
      <div class="col-md-4">
          <img class="alignnone size-full wp-image-904 aligncenter" src="http://localhost:8888/kousouros_law/wp-content/uploads/2013/03/image-alignment-150x150.jpg" alt="Image Alignment 150x150" width="150" height="150" />
      </div>
    </div><!-- row -->
    <p class="center">Successful representation all across the Untied States and Internationally</p>
  </div><!-- container -->
</div><!-- section home-national -->

    
</div><!-- .entry-content -->
  
</article><!-- #post-## -->