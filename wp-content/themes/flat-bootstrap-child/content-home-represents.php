<!-- look for video modal html in header.php -->
<!-- /* Most of this content is generated through Custom Fields added through Home Page edit. */ -->

<!-- HOME REPRESENTS SECTION -->
<div class="section" id="home-represents"><!-- home represents -->
    <div class="container">

        <div class="row no-neg-margin"><!-- the whole stripe-->

            <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2" id="home-represents-box">

                <div>
                    <div class="row">
                        <div class="col-md-5">
                            <figure class="video" id="home-represents-group">
                                <?php $video_id = get_field( 'home_represents_video_id' ); ?>
                                <a href="#" data-toggle="modal" data-theVideo="http://www.youtube.com/embed/<?php echo $video_id?>">
                                <img class="youtube" rel="<?php echo $video_id?>" src="http://img.youtube.com/vi/<?php echo $video_id?>/mqdefault.jpg" /></a>
                            </figure>
                        </div>
                        <div class="col-md-7">
                            <h2><?php the_field('home_represents_title'); ?></h2>
                        </div>
                            <p style="text-align: center;"><a class="btn btn-hollow-blackborder" href="<?php bloginfo('url'); ?>/press-media/#tv-subhed">Watch More Videos</a></p>
                    </div><!-- row-->
                </div><!-- home-represents-box -->

            </div><!-- col-8 offset -->

        </div><!-- row the whole stripe -->

    </div><!-- .container -->
</div><!-- section home-represents -->