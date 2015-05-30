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

	// !!!!!!!!!!What if the search result is the category instead of being a post or page in the category?!!!!!!!!!

	if ( in_category( 'testimonials' )) { 
		$page_to_go_to = 'index.php?page_id=1083#testimonial-'.( get_the_ID() ) . ''; 
	} elseif ( in_category ( 'white-collar-general' )) {
		$page_to_go_to = 'index.php?page_id=1414'; // notables: white-collar-general 
	} elseif ( in_category ( 'healthcare-and-pharmaceutical' )) {
		$page_to_go_to = 'index.php?page_id=1416'; // notables: white-collar-healthcare-pharmaceutical 
	} elseif ( in_category ( 'homicide' )) {
		$page_to_go_to = 'index.php?page_id=2245'; // notables: homicide 
	} elseif ( in_category ( array( 'racketeering', 'bribery' ))) {
		$page_to_go_to = 'index.php?page_id=1418'; // notables: racketeering-bribery 
	} elseif ( in_category ( 'narcotics' )) {
		$page_to_go_to = 'index.php?page_id=1420'; // notables: narcotics 
	} elseif ( in_category ( array( 'miscellaneous-notables', 'appeals', 'extradition' ))) {
		$page_to_go_to = 'index.php?page_id=1422'; // notables: miscellaneous-appeals-extradition 
	} else {
		$page_to_go_to = ''; // default calls page (good) or individual post (dont really desire this) 
	}

	if ( ! is_attachment() ) {
		if ( $excerpt ) {
			$excerpt .= '&hellip; ';
		}
		if ( $page_to_go_to == '' ) {
			$excerpt .= '<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __( 'Read More', 'flat-bootstrap' ) . '</a>';
		} else {
			$excerpt .= '<a class="read-more" href="'.$page_to_go_to.'">' . __( 'Read More', 'flat-bootstrap' ) . '</a>';
		}
	}
	return $excerpt;
}

wp_reset_postdata();

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
