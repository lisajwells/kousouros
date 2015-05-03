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
    <div class="row"><!--  -->

<?php $tesimonial_query = new WP_Query( 'category_name=testimonials');  ?>

	<?php while ( $tesimonial_query->have_posts() ) : $tesimonial_query->the_post(); ?>
      <div class="col-md-4">
		<p><?php the_excerpt(); ?></p>
      </div><!-- col-4 -->
	<?php endwhile; // end of the loop. ?>

    </div><!-- .row -->

    <div class="row" id="home-testimonials-button">
        <p style="text-align: center;"><a class="btn btn-hollow" href="#">Read More Testimonials</a></p>
    </div><!-- row -->
  </div><!-- .container -->
</div><!-- section testimonials -->

<!-- HOME REPRESENTS SECTION -->
<div class="section" id="home-represents"><!-- home represents -->
  <div class="container">

       <div class="row"><!-- the whole stripe-->

        <div class="col-md-8 col-md-offset-4">

          <div id="home-represents-box">
<div class="row">
          <div class="col-md-3">
          <figure>[embed]https://www.youtube.com/watch?v=xXbW-K-HE9I[/embed]</figure>
            <p style="text-align: center;"><a class="btn btn-hollow-blackborder" href="#">Watch More Videos</a></p>
          </div>
          <div class="col-md-9">
			<h2><?php the_field('home_represents_title'); ?></h2>    
            <p>Bacon ipsum dolor amet shankle pig pork loin frankfurter tail brisket, alcatra doner tongue. Pork belly picanha frankfurter brisket, tail jerky beef ribs. Tenderloin biltong fatback, meatball tail andouille hamburger prosciutto ribeye. Beef biltong flank cow pancetta fatback pastrami.</p>
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
    <div class="row">
      <div class="col-md-3">
        <h3>Full Spectrum of State and Federal Criminal Prosecutions</h3>
        <p>Bacon tail brisket, alcatra doner tongue. Pork belly picanha frankfurter brisket, tail jerky beef ribs. Tenderloin biltong fatback, meatball tail andouille hamburger prosciutto ribeye. Beef biltong flank cow pancetta fatback pastrami.</p>
        <a href="#">Overview</a>
      </div>
      <div class="col-md-3">
        <h3>A Commitment to Every Client</h3>
        <p>Bacon ipsum dolor amet shankle pig pork loin frankfurter tail brisket, alcatra doner tongue. Pork belly picanha frankfurter brisket, tail jerky beef ribs. Tenderloin biltong fatback, meatball tail andouille hamburger prosciutto ribeye. Beef biltong flank cow pancetta fatback pastrami.</p>
        <a href="#">Overview</a>
      </div>
      <div class="col-md-3">
        <h3>Resolutions With You in Mind</h3>
        <p>Bacon ipsum dolor amet shankle pig pork loin frankfurter tail brisket, alcatra doner tongue. Pork belly picanha frankfurter brisket, tail jerky beef ribs. Tenderloin biltong fatback, meatball tail andouille hamburger prosciutto ribeye. Beef biltong flank cow pancetta fatback pastrami.</p>
        <a href="#">Services</a>
      </div>
      <div class="col-md-3">
        <h3>An Advocate</h3>
        <p>Bacon ipsum dolor amet shankle pig pork loin frankfurter tail brisket, alcatra doner tongue. Pork belly picanha frankfurter brisket, tail jerky beef ribs. Tenderloin biltong fatback, meatball tail andouille hamburger prosciutto ribeye. Beef biltong flank cow pancetta fatback pastrami.</p>
        <a href="#">Services</a>
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
      <p>Mr. Kousouros is a frequent guest as a legal commentator on various network and cable stations.<p>
      <div class="col-md-3">
        <figure>
          [embed]https://www.youtube.com/watch?v=xXbW-K-HE9I[/embed]
          <figcaption>Bacon ipsum dolor amet shankle pig pork.</figcaption>
        </figure>
      </div>
      <div class="col-md-3">
        <figure>
          [embed]https://www.youtube.com/watch?v=xXbW-K-HE9I[/embed]
          <figcaption>Bacon ipsum dolor amet shankle pig pork.</figcaption>
        </figure>
      </div>
      <div class="col-md-3">
        <figure>
          [embed]https://www.youtube.com/watch?v=LzcyNQ0jdjI[/embed]
          <figcaption>Bacon ipsum dolor amet shankle pig pork.</figcaption>
        </figure>
      </div>
      <div class="col-md-3">
        <figure>
          [embed]https://www.youtube.com/watch?v=wuQM8fLGePw[/embed]
          <figcaption>Bacon ipsum dolor amet shankle pig pork.</figcaption>
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
        <p>Bacon ipsum dolor amet shankle pig pork loin frankfurter tail brisket, alcatra doner tongue. Pork belly picanha frankfurter brisket, tail jerky beef ribs. Tenderloin biltong fatback, meatball tail andouille hamburger prosciutto ribeye. Beef biltong flank cow pancetta fatback pastrami.</p>
        <p style="text-align: center;"><a class="btn btn-hollow-blackborder" href="#">Read more notable cases</a></p>
      </div><!-- col-6 -->

      <div class="col-md-6"><!-- big six -->

        <div class="row">
          <div class="col-md-6">
            <p>successfully avoided prosecution of texas stock trader</p>
          </div>
          <div class="col-md-6">
            <p>client axquitted of the murder of the son of an alleged mafia boss</p>
          </div>
        </div><!-- row -->

        <div class="row">
          <div class="col-md-6">
            <p>successfully avoided prosecution of texas stock trader</p>
          </div>
          <div class="col-md-6">
            <p>client axquitted of the murder of the son of an alleged mafia boss</p>
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
    <p>Successful representation all across the Untied States and Internationally</p>
  </div><!-- container -->
</div><!-- section home-national -->

		
</div><!-- .entry-content -->
	
</article><!-- #post-## -->
