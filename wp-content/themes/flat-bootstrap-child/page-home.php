<?php
/**
 * Template Name: Home
 *
 * @package flat-bootstrap
 */

get_header(); ?>

<?php get_template_part( 'content', 'video-modal' ); ?>

<div class="section" id="home-slider">
    <div class="container" id="home-slider-container">
        <div class="row home-images">
            <img class="home-slider-img fade-in" id="home-slider-img-1" src="<?php echo content_url(); ?>/uploads/2015/06/HomePage_left.jpg">
            <img class="home-slider-img fade-in" id="home-slider-img-2" src="<?php echo content_url(); ?>/uploads/2015/06/HomePage_Center.jpg">
            <img class="home-slider-img fade-in" id="home-slider-img-3" src="<?php echo content_url(); ?>/uploads/2015/06/HomePage_Right.jpg">
        <aside class="home-blurb fadeInUpOutUp" id="home-blurb-1">
            <p>His distinguished reputation and fierce advocacy command superior results.</p>
        </aside>
        <aside class="home-blurb fadeInUpOutUp" id="home-blurb-2">
            <p>Fighting vigorously, relentlessly and strategically at every stage of your defense.</p>
        </aside>
        </div>
    </div>    

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
