<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/**
@package Testimonial Maker
Plugin Name: Testimonial Maker
Plugin URI:  https://awplife.com/
Description: A very easy Plugin for make testimonials.
Version:     1.1.7
Author:      A WP Life
Author URI:  https://awplife.com/
Text Domain: testimonial-maker
Domain Path: /languages
License:     GPL2

Testimonial Maker is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Testimonial Maker is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Testimonial Maker. If not, see https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html.
*/

if ( ! class_exists( 'awl_testimonial' ) ) {
	class awl_testimonial {		
		
		public function __construct() {
			$this->_constants();
			$this->_hooks();
		}
		
		protected function _constants() {
			//Plugin Version
			define( 'TML_PLUGIN_VER', '1.1.7' );
			
			//Plugin Text Domain
			define("TML_TXTDM","testimonial-maker" );

			//Plugin Name
			define( 'TML_PLUGIN_NAME', __( 'Testimonial Maker', TML_TXTDM ) );

			//Plugin Slug
			define( 'TML_PLUGIN_SLUG', 'testimonial-maker' );

			//Plugin Directory Path
			define( 'TML_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

			//Plugin Directory URL
			define( 'TML_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

			define( 'TML_SECURE_KEY', md5( NONCE_KEY ) );
			
		} // end of constructor function
		
		protected function _hooks() {
			//Load text domain
			add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );
			
			//add testimonial menu item, change menu filter for multisite
			add_action( 'admin_menu', array( $this, 'tmonial_menu' ), 101 );
			
			//Create testimonial Filter testimonial Custom Post
			add_action( 'init', array( $this, 'Testimonial' ));
			
			//Add meta box to custom post
			add_action( 'add_meta_boxes', array( $this, 'admin_add_meta_box' ) );
			 
			//loaded during admin init 
			add_action( 'admin_init', array( $this, 'admin_add_meta_box' ) );
			
			add_action('save_post', array(&$this, '_tml_save_settings'));

			//Shortcode Compatibility in Text Widgets
			add_action('widget_text', 'do_shortcode');
		} // end of hook function
		
		public function load_textdomain() {
			load_plugin_textdomain( TML_TXTDM, false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
		}
		
		public function tmonial_menu() {
			$testimonial_setting = add_submenu_page( 'edit.php?post_type='.TML_PLUGIN_SLUG, __( 'Testimonial Setting', TML_TXTDM ), __( 'Testimonial Setting', TML_TXTDM ), 'administrator', 'tmonial-setting-page', array( $this, 'tmonial_setting_page') );
			$featured_setting = add_submenu_page( 'edit.php?post_type='.TML_PLUGIN_SLUG, __( 'Featured Plugin', TML_TXTDM ), __( 'Featured Plugin', TML_TXTDM ), 'administrator', 'tmonial-featured-page', array( $this, 'tmonial_featured_page') );
		}

		public function Testimonial() {
			$labels = array(
				'name'               => __( 'Testimonial Maker', 'post type general name', TML_TXTDM ),
				'singular_name'      => __( 'Testimonial', 'post type singular name', TML_TXTDM ),
				'menu_name'           => __( 'Testimonial Maker', TML_TXTDM ),
				'name_admin_bar'      => __( 'Testimonial', TML_TXTDM ),
				'add_new'            => __( 'Add New Testimonial',  TML_TXTDM ),
				'add_new_item'       => __( 'Add New Testimonial',  TML_TXTDM ),
				'new_item'           => __( 'New Testimonial',  TML_TXTDM ),
				'edit_item'          => __( 'Edit Testimonial',  TML_TXTDM ),
				'view_item'          => __( 'View Testimonial', TML_TXTDM),
				'all_items'          => __( 'All Testimonial', TML_TXTDM ),
				'search_items'       => __( 'Search Testimonial', TML_TXTDM ),
				'parent_item_colon'  => __( 'Parent Testimonial:', TML_TXTDM ),
				'not_found'          => __( 'No Testimonial found.', TML_TXTDM ),
				'not_found_in_trash' => __( 'No Testimonial found in Trash.', TML_TXTDM )
			);

			$args = array(
				'labels'             => __( 'Testimonial', TML_TXTDM ),
				'description'        => __( 'Description.', 'your-plugin-textdomain' ),
				'labels'             => $labels,
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				//'rewrite'            => array( 'slug' => 'testimonial' ),
				'capability_type'    => 'page',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_icon'           => 'dashicons-format-status',
				'menu_position'      => null,
				'supports'            => array( 'title', 'editor', 'thumbnail',),
			);

			register_post_type( 'testimonial-maker', $args );
		}
		 public function admin_add_meta_box() {
			add_meta_box( '', __('Add Client detail', TML_TXTDM), array(&$this, 'tml_testimonial_upload'), 'testimonial-maker', 'normal', 'default' );
		} 
		public function tml_testimonial_upload($post) {
			//load settings
			$testimonial_post_settings = get_post_meta( $post->ID, 'awl_testimonial'.$post->ID, true);
			
			?>
			<div>
				<p><?php _e('Client Website URL', TML_TXTDM); ?></p>
				<?php if(isset($testimonial_post_settings['website_link'])) $website_link = $testimonial_post_settings['website_link']; else $website_link = ""; ?>	
				<p><input type="text" class="form-control" id="website_link" name="website_link" style="margin-left: 15px; width: 300px;" value="<?php echo $website_link; ?>" /></p>
				<p><?php _e('Client Designation', TML_TXTDM); ?></p>
				<?php if(isset($testimonial_post_settings['designation'])) $designation = $testimonial_post_settings['designation']; else $designation = ""; ?>	
				<p><input type="text" class="form-control" id="designation" name="designation" style="margin-left: 15px; width: 300px;" value="<?php echo $designation; ?>" /></p>
			</div>
			<?php 
			// syntax: wp_nonce_field( 'name_of_my_action', 'name_of_nonce_field' );
			wp_nonce_field( 'tml_post_save_settings', 'tml_post_save_nonce' );
		}

		public function _tml_save_settings($post_id) {
			if(isset($_POST['tml_post_save_nonce'])) {
				if ( !isset( $_POST['tml_post_save_nonce'] ) || !wp_verify_nonce( $_POST['tml_post_save_nonce'], 'tml_post_save_settings' ) ) {
				   print 'Sorry, your nonce did not verify.';
				   exit;
				} else {
					$testimonial_post_settings = array(
						'website_link' => sanitize_text_field($_POST['website_link']),
						'designation' => sanitize_text_field($_POST['designation']),
					);			
					$awl_testimonial_shortcode_setting = "awl_testimonial".$post_id;
					update_post_meta($post_id, $awl_testimonial_shortcode_setting, $testimonial_post_settings);
				}
			}// end save setting
		}// end save setting
		
		public function tmonial_setting_page() {
			require_once('include/testimonial-setting.php');
		} 
		public function tmonial_featured_page() {
			require_once('featured-plugins/featured-plugins.php');
		}
	}
	$new_testimonial_object = new awl_testimonial();		
	require_once('shortcode.php');	
}
?>