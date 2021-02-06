<?php
function spintech_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	
	/*=========================================
	Frontpage Panel
	=========================================*/
	$wp_customize->add_panel(
		'spintech_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'spintech' ),
		)
	);
	
	/*=========================================
	Blog Section
	=========================================*/
	$wp_customize->add_section(
		'blog_setting', array(
			'title' => esc_html__( 'Blog Section', 'spintech' ),
			'priority' => 15,
			'panel' => 'spintech_frontpage_sections',
		)
	);
	
	// Blog Settings Section // 
	
	$wp_customize->add_setting(
		'blog_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_text',
			'priority' => 2,
		)
	);

	$wp_customize->add_control(
	'blog_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Settings','spintech'),
			'section' => 'blog_setting',
		)
	);
	// hide/show
	$wp_customize->add_setting( 
		'hs_blog' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_checkbox',
			'transport'         => $selective_refresh,
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hs_blog', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'spintech' ),
			'section'     => 'blog_setting',
			'type'        => 'checkbox',
		) 
	);	
	
	// Blog Header Section // 
	$wp_customize->add_setting(
		'blog_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'blog_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','spintech'),
			'section' => 'blog_setting',
		)
	);
	
	// Blog Title // 
	$wp_customize->add_setting(
    	'blog_title',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'blog_title',
		array(
		    'label'   => __('Title','spintech'),
		    'section' => 'blog_setting',
			'type'           => 'text',
		)  
	);
	
	// Blog Subtitle // 
	$wp_customize->add_setting(
    	'blog_subtitle',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 5,
		)
	);	
	
	$wp_customize->add_control( 
		'blog_subtitle',
		array(
		    'label'   => __('Subtitle','spintech'),
		    'section' => 'blog_setting',
			'type'           => 'textarea',
		)  
	);
	
	// Blog Description // 
	$wp_customize->add_setting(
    	'blog_description',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'spintech_sanitize_text',
			'transport'         => $selective_refresh,
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'blog_description',
		array(
		    'label'   => __('Description','spintech'),
		    'section' => 'blog_setting',
			'type'           => 'textarea',
		)  
	);
}

add_action( 'customize_register', 'spintech_blog_setting' );

// service selective refresh
function spintech_blog_section_partials( $wp_customize ){	

	// hs_blog
	$wp_customize->selective_refresh->add_partial(
		'hs_blog', array(
			'selector' => '#post-section',
			'container_inclusive' => true,
			'render_callback' => 'blog_setting',
			'fallback_refresh' => true,
		)
	);
	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .heading-default .ttl',
		'settings'            => 'blog_title',
		'render_callback'  => 'spintech_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .heading-default h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'spintech_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .heading-default p',
		'settings'            => 'blog_description',
		'render_callback'  => 'spintech_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'spintech_blog_section_partials' );

// blog_title
function spintech_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function spintech_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// blog_description
function spintech_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}