<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The template used for displaying single post footer meta (categories, tags, etc.)
 *
 * @package flat-bootstrap
 */
?>

							<div class="press-tv-post">
								<div class="row">
								
									<div class="col-md-6 press-tv-video">
										<?php
										global $wp_embed;
										$video_url = get_field( 'press_video' );
										echo $wp_embed->run_shortcode( '[embed]' . $video_url . '[/embed]' );?>
									</div><!-- press-tv-video -->

									<div class="col-md-6 press-tv-text">
										<p class="press-title"><?php  the_title();  ?></p>
										<p class="press-content"><?php echo get_the_content(); ?></p>
									</div>

								</div><!-- row -->
							</div><!-- .press-tv-post -->

