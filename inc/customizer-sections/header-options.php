<?php

$default_image = get_template_directory_uri() . '/images/header.jpg';

keramas_Kirki::add_panel( 'header_options', array(
	'title'       => esc_html__( 'Header Options', 'keramas' ),
	'description' => esc_html__( 'My panel description', 'keramas' ),
	'icon'        => 'dashicons-menu',
) );

/********************************
 * Add the Menu Options section
 ********************************/
keramas_Kirki::add_section( 'menu_options', array(
	'title'      => esc_attr__( 'Menu Options', 'keramas' ),
	'capability' => 'edit_theme_options',
	'panel'      => 'header_options',
	'icon'       => 'dashicons-menu',
) );

	keramas_Kirki::add_field( 'keramas', [
		'type'     => 'radio',
		'settings' => 'keramas_menu_behavior_option',
		'label'    => __( 'Menu Behavior', 'keramas' ),
		'section'  => 'menu_options',
		'default'  => 'absolute',
		'choices'  => [
			'absolute' => __( 'Scroll with page', 'keramas' ),
			'fixed'    => __( 'Sticky Menu', 'keramas' ),
		],
	] );

	keramas_Kirki::add_field( 'keramas', [
		'type'     => 'custom',
		'settings' => 'separator-1',
		'section'  => 'menu_options',
		'default'  => '<hr>',
	] );


	keramas_Kirki::add_field( 'keramas', [
		'type'     => 'radio',
		'settings' => 'keramas_menu_logo_option',
		'label'    => __( 'Left Half Option', 'keramas' ),
		'section'  => 'menu_options',
		'default'  => 'option-1',
		'choices'  => [
			'option-0' => __( 'None', 'keramas' ),
			'option-1' => __( 'Site Name', 'keramas' ),
			'option-2' => __( 'Logo', 'keramas' ),
			'option-3' => __( 'Social Icons', 'keramas' ),
		],
	] );

	keramas_Kirki::add_field( 'keramas', [
		'type'            => 'image',
		'settings'        => 'fsc_small_logo',
		'option_type'     => 'option',
		'option_name'     => 'fsc_options',
		'label'           => __( 'Small Logo', 'keramas' ),
		'description'     => esc_attr__( 'Use a smaller version of your logo in the menu.', 'keramas' ),
		'section'         => 'menu_options',
		'default'     => '',
		'choices'     => [
			'save_as' => 'id',
		],
		'active_callback' => [
			[
				'setting'  => 'keramas_menu_logo_option',
				'operator' => '==',
				'value'    => 'option-2',
			],
		],
	] );

	keramas_Kirki::add_field( 'keramas', [
		'type'     => 'custom',
		'settings' => 'separator',
		'section'  => 'menu_options',
		'default'  => '<hr>',
	]);

	keramas_Kirki::add_field( 'keramas', [
		'type'     => 'custom',
		'settings' => 'right-half-options',
		'section'  => 'menu_options',
		'default'  => '<span class="customize-control-title">Right Half Options</span>',
	]);

	/**
	* Toggles Social On and Off.
	*/
	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'toggle',
		'settings'    => 'header_social',
		'label'       => esc_attr__( 'Social Icons On/Off', 'keramas' ),
		'description' => esc_attr__( 'Turn Social Icons on or off', 'keramas' ),
		'section'     => 'menu_options',
		'default'     => '1',
	) );

	/**
	* Toggles Search On and Off.
	*/
	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'toggle',
		'settings'    => 'header_search',
		'label'       => esc_attr__( 'Search On/Off', 'keramas' ),
		'description' => esc_attr__( 'Turn Search on or off', 'keramas' ),
		'section'     => 'menu_options',
		'default'     => '1',
	) );

	/**
	* Toggles Client Area On and Off.
	*/
	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'toggle',
		'option_type' => 'option',
		'option_name' => 'fsc_options',
		'settings'    => 'client_area_option',
		'label'       => esc_attr__( 'Client Area On/Off', 'keramas' ),
		'description' => esc_attr__( 'Turn Client Area button on or off', 'keramas' ),
		'section'     => 'menu_options',
		'default'     => '1',
	) );

	/**
	* Client Area Link for photographers that have a proofing site.
	*/
	keramas_Kirki::add_field( 'keramas', array(
		'type'            => 'text',
		'option_type'     => 'option',
		'option_name'     => 'fsc_options',
		'settings'        => 'client_area_url',
		'label'           => __( 'Client Area', 'keramas' ),
		'description'     => esc_attr__( 'If you have a proofing site, you can add the link to it here. ex: http://zenfolio.com/yourname or http://yourname.zenfolio.com', 'keramas' ),
		'section'         => 'menu_options',
		'transport'       => 'postMessage',
		'active_callback' => [
			[
				'setting'  => 'client_area_option',
				'operator' => '=',
				'value'    => true,
			],
		],
	) );


/********************************
 * Add the Hero Options
 ******************************* */

	keramas_Kirki::add_section( 'hero_options', [
		'title'      => esc_attr__( 'Hero Options', 'keramas' ),
		'capability' => 'edit_theme_options',
		'panel'      => 'header_options',
		'icon'       => 'dashicons-format-image',
	]);


	keramas_Kirki::add_field( 'keramas', [
		'type'        => 'image',
		'settings'    => 'keramas_hero_image',
		'label'       => __( 'Default Hero Image', 'keramas' ),
		'description' => __( 'Hero Photo for Pages without Featured Images.', 'keramas' ),
		'section'     => 'hero_options',
		'default'     => $default_image,
		'choices'     => [
			'save_as' => 'id',
		],
	]);

	keramas_Kirki::add_field( 'keramas', [
		'type'        => 'slider',
		'settings'    => 'hero_image_tint_slider',
		'label'       => esc_attr__( 'Tint Slider', 'keramas' ),
		'description' => __( 'Adjust height of Hero Image Tint.', 'keramas' ),
		'section'     => 'hero_options',
		'default'     => 50,
		'choices'     => [
			'min'  => '0',
			'max'  => '100',
			'step' => '1',
		],
	]);

	keramas_Kirki::add_field( 'keramas', [
		'type'        => 'slider',
		'settings'    => 'mobile_hero_adjust_X',
		'label'       => esc_attr__( 'Adjust the horizontal position of your Hero Image for mobile devices', 'keramas' ),
		'description' => __( 'By default the image is centered. You can use the slider to adjust the center point on mobile devices.', 'keramas' ),        
		'section'     => 'hero_options',
		'default'     => 50,
		'choices'     => [
			'min'  => '0',
			'max'  => '100',
			'step' => '1',
		],
	]);

	keramas_Kirki::add_field( 'keramas', [
		'type'     => 'custom',
		'settings' => 'separator-4',
		'section'  => 'hero_options',
		'default'  => '<hr>',
	]);

	keramas_Kirki::add_field( 'keramas', [
		'type'     => 'custom',
		'settings' => 'title',
		'section'  => 'hero_options',
		'default'  => '<h2>Hero Image Overlay</h2>',
	]);

	keramas_Kirki::add_field( 'keramas', [
		'type'     => 'radio',
		'settings' => 'keramas_hero_logo_option',
		'label'    => __( 'Display Logo or Text', 'keramas' ),
		'section'  => 'hero_options',
		'default'  => 'option-4',
		'choices'  => [
			'option-0' => __( 'None', 'keramas' ),
			'option-1' => __( 'Logo', 'keramas' ),
			'option-2' => __( 'Logo & Description', 'keramas' ),
			'option-3' => __( 'Site Name', 'keramas' ),
			'option-4' => __( 'Site Name & Description', 'keramas' ),
		],
	]);
