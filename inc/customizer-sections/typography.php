<?php

/**
 * Add the typography section
 */
keramas_Kirki::add_section( 'typography', array(
	'title'      => esc_attr__( 'Typography', 'keramas' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
) );

	/**
	* Add the Menu Typography control
	*/
	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'typography',
		'settings'    => 'menu_font',
		'label'       => esc_attr__( 'Menu Typography', 'keramas' ),
		'description' => esc_attr__( 'Select the typography options for your menu.', 'keramas' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
				'font-family'   => 'Cinzel Decorative',
				'font-size'     => '16px'
		),
		'output' => array(
			array(
				'element' 	=> array(
					'.main-navigation li a',
					'button.menu-toggle',
					'.btn',
					'button', 
					'input[type="button"]', 
					'input[type="reset"]', 
					'input[type="submit"]',
				),
			),
		),
	) );


	/**
	* Add the Headers Typography control
	*/
	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'typography',
		'settings'    => 'headers_typography',
		'label'       => esc_attr__( 'Headings Typography', 'keramas' ),
		'description' => esc_attr__( 'Select the typography options for your headings.', 'keramas' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).', 'keramas' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
				'font-family'    => 'Cinzel Decorative',
		),
		'output' => array(
			array(
				'element' => array( 'h1', '.h1', 'h2', '.h2', 'h3', '.h3', 'h4', '.h4', 'h5', '.h5', 'h6', '.h6' ),
			),
		),
	) );



	/**
	* Add the body-typography control
	*/
	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'typography',
		'settings'    => 'body_typography',
		'label'       => esc_attr__( 'Body Typography', 'keramas' ),
		'description' => esc_attr__( 'Select the main typography options for your site.', 'keramas' ),
		'help'        => esc_attr__( 'The typography options you set here apply to all content on your site.', 'keramas' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
				'font-family'    => 'Fauna One',
				'font-size'      => '14px'
		),
		'output' => array(
			array(
				'element' => 'body',
			),
		),
	) );



	/**
	* Add the body-typography control
	*/
	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'typography',
		'settings'    => 'cursive_typography',
		'label'       => esc_attr__( 'Cursive Typography', 'keramas' ),
		'description' => esc_attr__( 'Select the main typography options for your site.', 'keramas' ),
		'help'        => esc_attr__( 'The typography options you set here apply to all content on your site.', 'keramas' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
				'font-family'    => 'Dancing Script',
				'font-size'      => '30px'
		),
		'output' => array(
			array(
				'element' => '.handwrite',
			),
		),
	) );

    