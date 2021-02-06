<?php
function spintech_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'spintech'),
		) 
	);
	
	/*=========================================
	Spintech Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','spintech'),
			'panel'  		=> 'header_section',
		)
    );

	/*=========================================
	Header Navigation
	=========================================*/	
	$wp_customize->add_section(
        'hdr_navigation',
        array(
        	'priority'      => 3,
            'title' 		=> __('Header Navigation','spintech'),
			'panel'  		=> 'header_section',
		)
    );		
	
	// Header Hiring Section
	$wp_customize->add_setting(
		'hdr_nav_search_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'hdr_nav_search_head',
		array(
			'type' => 'hidden',
			'label' => __('Search','spintech'),
			'section' => 'hdr_navigation',
			'priority'  => 2,
		)
	);	
	
	// hide/show
	$wp_customize->add_setting( 
		'hs_nav_search' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_checkbox',
			'transport'         => $selective_refresh,
		) 
	);
	
	$wp_customize->add_control(
	'hs_nav_search', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'spintech' ),
			'section'     => 'hdr_navigation',
			'type'        => 'checkbox',
			'priority' => 2,
		) 
	);	
	
	
	// Header Navigation COntact
	$wp_customize->add_setting(
		'hdr_nav_ct_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'hdr_nav_ct_head',
		array(
			'type' => 'hidden',
			'label' => __('Contact','spintech'),
			'section' => 'hdr_navigation',
			'priority'  => 3,
		)
	);	
	
	// hide/show
	$wp_customize->add_setting( 
		'hs_nav_contact' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_checkbox',
			'transport'         => $selective_refresh,
		) 
	);
	
	$wp_customize->add_control(
	'hs_nav_contact', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'spintech' ),
			'section'     => 'hdr_navigation',
			'type'        => 'checkbox',
			'priority' => 4,
		) 
	);	
	
	
	// icon // 
	$wp_customize->add_setting(
    	'nav_contact_icon',
    	array(
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control(new Spintech_Icon_Picker_Control($wp_customize, 
		'nav_contact_icon',
		array(
		    'label'   		=> __('Icon','spintech'),
		    'section' 		=> 'hdr_navigation',
			'priority'  => 4,
			
		))  
	);		
	
	// nav_contact_ttl // 
	$wp_customize->add_setting(
    	'nav_contact_ttl',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_html',
			'transport'         => $selective_refresh,
		)
	);	

	$wp_customize->add_control( 
		'nav_contact_ttl',
		array(
		    'label'   		=> __('Title','spintech'),
		    'section'		=> 'hdr_navigation',
			'type' 			=> 'text',
			'priority'      => 5,
		)  
	);	
	
	// nav_contact_text // 
	$wp_customize->add_setting(
    	'nav_contact_text',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_html',
			'transport'         => $selective_refresh,
		)
	);	

	$wp_customize->add_control( 
		'nav_contact_text',
		array(
		    'label'   		=> __('Text','spintech'),
		    'section'		=> 'hdr_navigation',
			'type' 			=> 'text',
			'priority'      => 6,
		)  
	);
	
	
	/*=========================================
	Sticky Header
	=========================================*/	
	$wp_customize->add_section(
        'sticky_header_set',
        array(
        	'priority'      => 4,
            'title' 		=> __('Sticky Header','spintech'),
			'panel'  		=> 'header_section',
		)
    );
	
	// Heading
	$wp_customize->add_setting(
		'sticky_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'sticky_head',
		array(
			'type' => 'hidden',
			'label' => __('Sticky Header','spintech'),
			'section' => 'sticky_header_set',
		)
	);
	$wp_customize->add_setting( 
		'hide_show_sticky' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_checkbox',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_sticky', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'spintech' ),
			'section'     => 'sticky_header_set',
			'type'        => 'checkbox'
		) 
	);	
}
add_action( 'customize_register', 'spintech_header_settings' );


// Header selective refresh
function spintech_header_partials( $wp_customize ){
	
	// hs_nav_search
	$wp_customize->selective_refresh->add_partial(
		'hs_nav_search', array(
			'selector' => '.main-header .search-button',
			'container_inclusive' => true,
			'render_callback' => 'above_header',
			'fallback_refresh' => true,
		)
	);
	
	// hs_nav_contact
	$wp_customize->selective_refresh->add_partial(
		'hs_nav_contact', array(
			'selector' => '.navigation-wrapper .widget-contact',
			'container_inclusive' => true,
			'render_callback' => 'hdr_navigation',
			'fallback_refresh' => true,
		)
	);
	
	// nav_contact_ttl
	$wp_customize->selective_refresh->add_partial( 'nav_contact_ttl', array(
		'selector'            => '.navigation-wrapper .widget-contact h6',
		'settings'            => 'nav_contact_ttl',
		'render_callback'  => 'spintech_nav_contact_ttl_render_callback',
	) );
	
	// nav_contact_text
	$wp_customize->selective_refresh->add_partial( 'nav_contact_text', array(
		'selector'            => '.navigation-wrapper .widget-contact p',
		'settings'            => 'nav_contact_text',
		'render_callback'  => 'spintech_nav_contact_text_render_callback',
	) );
	
	
	}

add_action( 'customize_register', 'spintech_header_partials' );

// nav_contact_ttl
function spintech_nav_contact_ttl_render_callback() {
	return get_theme_mod( 'nav_contact_ttl' );
}

// nav_contact_text
function spintech_nav_contact_text_render_callback() {
	return get_theme_mod( 'nav_contact_text' );
}