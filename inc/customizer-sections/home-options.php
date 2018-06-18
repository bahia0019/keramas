<?php 

/**
 * Add the Home Page Options section
 */
keramas_Kirki::add_section( 'home_page_options', array(
	'title'      => esc_attr__( 'Home Page Options', 'keramas' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'      => 'radio',
		'settings'  => 'keramas_hero_option',
		'label'     => __( 'Display Logo or Text', 'keramas' ),
		'section'   => 'home_page_options',
		'default'   => 'option-1',
		'priority'  => 2,
		'choices'   => array(
			'option-1' => __( 'Logo', 'keramas' ),
			'option-2' => __( 'Site Name & Description', 'keramas' )
		)
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'image',
		'settings'    => 'keramas_hero_image',
		'label'       => __( 'Hero Image', 'keramas' ),
		'description' => __( 'Select the main, large Hero image.', 'keramas' ),
		'help'        => __( 'This is some extra help text.', 'keramas' ),
		'section'     => 'home_page_options',
		'default'     => esc_url( get_template_directory_uri() . '/images/header.jpg'),
		'priority'    => 10,
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'slider',
		'settings'    => 'mobile_hero_adjust_X',
		'label'       => esc_attr__( 'Adjust the horizontal position of your Hero Image for mobile devices', 'keramas' ),
		'description' => __( 'By default the image is centered. You can use the slider to adjust the center point on mobile devices.', 'keramas' ),        
        'section'     => 'home_page_options',
		'default'     => 50,
		'choices'     => array(
			'min'  => '0',
			'max'  => '100',
			'step' => '1',
		),
	) );

