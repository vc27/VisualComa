<?php
/**
 * File Name header.php
 * @package WordPress
 * @subpackage ParentTheme_VC
 * @license GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version 2.1
 * @updated 06.19.13
 **/
#################################################################################################### */

get_template_part( 'header', 'head' );

?>
<!-- Start Body -->
<body <?php body_class(); ?>>
	<?php do_action('after_body_tag'); ?>
	<div id="page">
			
		<!-- Start Header -->
		<div id="header" class="outer-wrap">
			<header class="inner-wrap">
				
				<img id="img-birds" src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-birds.png" alt="" />
				
				<div id="site-title">
					<a class="gravatar" href="<?php echo get_permalink(97); ?>"><?php echo get_avatar( 10, 40 ); ?></a>
					<a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( strip_tags( get_bloginfo('name') ) ); ?>">
						<span class="name"><?php bloginfo('name'); ?></span>
						<span class="desc"><?php bloginfo('description'); ?></span>
					</a>
					<div class="clear"></div>
				</div>
				
				<div id="primary-navigation">
					<a class="nav-trigger" href="<?php echo home_url(); ?>"><span class="icon-reorder"></span></a>
					<span class="navigation-wrap">
						<a href="<?php echo home_url(); ?>/about-me" title="About Me"><span class="icon-smile"></span><span class="text">about me</span></a>
						<a href="<?php echo home_url(); ?>/category/photo/" title="Photos"><span class="icon-camera"></span><span class="text">photos</span></a>
						<a target="_blank" href="http://www.meetup.com/NashvilleWordpress/" title="WordPress Nashville"><span class="icon-wordpress"></span><span class="text">WordPress</span></a>
						<a target="_blank" href="http://twitter.com/vc27" title="Twitter"><span class="icon-twitter"></span><span class="text">twitter</span></a>
						<a target="_blank" href="http://facebook.com/randyhicks" title="Facebook"><span class="icon-facebook"></span><span class="text">facebook</span></a>
						<a target="_blank" href="https://plus.google.com/u/0/114522957738365915130/about" title="Google+"><span class="icon-google-plus"></span><span class="text">Google+</span></a>
						<a target="_blank" href="https://github.com/vc27" title="GitHub"><span class="icon-github-alt"></span><span class="text">GitHub</span></a>
					</span>
					<div class="clear"></div>
				</div>
				
				<div class="clear"></div>
			</header>
		</div>
		
		<!-- Start Main Content -->
		<div id="content-wrap" class="outer-wrap">
			<div class="inner-wrap"><?php do_action( 'inner_wrap_top' ); ?>