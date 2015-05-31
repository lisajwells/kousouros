<?php
/**
 * Theme: Flat Bootstrap
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 * @package flat-bootstrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- moved to functions
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://www.avvo.com/assets/badges-v2.js"></script> -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">

	<?php do_action( 'before' ); ?>
	
		<header id="masthead" class="site-header" role="banner">

			<?php
			/**
			  * CUSTOM HEADER IMAGE DISPLAYS HERE FOR THIS THEME, BUT CHILD THEMES MAY DISPLAY
			  * IT BELOW THE NAV BAR (VIA CONTENT-HEADER.PHP)
			  */
			global $xsbf_theme_options;
			$custom_header_location = isset ( $xsbf_theme_options['custom_header_location'] ) ? $xsbf_theme_options['custom_header_location'] : 'content-header';
			if ( $custom_header_location == 'header' ) :
			?>
				<div id="site-branding" class="site-branding">
					<div class="container site-branding-container">

							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<div id="header-image">
									<img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
								</div>
							</a>

							<!-- from the internets -->
							<!-- <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<label>
									<input type="search" 
					                class="search-field form-control" 
					                placeholder="Search"  
					                value="" name="s" 
					                title="Search efter:">
								</label>
								<input type="submit" class="search-submit" value="Search">
							</form> -->



					</div><!-- container -->
				</div><!-- .site-branding -->

			<?php			
			endif; // $custom_header_location
			?>			

			<?php
			/**
			  * ALWAYS DISPLAY THE NAV BAR
			  */
	 		?>	
			<nav id="site-navigation" class="main-navigation" role="navigation">

				<h1 class="menu-toggle sr-only screen-reader-text"><?php _e( 'Primary Menu', 'flat-bootstrap' ); ?></h1>
				<div class="skip-link"><a class="screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'flat-bootstrap' ); ?></a></div>

			<?php
			// Collapsed navbar menu toggle
			global $xsbf_theme_options;
			$navbar = '<div class="navbar ' . $xsbf_theme_options['navbar_classes'] . '">'
				.'<div class="container">'
	        	.'<div class="navbar-header">'
	        	// the button is the mobile hamburger menu
	          	.'<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">'
	            .'<span class="icon-bar"></span>'
	            .'<span class="icon-bar"></span>'
	            .'<span class="icon-bar"></span>'
	          	.'</button>';

			// Site title (Bootstrap "brand") in navbar. Hidden by default. Customizer will
			// display it if user turns of the main site title and tagline.
			$navbar .= '<a class="navbar-brand" href="'
				.esc_url( home_url( '/' ) )
				.'" rel="home">'
				.get_bloginfo( 'name' )
				.'</a>';
			
	        $navbar .= '</div><!-- navbar-header -->';

			// Display the desktop navbar
			$navbar .= wp_nav_menu( 
				array(  'theme_location' => 'primary',
				'container_class' => 'navbar-collapse collapse', //<nav> or <div> class
				'menu_class' => 'nav navbar-nav', //<ul> class
				'walker' => new wp_bootstrap_navwalker(),
				'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
				'echo'	=> false
				) 
			);
			echo apply_filters( 'xsbf_navbar', $navbar );
			?>

		</div><!-- .container -->
		</div><!-- .navbar -->
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
    <div class="container" id="search-container">
	    <form class="searchbox" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<span class="screen-reader-text sr-only"><?php _ex( 'Search for:', 'label', 'flat-bootstrap' ); ?></span>
            <input type="search" placeholder="" class="searchbox-input" onkeyup="buttonUp();" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" required >
            <input type="submit" value="">
            <span class="searchbox-submit"><span class="glyphicon glyphicon-search"></span></span>
            <span class="searchbox-icon"><span class="glyphicon glyphicon-search"></span></span>
        </form>
    </div>

	<?php // Set up the content area (but don't put it in a container) ?>	
	<div id="content" class="site-content">
