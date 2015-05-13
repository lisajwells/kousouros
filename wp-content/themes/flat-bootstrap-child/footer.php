<?php
/**
 * Theme: Flat Bootstrap
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 * @package flat-bootstrap
 */
?>
	</div><!-- #content -->

	<?php // Start the footer area ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		
	<?php // Footer "sidebar" widget area (1 to 4 columns supported)
	get_sidebar( 'footer' );
	?>

	<?php // Check for footer navbar (optional)

	global $xsbf_theme_options; 
	$nav_menu = null; 
	if ( function_exists('has_nav_menu') AND has_nav_menu( 'footer' ) ) {
		$nav_menu = wp_nav_menu( 
			array( 'theme_location' => 'footer',
			'container_div' 		=> 'div', //'nav' or 'div'
			'container_class' 		=> '', //class for <nav> or <div>
			'menu_class' 			=> 'list-inline dividers', //class for <ul>
			'walker' 				=> new wp_bootstrap_navwalker(),
			'fallback_cb'			=> '',
			'echo'					=> false, // we'll output the menu later
			'depth'					=> 1,
			) 
		);
		
	// If not, default one
	} elseif ( $xsbf_theme_options['sample_footer_menu'] ) {
			$nav_menu = '
			<div class="sample-menu-footer-container">
			<ul id="sample-menu-footer" class="list-inline dividers">
			<li id="menu-item-sample-1" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-sample-1"><a class="smoothscroll" title="'
			.__( 'Back to top of page', 'flat-bootstrap' )
			.'" href="#page"><span class="fa fa-angle-up"></span> '
			.__( 'Top', 'flat-bootstrap' )
			.'</a></li>
			<li id="menu-item-sample-2" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-sample-2"><a title="'
			.__( 'Home', 'flat-bootstrap' )
			.'" href="' . get_home_url() . '">'
			.__( 'Home', 'flat-bootstrap' )
			.'</a></li>
			</ul>
			</div>';
	} //endif has_nav_menu()
?>

	<?php // Check for site credits (can be overriden in a child theme)
	$theme = wp_get_theme();
	$site_credits = sprintf( __( '&copy; %1$s %2$s. Theme by %3$s.', 'flat-bootstrap' ), 
		date ( 'Y' ),
		'<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a>',
		'<a href="' . $theme->get( 'ThemeURI' ) . '" rel="profile" target="_blank">' . $theme->get( 'Author' ) . '</a>'
	);
	$site_credits = apply_filters( 'xsbf_credits', $site_credits );
 	?>

	<?php // If either footer nav or site credits, display them
	if ( $nav_menu OR $site_credits ) : ?>	  
	<div class="after-footer">
	<div class="container">
		<div id="back-to-top"><a class="smoothscroll" href="#page">back to top&nbsp;<span class="fa fa-angle-up">&nbsp;</span></a></div>

<div class="row footer-content">
		<?php // Footer nav menu
		if ( $nav_menu ) : ?>
			<div class="footer-nav-menu pull-left col-md-4">
			<nav id="footer-navigation" class="secondary-navigation" role="navigation">
				<h1 class="menu-toggle sr-only"><?php _e( 'Footer Menu', 'flat-bootstrap' ); ?></h1>
				<?php echo $nav_menu; ?>
			</nav>
			</div><!-- .footer-nav-menu -->
		<?php endif; ?>

		<div id="contact-footer" class="col-md-4">
			<p>260 Madison Avenue, 22nd floor, <br>New York, New York 10018</p>
			<p>212-000-0000 Fax 212-000-0000</p>
			<p><a href="#">james@kousouroslaw.com</a></p>
		</div>

		<div id="social-footer" class="col-md-4">
			<p id="social-links"><a href="#"><i class="fa fa-facebook-square"></i></a>&nbsp;<a href="#"><i class="fa fa-linkedin-square"></i></a></p>
			<p>&copy; <?php echo date ( 'Y' ); ?> Kousouros Law</p>
			<p>Attorney advertising. Prior results do not guarantee a similar outcome.</p>
		</div>
</div><!-- row -->

<!-- removed dynamic site credits -->

	</div><!-- .container -->
	</div><!-- .after-footer -->
	<?php endif; ?>
		
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>