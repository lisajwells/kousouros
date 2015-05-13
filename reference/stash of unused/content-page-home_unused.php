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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="entry-content">

<div class="section"><!-- specializing and logos -->
  <div class="container">
    <p id="specializing" style="text-align: center;"><strong>Specializing in state and federal criminal defense in New York and throughout the country</strong></p>

    <div id="home-logos" class="row">
      <div class="col-md-2 col-md-offset-2 col-sm-6 col-sm-offset-0">

        <!-- image generated from avvo.com javascript -->
        <div class="avvo_badge" data-type="rating" data-specialty="55" data-target="http://www.avvo.com/professional_badges/868249" data-version="1">
          <div class="avvo_content">
            <a rel="me" target="_blank" href="http://www.avvo.com/attorneys/10016-ny-james-kousouros-868249.html?utm_campaign=avvo_rating&utm_content=868249&utm_medium=avvo_badge&utm_source=avvo">Lawyer James Kousouros</a>
             | <a target="_blank" href="http://www.avvo.com/criminal-defense-lawyer/ny/new_york.html?utm_campaign=avvo_rating&utm_content=868249&utm_medium=avvo_badge&utm_source=avvo">Top Attorney Criminal Defense</a>
          </div>
        </div>

      </div>        
      <div class="col-md-2 col-sm-6" id="avvo2">
        <a rel="me" href="http://www.avvo.com/attorneys/10016-ny-james-kousouros-868249.html?cm_mmc=Avvo-_-Avvo_Badge-_-Micro-_-868249"><img alt="Avvo - Rate your Lawyer. Get Free Legal Advice." id="avvo_badge" src="http://www.avvo.com/assets/microbadge.png" /></a>
      </div>
      <div class="col-md-2 col-sm-6">
        <img class="alignnone size-full wp-image-904" src="http://localhost:8888/kousouros_law/wp-content/uploads/2013/03/image-alignment-150x150.jpg" alt="Image Alignment 150x150" width="150" height="150" /></div>
      <div class="col-md-2 col-sm-6">
        <img class="alignnone size-full wp-image-904" src="http://localhost:8888/kousouros_law/wp-content/uploads/2013/03/image-alignment-150x150.jpg" alt="Image Alignment 150x150" width="150" height="150" /></div>
    </div><!-- .row -->

  </div><!-- .container -->
</div><!-- .section specializing and logos-->

<!-- HOME TESTIMONIALS SECTION -->
<div class="section bg-darkgray" id="home-testimonials"><!-- home testimonials -->
  <div class="container">

    <h2><?php the_field('home_testimonials_title'); ?></h2>    
    
    <div class="row"><!-- carousel row -->
      <?php $testimonial_query = new WP_Query( 'category_name=testimonials&posts_per_page=9');  ?>

      <!-- THE TEXT CAROUSEL -->
      <div id="home-testimonials-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#home-testimonials-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#home-testimonials-carousel" data-slide-to="1"></li>
          <li data-target="#home-testimonials-carousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

          <div class="item active">
            <?php $counter = 0; ?>
            <?php while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
              <?php $counter++; ?>
              <?php if($counter < 4) : ?>
                <div class="col-md-4">
                  <blockquote><?php the_excerpt(); ?><footer><?php  the_title();  ?></footer></blockquote>
                </div><!-- col-4 -->
              <?php endif; ?>
            <?php endwhile; // end of the loop. ?>
          </div>

          <div class="item">
            <?php $counter = 0; ?>
            <?php while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
              <?php $counter++; ?>
              <?php if($counter > 3 && $counter < 7) : ?>
                <div class="col-md-4">
                  <blockquote><?php the_excerpt(); ?><footer><?php  the_title();  ?></footer></blockquote>
                </div><!-- col-4 -->
              <?php endif; ?>
            <?php endwhile; // end of the loop. ?>
          </div>
          
          <div class="item">
            <?php $counter = 0; ?>
            <?php while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
              <?php $counter++; ?>
              <?php if($counter > 6 && $counter < 10) : ?>
                <div class="col-md-4">
                  <blockquote><?php the_excerpt(); ?><footer><?php  the_title();  ?></footer></blockquote>
                </div><!-- col-4 -->
              <?php endif; ?>
            <?php endwhile; // end of the loop. ?>
          </div>
          
        </div><!-- carousel inner -->

        <!-- Controls -->
        <a class="left carousel-control" href="#home-testimonials-carousel" role="button" data-slide="prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#home-testimonials-carousel" role="button" data-slide="next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div><!-- home-testimonials-carousel -->
      <!-- THE TEXT CAROUSEL -->

    <!-- /* Restore original Post Data */ -->
    <?php  wp_reset_postdata();  ?>

    </div><!-- carousel .row -->

    <p><a class="btn btn-hollow" href="#">Read More Testimonials</a></p>
  </div><!-- .container -->
</div><!-- section testimonials -->





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


<!-- HOME CONSULTATION SECTION -->
<div class="section bg-darkgray center" id="home-consultation"><!-- home consultation -->
  <div class="container">
    <div class="row" id="home-consultation-row">
      <div class="col-md-3">
              <?php the_field('home_consultation_text_1'); ?>
      </div>
      <div class="col-md-3">
              <?php the_field('home_consultation_text_2'); ?>
      </div>
      <div class="col-md-3">
              <?php the_field('home_consultation_text_3'); ?>
      </div>
      <div class="col-md-3">
              <?php the_field('home_consultation_text_4'); ?>
      </div>
    </div><!-- row -->
    <p style="text-align: center;"><a class="btn btn-hollow" href="#">Free Consultation</a></p>
  </div><!-- container -->
</div><!-- section home-consulation -->

<!-- HOME PRESS SECTION -->
<div class="section center" id="home-press"><!-- home press -->
  <div class="container">
    <div class="row">
    <h2><?php the_field('home_press_title'); ?></h2>    
      <p><?php the_field('home_press_subhed'); ?><p>
      <div class="col-md-3">
        <figure>
              <?php
              global $wp_embed;
              $video_url = get_field( 'home_press_video_link_1' );
              echo $wp_embed->run_shortcode( '[embed]' . $video_url . '[/embed]' );?>
          <figcaption><?php the_field('home_press_video_cap_1'); ?></figcaption>
        </figure>
      </div>
      <div class="col-md-3">
        <figure>
              <?php
              global $wp_embed;
              $video_url = get_field( 'home_press_video_link_2' );
              echo $wp_embed->run_shortcode( '[embed]' . $video_url . '[/embed]' );?>
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
    </div><!-- row -->
    <p style="text-align: center;"><a class="btn btn-hollow-blackborder" href="#">See more of Mr. Kousouros in the press</a></p>

  </div><!-- container -->
</div><!-- section home-press -->

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