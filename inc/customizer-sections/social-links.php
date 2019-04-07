<?php 

/**
 * Add the typography section
 */
keramas_Kirki::add_section( 'social-links', array(
    'title'         => esc_attr__( 'Social Links', 'keramas' ),
    'description'   => __( 'Add your social media links here.', 'keramas' ),    
	'priority'      => 10,
	'capability'    => 'edit_theme_options',
) );


    keramas_Kirki::add_field( 'keramas', array(
        'type'        => 'text',
        'settings'    => 'fsc_facebook_url',
        'option_type' => 'option',
        'option_name' => 'fsc_options',
        'label'       => __( 'Facebook URL', 'keramas' ),
        'description' => __( 'Include the http:// or https://', 'keramas' ),
        'section'     => 'social-links',
        'default'     => '',
        'priority'    => 10,
    ) );


    keramas_Kirki::add_field( 'keramas', array(
        'type'        => 'text',
        'settings'    => 'fsc_twitter_url',
        'option_type' => 'option',
        'option_name' => 'fsc_options',
        'label'       => __( 'Twitter URL', 'keramas' ),
        'description' => __( 'Include the http:// or https://', 'keramas' ),
        'section'     => 'social-links',
        'default'     => '',
        'priority'    => 10,
    ) );


    keramas_Kirki::add_field( 'keramas', array(
        'type'        => 'text',
        'settings'    => 'fsc_instagram_url',
        'option_type' => 'option',
        'option_name' => 'fsc_options',
        'label'       => __( 'Instagram URL', 'keramas' ),
        'description' => __( 'Include the http:// or https://', 'keramas' ),
        'section'     => 'social-links',
        'default'     => '',
        'priority'    => 10,
    ) );


    keramas_Kirki::add_field( 'keramas', array(
        'type'        => 'text',
        'settings'    => 'fsc_pinterest_url',
        'option_type' => 'option',
        'option_name' => 'fsc_options',
        'label'       => __( 'Pinterest URL', 'keramas' ),
        'description' => __( 'Include the http:// or https://', 'keramas' ),
        'section'     => 'social-links',
        'default'     => '',
        'priority'    => 10,
	) );
	