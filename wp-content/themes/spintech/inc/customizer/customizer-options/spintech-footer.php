<?php
function spintech_footer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'spintech'),
		) 
	);
	
	// Footer Bottom // 
	$wp_customize->add_section(
        'footer_bottom',
        array(
            'title' 		=> __('Footer Bottom','spintech'),
			'panel'  		=> 'footer_section',
			'priority'      => 3,
		)
    );
	
	// Footer Bottom Logo Head 
	$wp_customize->add_setting(
		'footer_btm_logo_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_text',
			'priority'  => 1,
		)
	);

	$wp_customize->add_control(
	'footer_btm_logo_head',
		array(
			'type' => 'hidden',
			'label' => __('Logo','spintech'),
			'section' => 'footer_bottom',
		)
	);
	
	//  Image // 
    $wp_customize->add_setting( 
    	'footer_btm_logo_img' , 
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_url',	
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'footer_btm_logo_img' ,
		array(
			'label'          => esc_html__( 'Image', 'spintech'),
			'section'        => 'footer_bottom',
		) 
	));
	
	
	
	// Footer Copyright Head
	$wp_customize->add_setting(
		'footer_btm_copy_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_text',
			'priority'  => 3,
		)
	);

	$wp_customize->add_control(
	'footer_btm_copy_head',
		array(
			'type' => 'hidden',
			'label' => __('Copyright','spintech'),
			'section' => 'footer_bottom',
		)
	);
	
	// Footer Copyright 
	$spintech_foo_copy = esc_html__('Copyright &copy; [current_year] [site_title] | Powered by [theme_author]', 'spintech' );
	$wp_customize->add_setting(
    	'footer_copyright',
    	array(
			'default' => $spintech_foo_copy,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyright',
		array(
		    'label'   		=> __('Copyright','spintech'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'textarea',
			'transport'         => $selective_refresh,
		)  
	);	
	
	// Footer Menu Head
	$wp_customize->add_setting(
		'footer_btm_menu_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_text',
			'priority'  => 5,
		)
	);

	$wp_customize->add_control(
	'footer_btm_menu_head',
		array(
			'type' => 'hidden',
			'label' => __('Menu','spintech'),
			'section' => 'footer_bottom',
		)
	);
	
	// hide/show
	$wp_customize->add_setting( 
		'hs_footer_btm_menu' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_checkbox',
			'transport'         => $selective_refresh,
			'priority' => 6,
		) 
	);
	
	$wp_customize->add_control(
	'hs_footer_btm_menu', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'spintech' ),
			'section'     => 'footer_bottom',
			'type'        => 'checkbox'
		) 
	);
}
add_action( 'customize_register', 'spintech_footer' );
// Footer selective refresh
function spintech_footer_partials( $wp_customize ){
	
	// hs_footer_btm_menu
	$wp_customize->selective_refresh->add_partial(
		'hs_footer_btm_menu', array(
			'selector' => '#footer-section .widget_nav_menu',
			'container_inclusive' => true,
			'render_callback' => 'footer_bottom',
			'fallback_refresh' => true,
		)
	);
	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '#footer-section .footer-copyright .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'spintech_footer_copyright_render_callback',
	
	) );
	}

add_action( 'customize_register', 'spintech_footer_partials' );

// copyright_content
function spintech_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}