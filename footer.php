<?php
/**
 * File Name footer.php
 * @package WordPress
 * @subpackage ParentTheme_VC
 * @license GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version 1.2
 * @updated 06.19.13
 **/
#################################################################################################### */

do_action( 'inner_wrap_bottom' );

?>
			<div class="clear"></div>
		</div><!-- End content-wrap-inner -->
	</div><!-- End content-wrap -->
	
	<!-- Start Footer -->
	<div id="footer" class="outer-wrap">
		<footer class="inner-wrap">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-footer-bg-linned-paper.png" alt="footer-bg-linned-paper"/>
			<div class="clear"></div>
		</footer>
	</div><!-- End Footer -->

</div><!-- End Page -->

<!-- Start wp_footer -->
<?php wp_footer(); ?>
</body>
</html>