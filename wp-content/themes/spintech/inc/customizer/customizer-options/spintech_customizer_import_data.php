<?php
class spintech_import_dummy_data {

	private static $instance;

	public static function init( ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof spintech_import_dummy_data ) ) {
			self::$instance = new spintech_import_dummy_data;
			self::$instance->spintech_setup_actions();
		}

	}

	/**
	 * Setup the class props based on the config array.
	 */
	

	/**
	 * Setup the actions used for this class.
	 */
	public function spintech_setup_actions() {

		// Enqueue scripts
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'spintech_import_customize_scripts' ), 0 );

	}
	
	

	public function spintech_import_customize_scripts() {

	wp_enqueue_script( 'spintech-import-customizer-js', SPINTECH_PARENT_INC_URI . '/customizer/customizer-notify/js/spintech-import-customizer-options.js', array( 'customize-controls' ) );
	}
}

$spintech_import_customizers = array(

		'import_data' => array(
			'recommended' => true,
			
		),
);
spintech_import_dummy_data::init( apply_filters( 'spintech_import_customizer', $spintech_import_customizers ) );