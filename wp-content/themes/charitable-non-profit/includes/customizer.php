<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'charitable_non_profit_logo_resizer',
		'label'       => esc_html__( 'Adjust Logo Size', 'charitable-non-profit' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_enable_logo_text',
		'section'     => 'title_tagline',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'charitable-non-profit' ) . '</h3>',
		'priority'    => 10,
	] );

  	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'charitable_non_profit_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'charitable-non-profit' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'charitable-non-profit' ),
			'off' => esc_html__( 'Disable', 'charitable-non-profit' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'charitable_non_profit_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'charitable-non-profit' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'charitable-non-profit' ),
			'off' => esc_html__( 'Disable', 'charitable-non-profit' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'charitable_non_profit_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'charitable_non_profit_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	// TYPOGRAPHY SETTINGS

	Kirki::add_panel( 'charitable_non_profit_typography_panel', array(
		'priority' => 10,
		'title'    => __( 'Typography', 'charitable-non-profit' ),
	) );

	//Heading 1 Section

	Kirki::add_section( 'charitable_non_profit_h1_typography_setting', array(
		'title'    => __( 'Heading 1', 'charitable-non-profit' ),
		'panel'    => 'charitable_non_profit_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_h1_typography_heading',
		'section'     => 'charitable_non_profit_h1_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 1 Typography', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'charitable_non_profit_h1_typography_font',
		'section'   =>  'charitable_non_profit_h1_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'Quicksand', sans-serif",
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  array('.header-image-box h1'),
				'suffix' => '!important'
			],
		],
	) );

	//Heading 2 Section

	Kirki::add_section( 'charitable_non_profit_h2_typography_setting', array(
		'title'    => __( 'Heading 2', 'charitable-non-profit' ),
		'panel'    => 'charitable_non_profit_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_h2_typography_heading',
		'section'     => 'charitable_non_profit_h2_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 2 Typography', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'charitable_non_profit_h2_typography_font',
		'section'   =>  'charitable_non_profit_h2_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'Quicksand', sans-serif",
			'font-size'       => '',
			'variant'       =>  '700',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h2',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 3 Section

	Kirki::add_section( 'charitable_non_profit_h3_typography_setting', array(
		'title'    => __( 'Heading 3', 'charitable-non-profit' ),
		'panel'    => 'charitable_non_profit_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_h3_typography_heading',
		'section'     => 'charitable_non_profit_h3_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 3 Typography', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'charitable_non_profit_h3_typography_font',
		'section'   =>  'charitable_non_profit_h3_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'Quicksand', sans-serif",
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h3',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 4 Section

	Kirki::add_section( 'charitable_non_profit_h4_typography_setting', array(
		'title'    => __( 'Heading 4', 'charitable-non-profit' ),
		'panel'    => 'charitable_non_profit_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_h4_typography_heading',
		'section'     => 'charitable_non_profit_h4_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 4 Typography', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'charitable_non_profit_h4_typography_font',
		'section'   =>  'charitable_non_profit_h4_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'Quicksand', sans-serif",
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h4',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 5 Section

	Kirki::add_section( 'charitable_non_profit_h5_typography_setting', array(
		'title'    => __( 'Heading 5', 'charitable-non-profit' ),
		'panel'    => 'charitable_non_profit_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_h5_typography_heading',
		'section'     => 'charitable_non_profit_h5_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 5 Typography', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'charitable_non_profit_h5_typography_font',
		'section'   =>  'charitable_non_profit_h5_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'Quicksand', sans-serif",
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h5',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 6 Section

	Kirki::add_section( 'charitable_non_profit_h6_typography_setting', array(
		'title'    => __( 'Heading 6', 'charitable-non-profit' ),
		'panel'    => 'charitable_non_profit_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_h6_typography_heading',
		'section'     => 'charitable_non_profit_h6_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 6 Typography', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'charitable_non_profit_h6_typography_font',
		'section'   =>  'charitable_non_profit_h6_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'Quicksand', sans-serif",
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h6',
				'suffix' => '!important'
			],
		],
	) );

	//body Typography

	Kirki::add_section( 'charitable_non_profit_body_typography_setting', array(
		'title'    => __( 'Content Typography', 'charitable-non-profit' ),
		'panel'    => 'charitable_non_profit_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_body_typography_heading',
		'section'     => 'charitable_non_profit_body_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content  Typography', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'charitable_non_profit_body_typography_font',
		'section'   =>  'charitable_non_profit_body_typography_setting',
		'default'   =>  [
			'font-family'   =>  "'Mulish', sans-serif",
			'variant'       =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   => 'body',
				'suffix' => '!important'
			],
		],
	) ); 

	// Theme Options Panel
	Kirki::add_panel( 'charitable_non_profit_theme_options_panel', array(
		'priority' => 10,
		'title'    => __( 'Theme Options', 'charitable-non-profit' ),
	) );

	// HEADER SECTION

	Kirki::add_section( 'charitable_non_profit_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'charitable-non-profit' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'charitable-non-profit' ),
	    'panel'    => 'charitable_non_profit_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'charitable_non_profit_sticky_header',
		'label'       => esc_html__( 'Enable/Disable Sticky Header', 'charitable-non-profit' ),
		'section'     => 'charitable_non_profit_section_header',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'charitable-non-profit' ),
			'off' => esc_html__( 'Disable', 'charitable-non-profit' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_menu_size_heading',
		'section'     => 'charitable_non_profit_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Font Size(px)', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'charitable_non_profit_menu_size',
		'label'       => __( 'Enter a value in pixels. Example:20px', 'charitable-non-profit' ),
		'type'        => 'text',
		'section'     => 'charitable_non_profit_section_header',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'font-size',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_menu_text_transform_heading',
		'section'     => 'charitable_non_profit_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Text Transform', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'charitable_non_profit_menu_text_transform',
		'section'     => 'charitable_non_profit_section_header',
		'default'     => 'capitalize',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'charitable-non-profit' ),
			'uppercase' => esc_html__( 'Uppercase', 'charitable-non-profit' ),
			'lowercase' => esc_html__( 'Lowercase', 'charitable-non-profit' ),
			'capitalize' => esc_html__( 'Capitalize', 'charitable-non-profit' ),
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => ' text-transform',
			),
		),
	) );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_header_adv_heading',
		'section'     => 'charitable_non_profit_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Advertisement', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Title', 'charitable-non-profit' ),
		'settings' => 'charitable_non_profit_elementor_header_adv_tittle',
		'section'  => 'charitable_non_profit_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Text', 'charitable-non-profit' ),
		'settings' => 'charitable_non_profit_elementor_header_adv_text',
		'section'  => 'charitable_non_profit_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_enable_location_heading',
		'section'     => 'charitable_non_profit_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Location', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Text', 'charitable-non-profit' ),
		'settings' => 'charitable_non_profit_header_location_text',
		'section'  => 'charitable_non_profit_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Location Address', 'charitable-non-profit' ),
		'settings' => 'charitable_non_profit_header_location',
		'section'  => 'charitable_non_profit_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_header_phone_number_heading',
		'section'     => 'charitable_non_profit_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Text', 'charitable-non-profit' ),
		'settings' => 'charitable_non_profit_header_phone_number_text',
		'section'  => 'charitable_non_profit_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Phone Number', 'charitable-non-profit' ),
		'settings' => 'charitable_non_profit_header_phone_number',
		'section'  => 'charitable_non_profit_section_header',
		'default'  => '',
		'sanitize_callback' => 'charitable_non_profit_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_header_email_heading',
		'section'     => 'charitable_non_profit_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Email', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Text', 'charitable-non-profit' ),
		'settings' => 'charitable_non_profit_header_email_text',
		'section'  => 'charitable_non_profit_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Email Address', 'charitable-non-profit' ),
		'settings' => 'charitable_non_profit_header_email',
		'section'  => 'charitable_non_profit_section_header',
		'default'  => '',
		'sanitize_callback' => 'sanitize_email',
	] );
	

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_enable_button_heading',
		'section'     => 'charitable_non_profit_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Button', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Button Text', 'charitable-non-profit' ),
		'settings' => 'charitable_non_profit_header_button_text',
		'section'  => 'charitable_non_profit_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    =>  esc_html__( 'Button Link', 'charitable-non-profit' ),
		'settings' => 'charitable_non_profit_header_button_url',
		'section'  => 'charitable_non_profit_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_enable_socail_link',
		'section'     => 'charitable_non_profit_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'charitable_non_profit_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'charitable-non-profit' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'charitable-non-profit' ),
		'settings'     => 'charitable_non_profit_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'charitable-non-profit' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'charitable-non-profit' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'charitable-non-profit' ),
				'description' => esc_html__( 'Add the social icon url here.', 'charitable-non-profit' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

	// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'charitable_non_profit_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'charitable-non-profit' ),
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'charitable-non-profit' ),
		'panel'    => 'woocommerce',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'charitable_non_profit_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'charitable-non-profit' ),
		'section'     => 'charitable_non_profit_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'charitable-non-profit' ),
		'settings'    => 'charitable_non_profit_shop_page_layout',
		'section'     => 'charitable_non_profit_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'charitable-non-profit' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'charitable-non-profit' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'charitable_non_profit_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]

	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'charitable-non-profit' ),
		'settings'    => 'charitable_non_profit_products_per_row',
		'section'     => 'charitable_non_profit_woocommerce_settings',
		'default'     => '3',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'charitable-non-profit' ),
		'settings'    => 'charitable_non_profit_products_per_page',
		'section'     => 'charitable_non_profit_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'charitable_non_profit_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'charitable-non-profit' ),
		'section'     => 'charitable_non_profit_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'charitable-non-profit' ),
		'settings'    => 'charitable_non_profit_single_product_sidebar_layout',
		'section'     => 'charitable_non_profit_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'charitable-non-profit' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'charitable-non-profit' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'charitable_non_profit_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_products_button_border_radius_heading',
		'section'     => 'charitable_non_profit_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Products Button Border Radius', 'charitable-non-profit' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'charitable_non_profit_products_button_border_radius',
		'section'     => 'charitable_non_profit_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
		'choices'  => [
					'min'  => 1,
					'max'  => 50,
					'step' => 1,
				],
		'output' => array(
			array(
				'element'  => array('.woocommerce ul.products li.product .button',' a.checkout-button.button.alt.wc-forward','.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button','.woocommerce input.button','.woocommerce #respond input#submit.alt','.woocommerce button.button.alt','.woocommerce input.button.alt'),
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_sale_badge_position_heading',
		'section'     => 'charitable_non_profit_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Badge Position', 'charitable-non-profit' ) . '</h3>',
		'priority'    => 10,
	] );


	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'charitable_non_profit_sale_badge_position',
		'section'     => 'charitable_non_profit_woocommerce_settings',
		'default'     => 'right',
		'choices'     => [
			'right' => esc_html__( 'Right', 'charitable-non-profit' ),
			'left' => esc_html__( 'Left', 'charitable-non-profit' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_products_sale_font_size_heading',
		'section'     => 'charitable_non_profit_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Font Size', 'charitable-non-profit' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'text',
		'settings'    => 'charitable_non_profit_products_sale_font_size',
		'section'     => 'charitable_non_profit_woocommerce_settings',
		'priority'    => 10,
		'output' => array(
			array(
				'element'  => array('.woocommerce span.onsale','.woocommerce ul.products li.product .onsale'),
				'property' => 'font-size',
				'units' => 'px',
			),
		),
	] );
	
	//ADDITIONAL SETTINGS

	Kirki::add_section( 'charitable_non_profit_additional_setting', array(
		'title'          => esc_html__( 'Additional Settings', 'charitable-non-profit' ),
		'description'    => esc_html__( 'Additional Settings of themes', 'charitable-non-profit' ),
		'panel'    => 'charitable_non_profit_theme_options_panel',
		'priority'       => 10,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'charitable_non_profit_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'charitable-non-profit' ),
		'section'     => 'charitable_non_profit_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );
 
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'charitable_non_profit_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'charitable-non-profit' ),
		'section'     => 'charitable_non_profit_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_single_page_layout_heading',
		'section'     => 'charitable_non_profit_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Page Layout', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'charitable_non_profit_single_page_layout',
		'section'     => 'charitable_non_profit_additional_setting',
		'default'     => 'One Column',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'charitable-non-profit' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'charitable-non-profit' ),
			'One Column' => esc_html__( 'One Column', 'charitable-non-profit' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_header_background_attachment_heading',
		'section'     => 'charitable_non_profit_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'charitable_non_profit_header_background_attachment',
		'section'     => 'charitable_non_profit_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'charitable-non-profit' ),
			'fixed' => esc_html__( 'Fixed', 'charitable-non-profit' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	 ) );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_header_overlay_heading',
		'section'     => 'charitable_non_profit_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Overlay', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'charitable_non_profit_header_overlay_setting',
		'label'       => __( 'Overlay Color', 'charitable-non-profit' ),
		'type'        => 'color',
		'section'     => 'charitable_non_profit_additional_setting',
		'transport' => 'auto',
		'default'     => '#00000000',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.header-image-box:before',
				'property' => 'background',
			),
		),
	) );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'charitable_non_profit_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'charitable-non-profit' ),
		'section'     => 'charitable_non_profit_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'charitable_non_profit_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'charitable-non-profit' ),
		'section'     => 'charitable_non_profit_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'charitable_non_profit_blog_post', array(
		'title'          => esc_html__( 'Post Settings', 'charitable-non-profit' ),
		'description'    => esc_html__( 'Here you can add post information.', 'charitable-non-profit' ),
		'panel'    => 'charitable_non_profit_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_post_layout_heading',
		'section'     => 'charitable_non_profit_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Layout', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'charitable_non_profit_post_layout',
		'section'     => 'charitable_non_profit_blog_post',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'charitable-non-profit' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'charitable-non-profit' ),
			'One Column' => esc_html__( 'One Column', 'charitable-non-profit' ),
			'Three Columns' => esc_html__( 'Three Columns', 'charitable-non-profit' ),
			'Four Columns' => esc_html__( 'Four Columns', 'charitable-non-profit' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'charitable_non_profit_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'charitable-non-profit' ),
		'section'     => 'charitable_non_profit_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'charitable_non_profit_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'charitable-non-profit' ),
		'section'     => 'charitable_non_profit_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'charitable_non_profit_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'charitable-non-profit' ),
		'section'     => 'charitable_non_profit_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'charitable_non_profit_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'charitable-non-profit' ),
		'section'     => 'charitable_non_profit_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_length_setting_heading',
		'section'     => 'charitable_non_profit_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'charitable_non_profit_length_setting',
		'section'     => 'charitable_non_profit_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
		 			'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'charitable-non-profit' ),
		'settings'    => 'charitable_non_profit_single_post_tag',
		'section'     => 'charitable_non_profit_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'charitable-non-profit' ),
		'settings'    => 'charitable_non_profit_single_post_category',
		'section'     => 'charitable_non_profit_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'charitable_non_profit_post_comment_show_hide',
		'label'       => esc_html__( 'Show / Hide Comment Box', 'charitable-non-profit' ),
		'section'     => 'charitable_non_profit_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'charitable_non_profit_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'charitable-non-profit' ),
		'section'     => 'charitable_non_profit_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_single_post_radius',
		'section'     => 'charitable_non_profit_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'charitable-non-profit' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'charitable_non_profit_single_post_border_radius',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'charitable-non-profit' ),
		'type'        => 'text',
		'section'     => 'charitable_non_profit_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );

	// FOOTER SECTION

	Kirki::add_section( 'charitable_non_profit_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'charitable-non-profit' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'charitable-non-profit' ),
        'panel'    => 'charitable_non_profit_theme_options_panel',
		'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_footer_text_heading',
		'section'     => 'charitable_non_profit_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'charitable-non-profit' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'charitable_non_profit_footer_text',
		'section'  => 'charitable_non_profit_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_footer_enable_heading',
		'section'     => 'charitable_non_profit_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'charitable-non-profit' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'charitable_non_profit_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'charitable-non-profit' ),
		'section'     => 'charitable_non_profit_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'charitable-non-profit' ),
			'off' => esc_html__( 'Disable', 'charitable-non-profit' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'charitable_non_profit_footer_background_widget_heading',
		'section'     => 'charitable_non_profit_footer_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Background', 'charitable-non-profit' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id',
	[
		'settings'    => 'charitable_non_profit_footer_background_widget',
		'type'        => 'background',
		'section'     => 'charitable_non_profit_footer_section',
		'default'     => [
			'background-color'      => 'rgba(18,18,18,1)',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.footer-widget',
			],
		],
	]);
}
