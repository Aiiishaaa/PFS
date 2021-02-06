<?php

class Spintech_Customizer_Notify {

	private $recommended_actions;

	
	private $recommended_plugins;

	
	private static $instance;

	
	private $recommended_actions_title;

	
	private $recommended_plugins_title;

	
	private $dismiss_button;

	
	private $install_button_label;

	
	private $activate_button_label;

	
	private $spintech_deactivate_button_label;

	
	public static function init( $config ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Spintech_Customizer_Notify ) ) {
			self::$instance = new Spintech_Customizer_Notify;
			if ( ! empty( $config ) && is_array( $config ) ) {
				self::$instance->config = $config;
				self::$instance->setup_config();
				self::$instance->setup_actions();
			}
		}

	}

	
	public function setup_config() {

		global $spintech_customizer_notify_recommended_plugins;
		global $spintech_customizer_notify_recommended_actions;

		global $install_button_label;
		global $activate_button_label;
		global $spintech_deactivate_button_label;

		$this->recommended_actions = isset( $this->config['recommended_actions'] ) ? $this->config['recommended_actions'] : array();
		$this->recommended_plugins = isset( $this->config['recommended_plugins'] ) ? $this->config['recommended_plugins'] : array();

		$this->recommended_actions_title = isset( $this->config['recommended_actions_title'] ) ? $this->config['recommended_actions_title'] : '';
		$this->recommended_plugins_title = isset( $this->config['recommended_plugins_title'] ) ? $this->config['recommended_plugins_title'] : '';
		$this->dismiss_button            = isset( $this->config['dismiss_button'] ) ? $this->config['dismiss_button'] : '';

		$spintech_customizer_notify_recommended_plugins = array();
		$spintech_customizer_notify_recommended_actions = array();

		if ( isset( $this->recommended_plugins ) ) {
			$spintech_customizer_notify_recommended_plugins = $this->recommended_plugins;
		}

		if ( isset( $this->recommended_actions ) ) {
			$spintech_customizer_notify_recommended_actions = $this->recommended_actions;
		}

		$install_button_label    = isset( $this->config['install_button_label'] ) ? $this->config['install_button_label'] : '';
		$activate_button_label   = isset( $this->config['activate_button_label'] ) ? $this->config['activate_button_label'] : '';
		$spintech_deactivate_button_label = isset( $this->config['spintech_deactivate_button_label'] ) ? $this->config['spintech_deactivate_button_label'] : '';

	}

	
	public function setup_actions() {

		// Register the section
		add_action( 'customize_register', array( $this, 'spintech_plugin_notification_customize_register' ) );

		// Enqueue scripts and styles
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'spintech_customizer_notify_scripts_for_customizer' ), 0 );

		/* ajax callback for dismissable recommended actions */
		add_action( 'wp_ajax_quality_customizer_notify_dismiss_action', array( $this, 'spintech_customizer_notify_dismiss_recommended_action_callback' ) );

		add_action( 'wp_ajax_ti_customizer_notify_dismiss_recommended_plugins', array( $this, 'spintech_customizer_notify_dismiss_recommended_plugins_callback' ) );

	}

	
	public function spintech_customizer_notify_scripts_for_customizer() {

		wp_enqueue_style( 'spintech-customizer-notify-css', SPINTECH_PARENT_INC_URI . '/customizer/customizer-notify/css/spintech-customizer-notify.css', array());

		wp_enqueue_style( 'spintech-plugin-install' );
		wp_enqueue_script( 'spintech-plugin-install' );
		wp_add_inline_script( 'spintech-plugin-install', 'var pagenow = "customizer";' );

		wp_enqueue_script( 'spintech-updates' );

		wp_enqueue_script( 'spintech-customizer-notify-js', SPINTECH_PARENT_INC_URI . '/customizer/customizer-notify/js/spintech-notify.js', array( 'customize-controls' ));
		wp_localize_script(
			'spintech-customizer-notify-js', 'SpintechCustomizercompanionObject', array(
				'spintech_ajaxurl'            => esc_url(admin_url( 'admin-ajax.php' )),
				'spintech_template_directory' => esc_url(get_template_directory_uri()),
				'spintech_base_path'          => esc_url(admin_url()),
				'spintech_activating_string'  => __( 'Activating', 'spintech' ),
			)
		);

	}

	
	public function spintech_plugin_notification_customize_register( $wp_customize ) {

		
		require SPINTECH_PARENT_INC_DIR . '/customizer/customizer-notify/spintech-notify-section.php';

		$wp_customize->register_section_type( 'Spintech_Customizer_Notify_Section' );

		$wp_customize->add_section(
			new Spintech_Customizer_Notify_Section(
				$wp_customize,
				'Spintech-customizer-notify-section',
				array(
					'title'          => $this->recommended_actions_title,
					'plugin_text'    => $this->recommended_plugins_title,
					'dismiss_button' => $this->dismiss_button,
					'priority'       => 0,
				)
			)
		);

	}

	
	public function spintech_customizer_notify_dismiss_recommended_action_callback() {

		global $spintech_customizer_notify_recommended_actions;

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html($action_id); 

		if ( ! empty( $action_id ) ) {

			
			if ( get_theme_mod( 'spintech_customizer_notify_show' ) ) {

				$spintech_customizer_notify_show_recommended_actions = get_theme_mod( 'spintech_customizer_notify_show' );
				switch ( $_GET['todo'] ) {
					case 'add':
						$spintech_customizer_notify_show_recommended_actions[ $action_id ] = true;
						break;
					case 'dismiss':
						$spintech_customizer_notify_show_recommended_actions[ $action_id ] = false;
						break;
				}
				echo esc_html($spintech_customizer_notify_show_recommended_actions);
				
			} else {
				$spintech_customizer_notify_show_recommended_actions = array();
				if ( ! empty( $spintech_customizer_notify_recommended_actions ) ) {
					foreach ( $spintech_customizer_notify_recommended_actions as $spintech_lite_customizer_notify_recommended_action ) {
						if ( $spintech_lite_customizer_notify_recommended_action['id'] == $action_id ) {
							$spintech_customizer_notify_show_recommended_actions[ $spintech_lite_customizer_notify_recommended_action['id'] ] = false;
						} else {
							$spintech_customizer_notify_show_recommended_actions[ $spintech_lite_customizer_notify_recommended_action['id'] ] = true;
						}
					}
					echo esc_html($spintech_customizer_notify_show_recommended_actions);
				}
			}
		}
		die(); 
	}

	
	public function spintech_customizer_notify_dismiss_recommended_plugins_callback() {

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html($action_id); 

		if ( ! empty( $action_id ) ) {

			$spintech_lite_customizer_notify_show_recommended_plugins = get_theme_mod( 'spintech_customizer_notify_show_recommended_plugins' );

			switch ( $_GET['todo'] ) {
				case 'add':
					$spintech_lite_customizer_notify_show_recommended_plugins[ $action_id ] = false;
					break;
				case 'dismiss':
					$spintech_lite_customizer_notify_show_recommended_plugins[ $action_id ] = true;
					break;
			}
			echo esc_html($spintech_customizer_notify_show_recommended_actions);
		}
		die(); 
	}

}
