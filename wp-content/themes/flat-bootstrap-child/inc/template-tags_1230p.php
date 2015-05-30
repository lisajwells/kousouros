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

	if ( in_category( 'testimonials' )) { 
		$page_to_go_to = '1083#testimonial-'.( get_the_ID() ) . ''; 
	}

	if ( ! is_attachment() ) {
		if ( $excerpt ) {
			$excerpt .= '&hellip; ';
		}
		if ( in_category( 'testimonials' )) {
			$excerpt .= '<a class="read-more" href="index.php?page_id='.$page_to_go_to.'">' . __( 'Read More', 'flat-bootstrap' ) . '</a>';
		} elseif ( in_category( array( 'notable-cases', 'appeals', 'bribery', 'extradition', 'healthcare-and-pharmaceutical', 'homicide', 'miscellaneous-notables','narcotics','racketeering','white-collar-general' ) )) {
			$excerpt .= '<a class="read-more" href="index.php?page_id=1075">' . __( 'Read More', 'flat-bootstrap' ) . '</a>';
		} else {
			$excerpt .= '<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __( 'Read More', 'flat-bootstrap' ) . '</a>';
		}
	}
	return $excerpt;
}
endif; // end ! function_exists

// if ( is_front_page() && is_home() ) {
//   // Default homepage
// } elseif ( is_front_page() ) {
//   // static homepage
// } elseif ( is_home() ) {
//   // blog page
// } else {
//   //everything else
// }
