<?php
/*
Plugin Name: Burger Companion
Plugin URI:
Description: The Burger Companion plugin adds sections functionality to the Spintech Theme.
Version: 1.6
Author: burgersoftware
Text Domain: burger-companion
*/
define( 'BURGER_COMPANION_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'BURGER_COMPANION_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

function burger_companion_activate() {
	
	/**
	 * Load Custom control in Customizer
	 */
	if ( class_exists( 'WP_Customize_Control' ) ) {
		require_once('inc/custom-controls/range-validator/range-control.php');		
	}
	require_once('inc/custom-controls/customizer-repeater/functions.php');	
	$theme = wp_get_theme(); // gets the current theme
	
		if( 'Spintech' == $theme->name){
			require_once('inc/spintech/spintech.php');
		}
		
		if( 'ITpress' == $theme->name){
			require_once('inc/spintech/spintech.php');
		}
		
		if( 'Onsoft' == $theme->name){
			require_once('inc/onsoft/onsoft.php');
		}
		
	}
add_action( 'init', 'burger_companion_activate' );

$theme = wp_get_theme();

/**
 * The code during plugin activation.
 */
function burger_companion_activated() {
	require_once plugin_dir_path( __FILE__ ) . 'inc/burger-comapnion-activator.php';
	Burger_Companion_Activator::activate();
}
register_activation_hook( __FILE__, 'burger_companion_activated' );