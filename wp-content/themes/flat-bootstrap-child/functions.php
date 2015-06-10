<?php
/**
 * Theme: Flat Bootstrap Child
 * 
 * Functions file for child theme. If you want to make a lot more changes than what is
 * included here, consider downloading the Flat Bootstrap Developer child theme. It 
 * shows how to do more complex function overrides, like choosing more theme features to
 * include or exclude, loading up custom CSS or javascript, etc.
 *
 * @package flat-bootstrap-child
 */
 
/**
 * SET THEME OPTIONS HERE
 *
 * Theme options can be overriden here. These are all set the same defaults as in the 
 * parent theme, but listed here so you can easily change them. Just uncomment (remove
 * the //) from any lines that you change.
 * 
 * Parameters: */
/**
 * Theme options. Can override in child theme. For theme developers, this is array so 
 * you can add these items to the customizer and store them all as a single options entry.
 * 
 * Parameters:
 * background_color - Hex code for default background color without the #. eg) ffffff
 * 
 * content_width - Only for determining "full width" image. Actual width in Bootstrap.css
 * 		is 1170 for screens over 1200px resolution, otherwise 970.
 * 
 * embed_video_width - Sets the maximum width of videos that use the <embed> tag. The
 * 		default is 1170 to handle full-width page templates. If you will ALWAYS display
 * 		the sidebar, can set to 600 for better performance.
 * 
 * embed_video_height - Leave empty to automatically set at a 16:9 ratio to the width
 * 
 * post_formats - Array of WordPress extra post formats. i.e. aside, image, video, quote,
 * 		and/or link
 * 
 * touch_support - Whether to load touch support for carousels (sliders)
 * 
 * fontawesome - Whether to load font-awesome font set or not
 * 
 * bootstrap_gradients - Whether to load Bootstrap "theme" CSS for gradients
 * 
 * navbar_classes - One or more of navbar-default, navbar-inverse, navbar-fixed-top, etc.
 * 
 * custom_header_location - If 'header', displays the custom header above the navbar. If
 * 		'content-header', displays it below the navbar in place of the colored content-
 *		header section.
 * 
 * image_keyboard_nav - Whether to load javascript for using the keyboard to navigate image attachment pages
 * 
 * sample_widgets - Whether to display sample widgets in the footer and page-bottom widet areas.
 * 
 * sample_footer_menu - Whether to display sample footer menu with Top and Home links
 * 
 * testimonials - Whether to activate testimonials custom post type if Jetpack plugin is active
 *
 * NOTE: $theme_options is being deprecated and replaced with $xsbf_theme_options. You'll
 * need to update your child themes.
 */
$xsbf_theme_options = array(
	//'background_color' 		=> 'f2f2f2',
	//'content_width' 			=> 1170,
	//'embed_video_width' 		=> 1170,
	//'embed_video_height' 		=> null, // i.e. calculate it automatically
	//'post_formats' 			=> null,
	//'touch_support' 			=> true,
	//'fontawesome' 			=> true,
	//'bootstrap_gradients' 	=> false,
	//'navbar_classes'			=> 'navbar-default navbar-static-top',
	//'custom_header_location' 	=> 'header',
	//'image_keyboard_nav' 		=> true,
	//'sample_widgets' 			=> true, // for possible future use
	//'sample_footer_menu'		=> true, 
	'testimonials'			=> false
);

///// including child theme template-tags
include( get_stylesheet_directory() . '/inc/template-tags.php' );

///// setting 1-day cookie if it's not present
function newday_cookie() {
	if ( !isset($_COOKIE['kousouroslaw'])) {
		setcookie('kousouroslaw', 'jklaw_cookie', time()+3600*24); 
		return true;
	} else {
		return false;
	}
}

add_action( 'init', 'newday_cookie');

/////* Getting php to show up in the sidebar text widgets *//
add_filter('widget_text','execute_php',100);
function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
}

// add notables menu 
function register_my_menu() {
  register_nav_menu('notables-menu',__( 'Notables Menu' ));
}
add_action( 'init', 'register_my_menu' );


/* Load google fonts, CSS Style, scripts
*/
function klaw_scripts() {
	/* LOAD STYLESHEETS */
	/* google fonts */
	wp_enqueue_style( 'google_fonts', '//fonts.googleapis.com/css?family=Roboto:400,500,700,300,100,100italic,300italic,400italic,500italic,700italic,900,900italic',array(), null, 'screen' );	
	wp_enqueue_style( 'google_fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700',array(), null, 'screen' );	

	/* LOAD JAVASCRIPT */
	/* jquery that makes the bootstrap video modal work */
	wp_enqueue_script( 'jquery1101_script', '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery1103_script', '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array(), '1.0.0', true );

	/* cookie.js  */
	wp_enqueue_script( 'cookie_script', get_template_directory_uri() . '-child/js/cookie.js', array(), '1.0.0', true );
	/* kousouros.js  */
	// wp_enqueue_script( 'splash_script', get_template_directory_uri() . '-child/js/splash.js', array(), '1.0.0', true );
	wp_enqueue_script( 'kousouros_script', get_template_directory_uri() . '-child/js/kousouros.js', array(), '1.0.0', true );

	/* avvo badge */
	wp_enqueue_script( 'avvo_badge_script', 'http://www.avvo.com/assets/badges-v2.js', array(), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'klaw_scripts' );

/*
 * OVERRIDE THE SITE CREDITS TO GET RID OF THE "THEME BY XTREMELYSOCIAL" AND JUST LEAVE
 * COPYRIGHT YOUR SITE NAME
 * 
 * You can hard-code whatever you want in here, but its better to have this function pull
 * the current year and site name and URL as shown below.
 */
add_filter('xsbf_credits', 'xsbf_child_credits'); 
function xsbf_child_credits ( $site_credits ) {
		
	$theme = wp_get_theme();
	$site_credits = sprintf( __( '&copy; %1$s %2$s', 'xtremelysocial' ), 
		date ( 'Y' ),
		'<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a>'
	);
	return $site_credits;
}

/** This came from codex: in_category
 * Tests if any of a post's assigned categories are descendants of target categories
 * Used in child-theme template tags to direct links from search results to page instead of to single post
 *
 * @param int|array $cats The target categories. Integer ID or array of integer IDs
 * @param int|object $_post The post. Omit to test the current post in the Loop or main query
 * @return bool True if at least 1 of the post's categories is a descendant of any of the target categories
 * @see get_term_by() You can get a category by name or slug, then pass ID to this function
 * @uses get_term_children() Passes $cats
 * @uses in_category() Passes $_post (can be empty)
 * @version 2.7
 * @link http://codex.wordpress.org/Function_Reference/in_category#Testing_if_a_post_is_in_a_descendant_category
 */
if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
	function post_is_in_descendant_category( $cats, $_post = null ) {
		foreach ( (array) $cats as $cat ) {
			// get_term_children() accepts integer ID only
			$descendants = get_term_children( (int) $cat, 'category' );
			if ( $descendants && in_category( $descendants, $_post ) )
				return true;
		}
		return false;
	}
}