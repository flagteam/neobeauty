<?php
/**
 * Adds footer structures.
 *
 */

/****************************************************************************************/

add_action( 'travelify_footer', 'travelify_footer_widget_area', 10 );
/**
 * Displays the footer widgets
 */
function travelify_footer_widget_area() {
	get_sidebar( 'footer' );
}

/****************************************************************************************/

add_action( 'travelify_footer', 'travelify_open_sitegenerator_div', 20 );
/**
 * Opens the site generator div.
 */
function travelify_open_sitegenerator_div() {
	echo '<div id="site-generator">
				<div class="container">';
}

/****************************************************************************************/

add_action( 'travelify_footer', 'travelify_footer_cms', 30 );
/**
 * function to show the footer info, copyright information
 */
function travelify_footer_cms() {
$footer1 = get_page('104')->post_content;
$footer2 = get_page('108')->post_content;
$footer3 = get_page('113')->post_content;
$footer4 = get_page('115')->post_content;
echo '<div class="footerline"><div class="footer1">'.$footer1.'</div><div class="footer2">'.$footer2.'</div><div class="footer3">'.$footer3.'</div></div><div class="footerline"><div class="footerfull">'.$footer4.'</div></div>';

}


/****************************************************************************************/

add_action( 'travelify_footer', 'travelify_footer_info', 40 );
/**
 * function to show the footer info, copyright information
 */
function travelify_footer_info() {
   $output = '<div class="copyright">'.__( 'Copyright &copy;', 'travelify' ).' '.'[the-year] [site-link]'.' '.__( 'Powered by', 'travelify' ).' '.'[th-link] '.'</div><!-- .copyright -->';
   echo do_shortcode( $output );
}

/****************************************************************************************/

add_action( 'travelify_footer', 'travelify_close_sitegenerator_div', 45 );


/**
 * add content to the right side of footer
 */
function travelify_footer_rightinfo() {
		echo '<div class="footer-right">';
		echo get_theme_mod( 'travelify_footer_textbox' );
		echo '</div>';
}
add_action( 'travelify_footer', 'travelify_footer_rightinfo', 30 );

/**
 * Closes the site generator div.
 */
function travelify_close_sitegenerator_div() {
	echo '<div style="clear:both;"></div>
			</div><!-- .container -->
			</div><!-- #site-generator -->';
}

/****************************************************************************************/

add_action( 'travelify_footer', 'travelify_backtotop_html', 40 );
/**
 * Shows the back to top icon to go to top.
 */
function travelify_backtotop_html() {
	echo '<div class="back-to-top"><a href="#branding"></a></div>';
}

?>