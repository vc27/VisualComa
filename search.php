<?php
/**
 * File Name search.php
 * @package WordPress
 * @subpackage ParentTheme_VC
 * @license GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version 1.2
 * @updated 03.22.13
 **/
#################################################################################################### */
global $s;

get_template_part( 'header' );

if ( ! have_posts() ) {
	
	get_template_part( 'loop', 'no-search' ); 

} else {
	
	echo "<div class=\"page-title-wrapper page-title-wrapper-search\">";
		echo '<h1 class="title">' . get_vc_option( 'search', 'results_title' ) . '</h1>';
	echo '</div>';
	
	get_template_part( 'loop', 'default' );
	
}

get_template_part( 'footer' );