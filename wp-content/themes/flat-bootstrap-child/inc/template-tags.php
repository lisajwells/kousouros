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
		$page_to_go_to = 'Testimonials'; 
	} elseif ( in_category ( 'profile-associate' )) {
		$page_to_go_to = 'Associates';  
	} elseif ( in_category ( 'white-collar-general' )) {
		$page_to_go_to = 'White Collar: General'; // notables: white-collar-general 
	} elseif ( in_category ( 'healthcare-and-pharmaceutical' )) {
		$page_to_go_to = 'White Collar: Healthcare/Pharmaceutical'; // notables: white-collar-healthcare-pharmaceutical 
	} elseif ( in_category ( 'homicide' )) {
		$page_to_go_to = 'Homicide'; // notables: homicide 
	} elseif ( in_category ( array( 'racketeering', 'bribery' ))) {
		$page_to_go_to = 'Racketeering/Bribery'; // notables: racketeering-bribery 
	} elseif ( in_category ( 'narcotics' )) {
		$page_to_go_to = 'Narcotics'; // notables: narcotics 
	} elseif ( in_category ( array( 'miscellaneous-notables', 'appeals', 'extradition' ))) {
		$page_to_go_to = 'Miscellaneous/Appeals/Extradition'; // notables: miscellaneous-appeals-extradition 
	} elseif ( in_category( 'press' ) || post_is_in_descendant_category( 73 ) ) { // press: calling a function to check if a post is in a descendant category (so as not to list all subcats here. This won't work for notables, where the parent category is not the page 
		$page_to_go_to = 'Press/Media'; // press 
	} else {
		$page_to_go_to = ''; // default calls page if page (good) or single post (dont really desire this but it's a fallback and a test for 2 conditions below) 
	}

	if ( ! is_attachment() ) {
		if ( $excerpt ) {
			$excerpt .= '&hellip; ';
		}
		if ( $page_to_go_to == '' ) {
			$excerpt .= '<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __( 'Read More', 'flat-bootstrap' ) . '</a>';
		} elseif ( $page_to_go_to == 'Testimonials' ) {
			// testimonials has its own condition because it goes to an anchor on the individual post
			$excerpt .= '<a class="read-more" href="'. get_permalink( get_page_by_title( $page_to_go_to ) ) . '#testimonial-'.( get_the_ID() ).'">' . __( 'Read More', 'flat-bootstrap' ) . '</a>';
		} else {
			$excerpt .= '<a class="read-more" href="'. get_permalink( get_page_by_title( $page_to_go_to ) ) . '">' . __( 'Read More', 'flat-bootstrap' ) . '</a>';
		}
	}
	return $excerpt;
}

endif; // end ! function_exists

// function pippin_filter_content_sample($content) {
// 	global $post;

// if( post_is_in_descendant_category( 86 ) ) {
// 		if( get_field( 'download_pdf_file_url_1') && get_field( 'download_pdf_file_url_2') ) {
// 			$content .= the_field( 'link_language_1').' xx '.the_field( 'link_language_2');
// 		}
// 		elseif( get_field( 'download_pdf_file_url_1') && !get_field( 'download_pdf_file_url_2') ) {
// 			$content .= the_field( 'link_language_1');
// 		}
// 	}	
// 	return $content;
// }
// add_filter('the_content', 'pippin_filter_content_sample');