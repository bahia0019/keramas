<?php


/**
 * Add the Header Options section
 */
keramas_Kirki::add_section( 'header_options', array(
	'title'      => esc_attr__( 'Header Options', 'keramas' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
) );


	/**
	* Toggles Social On and Off.
	*/
	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'toggle',
		'settings'    => 'header_social',
		'label'       => esc_attr__( 'Social Icons On/Off', 'keramas' ),
		'description' => esc_attr__( 'Turn Social Icons on or off', 'keramas' ),
		'section'     => 'header_options',
		'default'     => '1',
		'priority'    => 10,
	) );

	/**
	* Toggles Search On and Off.
	*/
	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'toggle',
		'settings'    => 'header_search',
		'label'       => esc_attr__( 'Search On/Off', 'keramas' ),
		'description' => esc_attr__( 'Turn Search on or off', 'keramas' ),
		'section'     => 'header_options',
		'default'     => '1',
		'priority'    => 10,
	) );

	/**
	* Toggles Client Area On and Off.
	*/
	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'toggle',
		'settings'    => 'header_client_area',
		'label'       => esc_attr__( 'Client Area On/Off', 'keramas' ),
		'description' => esc_attr__( 'Turn Client Area button on or off', 'keramas' ),
		'section'     => 'header_options',
		'default'     => '1',
		'priority'    => 10,
	) );

	/**
	* Client Area Link for photographers that have a proofing site.
	*/
	keramas_Kirki::add_field( 'keramas', array(
		'type'     => 'text',
		'settings' => 'client_area_link',
		'label'    => __( 'Client Area', 'keramas' ),
		'description' => esc_attr__( 'If you have a proofing site, you can add the link to it here. ex: http://zenfolio.com/yourname or http://yourname.zenfolio.com', 'keramas' ),
		'section'  => 'header_options',
		'priority' => 10,
	) );
