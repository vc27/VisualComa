<?php
/**
 * File Name 		loop-default.php
 * @package			WordPress
 * @subpackage 		ParentTheme_VC
 * @license 		GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version 		0.1.3
 * @updated 		02.02.12
 **/
#################################################################################################### */

do_action( 'vc_above_loop' );


if ( have_posts() ) {
	$i = 0; 
	
	echo "<div id=\"loop-default\" class=\"loop\">";

		while ( have_posts() ) { 
			the_post(); 
			$i++;

			if ( $i <= 1 ) {
				
				echo "<article "; post_class(); echo ">";

					vc_title( $post, array( 
						'permalink' => true, 
						'element' => 'div', 
						'class' => 'h1' 
					) );
					
					echo "<div class=\"post-meta-data\">";
						vc_category( array( 'after' => ' | ' ) );
						vc_comments( $post );
						vc_date( array( 'before' => ' | ' ) );
					echo "</div>";

					vc_content();

					echo "<div class=\"clear\"></div>";
				echo "</article>";
				
				echo "<div id=\"loop-default-archived\">";
					
			} else {
				
				if ( $i == 2 ) {
					echo "<div class=\"h5\">Archived</div>";
				}
				
				echo "<article id=\"post-" . $post->ID . "\" "; post_class("archived-post"); echo ">";
					featured__image( $post, array( 
						'post_thumbnail_size' => get_vc_option( 'post_display', 'featured_image_size' ),
						'class' => 'archive-thumbnail',
					) );
					vc_title( $post, array( 
						'permalink' => true,
						'element' => 'div',
						'class' => 'h3',
					) );
					echo "<div class=\"clear\"></div>";					
				echo "</article>";
				
			}

		} // End while(have_post())
		
		echo "</div>"; // end #loop-default-archived
		echo "<div class=\"clear\"></div>";
	echo "</div>";

} // End if(have_post()) 

do_action( 'vc_below_loop' ); 