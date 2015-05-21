<!-- SLIDER FOR PROCESS QUOTES -->
<!-- all of this just gets pasted into the text widget of the The Process Sidebar -->
<!-- THE TEXT CAROUSEL -->
<div id="process-quotes-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
<?php 
// args
$args = array(
    'category_name' => 'testimonials',
    'post_type'     => 'post',
    'meta_key'      => 'excerpt_process',
    'meta_value'    => ' ',
    'meta_compare'  => '!='
);
?>
<?php $process_quotes_query = new WP_Query( $args );  ?>

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#process-quotes-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#process-quotes-carousel" data-slide-to="1"></li>
        <li data-target="#process-quotes-carousel" data-slide-to="2"></li>
        <li data-target="#process-quotes-carousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

        <div class="item active">
            <?php $counter = 0; ?>
            <?php while ( $process_quotes_query->have_posts() ) : $process_quotes_query->the_post(); ?>
                <?php $counter++; ?>
                <?php if($counter == 1) : ?>
                    <blockquote><?php the_field('excerpt_process'); ?><footer><?php  the_title();  ?></footer></blockquote>
                <?php endif; ?>
            <?php endwhile; // end of the loop. ?>
        </div>

        <div class="item">
            <?php $counter = 0; ?>
            <?php while ( $process_quotes_query->have_posts() ) : $process_quotes_query->the_post(); ?>
                <?php $counter++; ?>
                <?php if($counter == 2) : ?>
                    <blockquote><?php the_field('excerpt_process'); ?><footer><?php  the_title();  ?></footer></blockquote>
                <?php endif; ?>
            <?php endwhile; // end of the loop. ?>
        </div>

        <div class="item">
            <?php $counter = 0; ?>
            <?php while ( $process_quotes_query->have_posts() ) : $process_quotes_query->the_post(); ?>
                <?php $counter++; ?>
                <?php if($counter == 3) : ?>
                    <blockquote><?php the_field('excerpt_process'); ?><footer><?php  the_title();  ?></footer></blockquote>
                <?php endif; ?>
            <?php endwhile; // end of the loop. ?>
        </div>

        <div class="item">
            <?php $counter = 0; ?>
            <?php while ( $process_quotes_query->have_posts() ) : $process_quotes_query->the_post(); ?>
                <?php $counter++; ?>
                <?php if($counter == 4) : ?>
                    <blockquote><?php the_field('excerpt_process'); ?><footer><?php  the_title();  ?></footer></blockquote>
                <?php endif; ?>
            <?php endwhile; // end of the loop. ?>
        </div>

    </div><!-- carousel inner -->
    <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>

</div><!-- process-quotes-carousel -->
