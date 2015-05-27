<?php
/**
 * Template Name: Home
 *
 * @package flat-bootstrap
 */

get_header(); ?>

<?php get_template_part( 'content', 'video-modal' ); ?>

<div class="section" id="home-slider">
    <div class="container">
        <div class="row home-images">
            <img class="home-slider-img fade-in" id="home-slider-img-1" src="<?php echo content_url(); ?>/uploads/2015/05/Container-wide-divBy3-1.png">
            <img class="home-slider-img fade-in" id="home-slider-img-2" src="<?php echo content_url(); ?>/uploads/2015/05/Container-wide-divBy3-2.png">
            <img class="home-slider-img fade-in" id="home-slider-img-3" src="<?php echo content_url(); ?>/uploads/2015/05/Container-wide-divBy3-3.png">
            
        <aside class="home-blurb fadeInUpOutUp" id="home-blurb-1">
            <p>He has the trust and respect of judges and prosecutors alike.</p>
        </aside>
        <aside class="home-blurb fadeInUpOutUp" id="home-blurb-2">
            <p>Some more fine words of praise for a fine man you should hire.</p>
        </aside>
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

                <?php get_template_part( 'content', 'home-testimonials' ); ?>
                <?php get_template_part( 'content', 'home-represents' ); ?>
                <?php get_template_part( 'content', 'home-spectrum' ); ?>
                <?php get_template_part( 'content', 'home-press' ); ?>
                <?php get_template_part( 'content', 'home-notables' ); ?>
                <?php get_template_part( 'content', 'home-profile' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
