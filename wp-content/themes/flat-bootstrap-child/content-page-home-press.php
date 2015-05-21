<!-- look for video modal html in header.php -->
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
                    <a href="#" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/<?php echo $video_id?>">
                    <img class="youtube" rel="<?php echo $video_id?>" src="http://img.youtube.com/vi/<?php echo $video_id?>/mqdefault.jpg" /></a>
                </figure>
            </div>


        </div><!-- row -->
        <p style="text-align: center;"><a class="btn btn-hollow-blackborder" href="<?php bloginfo('url'); ?>/press-media">See more press/media</a></p>

    </div><!-- container -->
</div><!-- section home-press -->