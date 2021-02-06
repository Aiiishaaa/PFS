<?php
/*
Plugin Name: Accessibility by UserWay
Plugin URI: https://userway.org
Description: The UserWay Accessibility Widget is a WordPress plugin that helps make your WordPress site more accessible without refactoring your website's existing code and will increase compliance with WCAG 2.1, ATAG 2.0, ADA, & Section 508 requirements.
Version: 2.0
Author: UserWay.org
Author URI: https://userway.org
*/

/*
    Copyright 2020  UserWay  (email: admin@userway.org)
*/

define('USW_USERWAY_DIR', plugin_dir_path(__FILE__));
define('USW_USERWAY_URL', plugin_dir_url(__FILE__));

register_activation_hook(__FILE__, 'usw_userway_activation');
register_deactivation_hook(__FILE__, 'usw_userway_deactivation');

function usw_userway_activation() {

}

function usw_userway_deactivation() {

}

function usw_userway_load(){
    if(is_admin()) require_once(USW_USERWAY_DIR.'includes/admin.php');
}
usw_userway_load();

function usw_addplugin_footer_notice(){
    wp_register_style( 'akismet.css', plugin_dir_url( __FILE__ ) . 'assets/style.css', array());
    wp_enqueue_style( 'akismet.css');
    $all_options = get_option('usw_userway_settings');
    if(!empty($all_options['code'])) {
        echo "<script>
              (function(e){
                  var el = document.createElement('script');
                  el.setAttribute('data-account', '" . $all_options['code'] . "');
                  el.setAttribute('src', 'https://cdn.userway.org/widget.js');
                  document.body.appendChild(el);
                })();
              </script>";
    }
}
add_action('wp_footer', 'usw_addplugin_footer_notice');
