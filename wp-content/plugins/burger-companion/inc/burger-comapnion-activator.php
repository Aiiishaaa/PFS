<?php

/**
 * Fired during plugin activation
 *
 * @package   Burger Companion
 */

/**
 * This class defines all code necessary to run during the plugin's activation.
 *
 */
class Burger_Companion_Activator {

	public static function activate() {

        $item_details_page = get_option('item_details_page'); 
		$theme = wp_get_theme(); // gets the current theme
		if(!$item_details_page){
			
			if ( 'Spintech' == $theme->name || 'ITpress' == $theme->name || 'Onsoft' == $theme->name){
				require BURGER_COMPANION_PLUGIN_DIR . 'inc/spintech/default-pages/upload-media.php';
				require BURGER_COMPANION_PLUGIN_DIR . 'inc/spintech/default-pages/home-page.php';
				require BURGER_COMPANION_PLUGIN_DIR . 'inc/spintech/default-widgets/default-widget.php';
			}
			
			update_option( 'item_details_page', 'Done' );
		}
	}

}