<div class="press-tv-post">
	<div class="row">

		<div class="col-md-6 col-sm-6 press-tv-video video">
      <?php $video_id = get_field( 'press_video_id' ); ?>
      <a href="#" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/<?php echo $video_id?>">
      <img class="youtube" rel="<?php echo $video_id?>" src="http://img.youtube.com/vi/<?php echo $video_id?>/mqdefault.jpg" /></a>
		</div><!-- press-tv-video -->

		<div class="col-md-6 col-sm-6 press-tv-text">
			<p class="press-title"><?php  the_title();  ?></p>
			<p class="press-content"><?php echo get_the_content(); ?></p>
		</div>

	</div><!-- row -->
</div><!-- .press-tv-post -->