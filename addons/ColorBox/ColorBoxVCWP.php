<?php
/**
 * File Name ColorBoxVCWP.php
 * @package WordPress
 * @subpackage ParentTheme_VC
 * @license GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version 1.0
 * @updated 00.00.13
 **/
####################################################################################################





/**
 * ColorBoxVCWP
 *
 * @version 1.0
 * @updated 00.00.13
 **/
$ColorBoxVCWP = new ColorBoxVCWP();
class ColorBoxVCWP {
	
	
	
	
	
	
	/**
	 * __construct
	 *
	 * @version 1.0
	 * @updated 00.00.13
	 **/
	function __construct() {

		$this->set_paths();

		// hook method init
		add_action( 'init', array( &$this, 'init' ) );

	} // end function __construct
	
	
	
	
	
	
	/**
	 * set_paths
	 *
	 * @version 1.0
	 * @updated 00.00.13
	 **/
	function set_paths() {

		$this->set( 'dir_path', "/addons/ColorBox" );
		$this->set( 'template_path', get_stylesheet_directory() . $this->dir_path );
		$this->set( 'template_directory', get_stylesheet_directory_uri() . $this->dir_path );

	} // end function set_paths
	
	
	
	
	
	
	/**
	 * init
	 *
	 * @version 1.0
	 * @updated 00.00.13
	 * @codex http://codex.wordpress.org/Plugin_API/Action_Reference/init
	 * 
	 * Description:
	 * Runs after WordPress has finished loading but before any headers are sent.
	 **/
	function init() {
		
		// register styles and scripts
		$this->register_style_and_scripts();
		
		// CSS // wp_print_styles
		add_action( 'wp_print_styles', array( &$this, 'wp_print_styles' ) );
		
		// Javascripts // wp_enqueue_scripts // wp_print_scripts
		add_action( 'wp_enqueue_scripts', array( &$this, 'wp_enqueue_scripts' ) );
		
	} // end function init
	
	
	
	
	
	
	/**
	 * set
	 *
	 * @version 1.0
	 * @updated 00.00.13
	 **/
	function set( $key, $val = false ) {
		
		if ( isset( $key ) AND ! empty( $key ) ) {
			$this->$key = $val;
		}
		
	} // end function set
	
	
	
	
	
	
	####################################################################################################
	/**
	 * Functionality
	 **/
	####################################################################################################
	
	
	
	
	
	
	/**
	 * Register Styles and Scripts
	 *
	 * @version 1.0
	 * @updated 00.00.13
	 **/
	function register_style_and_scripts() {
		
		/**
		 * CSS
		 **/
		wp_register_style( 'colorbox', "$this->template_directory/css/colorbox.css" );
		
		
		
		/**
		 * JS
		 **/
		wp_register_script( 'colorbox', "$this->template_directory/js/jquery.colorbox-min.js", array( 'jquery' ) );
		
	} // end function register_style_and_scripts
	
	
	
	
	
	
	/**
	 * Add CSS
	 *
	 * @version 1.0
	 * @updated 00.00.13
	 **/
	function wp_print_styles() {
		
		wp_enqueue_style( 'colorbox' );

	} // end function wp_print_styles
	
	
	
	
	
	
	/**
	 * Enqueue Scripts
	 *
	 * @version 1.0
	 * @updated 00.00.13
	 **/
	function wp_enqueue_scripts() {
		
		wp_enqueue_script( 'colorbox' );
		
	} // function wp_enqueue_scripts
	
	
	
	
	
	
	####################################################################################################
	/**
	 * Conditionals
	 **/
	####################################################################################################
	
	
	
	
	
	
	/**
	 * have_something
	 *
	 * @version 1.0
	 * @updated 00.00.13
	 **/
	function have_something() {
		
		if ( isset( $this->something ) AND ! empty( $this->something ) ) {
			$this->set( 'have_something', 1 );
		} else {
			$this->set( 'have_something', 0 );
		}
		
		return $this->have_something;
		
	} // end function have_something
	
	
	
} // end class ColorBoxVCWP