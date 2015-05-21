<!-- SLIDER FOR SERVICES QUOTES -->
<!-- all of this just gets pasted into the text widget of the Services Sidebar -->
<!-- THE TEXT CAROUSEL -->
<div id="services-quotes-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
<?php 
// args
$args = array(
    'category_name' => 'testimonials',
    'post_type'     => 'post',
    'meta_key'      => 'excerpt_services',
    'meta_value'    => ' ',
    'meta_compare'  => '!='
);
?>
<?php $services_quotes_query = new WP_Query( $args );  ?>

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#services-quotes-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#services-quotes-carousel" data-slide-to="1"></li>
        <li data-target="#services-quotes-carousel" data-slide-to="2"></li>
        <li data-target="#services-quotes-carousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

        <div class="item active">
            <?php $counter = 0; ?>
            <?php while ( $services_quotes_query->have_posts() ) : $services_quotes_query->the_post(); ?>
                <?php $counter++; ?>
                <?php if($counter == 1) : ?>
                    <blockquote><?php the_field('excerpt_services'); ?><footer><?php  the_title();  ?></footer></blockquote>
                <?php endif; ?>
            <?php endwhile; // end of the loop. ?>
        </div>

        <div class="item">
            <?php $counter = 0; ?>
            <?php while ( $services_quotes_query->have_posts() ) : $services_quotes_query->the_post(); ?>
                <?php $counter++; ?>
                <?php if($counter == 2) : ?>
                    <blockquote><?php the_field('excerpt_services'); ?><footer><?php  the_title();  ?></footer></blockquote>
                <?php endif; ?>
            <?php endwhile; // end of the loop. ?>
        </div>

        <div class="item">
            <?php $counter = 0; ?>
            <?php while ( $services_quotes_query->have_posts() ) : $services_quotes_query->the_post(); ?>
                <?php $counter++; ?>
                <?php if($counter == 3) : ?>
                    <blockquote><?php the_field('excerpt_services'); ?><footer><?php  the_title();  ?></footer></blockquote>
                <?php endif; ?>
            <?php endwhile; // end of the loop. ?>
        </div>

        <div class="item">
            <?php $counter = 0; ?>
            <?php while ( $services_quotes_query->have_posts() ) : $services_quotes_query->the_post(); ?>
                <?php $counter++; ?>
                <?php if($counter == 4) : ?>
                    <blockquote><?php the_field('excerpt_services'); ?><footer><?php  the_title();  ?></footer></blockquote>
                <?php endif; ?>
            <?php endwhile; // end of the loop. ?>
        </div>

    </div><!-- carousel inner -->
    <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>

</div><!-- services-quotes-carousel -->
