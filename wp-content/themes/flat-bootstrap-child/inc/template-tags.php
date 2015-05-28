<?php
/**
 * Theme: Flat Bootstrap
 * 
 * Functions that relate to any tags or functions used in the WordPress templates.
 *
 * Functions for comments, multi-category blog, excerpts, etc.
 *
 * @package flat-bootstrap
 */

 // * This came from template-tags.php, but I'm altering link destination *//

/**
 * Add the read more link to excerpts, except for image attachment pages
 */
if ( ! function_exists( 'xsbf_get_the_excerpt' ) ) :
add_filter( 'get_the_excerpt', 'xsbf_get_the_excerpt' );
function xsbf_get_the_excerpt( $excerpt ) {

	if ( ! is_attachment() ) {
		if ( $excerpt ) {
			$excerpt .= '&hellip; ';
		}
		$excerpt .= '<a class="read-more" href="index.php?page_id=1083#testimonial-'.( get_the_ID() ) . '">' . __( 'Read More', 'flat-bootstrap' ) . '</a>';
	}
	return $excerpt;
}
endif; // end ! function_exists


		// this found the permalink to link to individual post page. i need ID to link to post on testimonials page

		// $excerpt .= '<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __( 'Read More', 'flat-bootstrap' ) . '</a>';
		// $excerpt .= '<a class="read-more" href="index.php?page_id=1083#'.( get_the_ID() )'">' . __( 'Read More', 'flat-bootstrap' ) . '</a>';
