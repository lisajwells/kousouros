<?php
/**
 * Template Name: Home
 *
 * @package flat-bootstrap
 */

get_header(); ?>

<div class="section" id="home-slider">
    <div class="container">
        <div class="row home-images">
            <img class="home-slider-img" id="home-slider-img-1" src="<?php echo content_url(); ?>/uploads/2015/05/Container-wide-divBy3-1.png">
            <img class="home-slider-img" id="home-slider-img-2" src="<?php echo content_url(); ?>/uploads/2015/05/Container-wide-divBy3-2.png">
            <img class="home-slider-img" id="home-slider-img-3" src="<?php echo content_url(); ?>/uploads/2015/05/Container-wide-divBy3-3.png">
        </div>
    </div>    

	<?php 
    //echo do_shortcode("[metaslider id=2384]"); // slideshow ID
	?>
    <p id="specializing" style="text-align: center;"><strong>Specializing in state and federal criminal defense in New York and throughout the country</strong></p>
</div>

    <div><!-- #primary -->
        <main><!-- #main -->
			<?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'page-home-testimonials' ); ?>
                <?php get_template_part( 'content', 'page-home-represents' ); ?>
                <?php get_template_part( 'content', 'page-home-spectrum' ); ?>
                <?php get_template_part( 'content', 'page-home-press' ); ?>
                <?php get_template_part( 'content', 'page-home-notables' ); ?>
                <?php get_template_part( 'content', 'page-home-profile' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
