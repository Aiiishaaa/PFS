<?php
/* Notifications in customizer */


require SPINTECH_PARENT_INC_DIR . '/customizer/customizer-notify/spintech-notify.php';
$spintech_config_customizer = array(
	'recommended_plugins'       => array(
		'burger-companion' => array(
			'recommended' => true,
			'description' => sprintf(__('Install and activate <strong>Burger Companion</strong> plugin for taking full advantage of all the features this theme has to offer Spintech.', 'spintech')),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'spintech' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'spintech' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'spintech' ),
	'activate_button_label'     => esc_html__( 'Activate', 'spintech' ),
	'spintech_deactivate_button_label'   => esc_html__( 'Deactivate', 'spintech' ),
);
Spintech_Customizer_Notify::init( apply_filters( 'spintech_customizer_notify_array', $spintech_config_customizer ) );
