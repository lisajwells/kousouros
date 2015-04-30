<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The template used for displaying single post footer meta (categories, tags, etc.)
 *
 * @package flat-bootstrap
 */
?>

								<p class="press-date"><?php  the_date();  ?></p>

								<?php if( get_field( 'external_link') ): ?>
									<p class="press-title"><a target="_blank"  class="press-pdf" href="<?php the_field('external_link'); ?>"><?php  the_title();  ?></a></p>
								<?php else: ?>
									<p class="press-title"><?php  the_title();  ?></p>
								<?php endif; ?>

								<?php if( get_field( 'download_pdf_file_url') ): ?>
									<a target="_blank"  class="press-pdf" href="<?php the_field('download_pdf_file_url'); ?>">Download PDF</a>
								<?php else: ?>
								<?php endif; ?>


