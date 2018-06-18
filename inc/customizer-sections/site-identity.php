<?php 

/**
 * Add the Home Page Options section
 */
keramas_Kirki::add_section( 'site_identity', array(
	'title'      => esc_attr__( 'Site Identity', 'keramas' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
) );

    keramas_Kirki::add_field( 'keramas', array(
        'type'        => 'image',
        'settings'    => 'fsc_logo',
        'option_type' => 'option',
        'option_name' => 'fsc_options',
        'label'       => __( 'Logo', 'keramas' ),
        'description' => __( 'Add or edit your logo here', 'keramas' ),
        'section'     => 'site_identity',
        'default'     => '',
        'priority'    => 10,
        'choices'     => array(
            'save_as' => 'array',
        ),

    ) );

    keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'slider',
		'settings'    => 'keramas_logo_width',
		'label'       => esc_attr__( 'Adjust the size of your logo here', 'my_textdomain' ),
		'section'     => 'site_identity',
		'default'     => 200,
		'choices'     => array(
			'min'  => '100',
			'max'  => '300',
			'step' => '1',
		),
	) );


    keramas_Kirki::add_field( 'keramas', array(
        'type'        => 'text',
        'settings'    => 'fsc_sitename',
        'option_type' => 'option',
        'option_name' => 'blogname',
        'label'       => __( 'Site Name', 'keramas' ),
        'description' => __( 'What is your site name?', 'keramas' ),
        'section'     => 'site_identity',
        'default'     => '',
        'priority'    => 10,
    ) );

    //     keramas_Kirki::add_field( 'keramas', array(
    //         'type'      => 'text',
    //         'settings'  => 'keramas_hero_text',
    //         'label'     => __( 'Text', 'keramas' ),
    //         'section'   => 'home_page_options',
    //         'default'   => __( 'Add your text here:', 'keramas' ),
    //         'priority'  => 4,
    //         'active_callback'  => array(
    //             array(
    //                 'setting'  => 'keramas_logo_text_option',
    //                 'operator' => '==',
    //                 'value'    => 'option-2'
    //             ),
    //         )
    //     ) );

    //     /**
    //     * Add the Headers Typography control
    //     */
    //     keramas_Kirki::add_field( 'keramas', array(
    //         'type'        => 'typography',
    //         'settings'    => 'keramas_hero_text_typography',
    //         'label'       => esc_attr__( 'Hero Text Typography', 'keramas' ),
    //         'description' => esc_attr__( 'Select the typography options for your Hero Text.', 'keramas' ),
    //         'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).', 'keramas' ),
    //         'section'     => 'home_page_options',
    //         'priority'    => 10,
    //         'default'     => array(
    //             array(
    //                 'font-family'    => 'Julius Sans One',
    //                 'font-size'      => '18px',
    //                 'color'          => '#fff',
    //             ),
    //         ),
    //         'output' => array(
    //             array(
    //                 'media_query' 	=> '@media ( min-width:300px )',
    //                 'element' 		=> '.hero-title',
    //                 'font-size'     => '50%'
    //             ),
    //             array(
    //                 'media_query' 	=> '@media ( min-width:800px )',
    //                 'element' 		=> '.hero-title',
    //                 'font-size'     => '100%'
    //             ),
    //         ),
    //     ) );




    // keramas_Kirki::add_field( 'keramas', array(
    //     'type'        => 'slider',
    //     'settings'    => 'keramas_logo_width',
    //     'label'       => esc_attr__( 'Adjust the size of your logo here', 'my_textdomain' ),
    //     'section'     => 'home_page_options',
    //     'default'     => 200,
    //     'choices'     => array(
    //         'min'  => '100',
    //         'max'  => '300',
    //         'step' => '1',
    //     ),
    // ) );



    // keramas_Kirki::add_field( 'keramas', array(
    //     'type'        => 'image',
    //     'settings'    => 'keramas_hero_image',
    //     'label'       => __( 'Hero Image', 'keramas' ),
    //     'description' => __( 'Select the main, large Hero image.', 'keramas' ),
    //     'help'        => __( 'This is some extra help text.', 'keramas' ),
    //     'section'     => 'home_page_options',
    //     'default'     => esc_url( get_template_directory_uri() . '/images/header.jpg'),
    //     'priority'    => 10,
    // ) );

    // keramas_Kirki::add_field( 'keramas', array(
    //     'type'        => 'slider',
    //     'settings'    => 'mobile_hero_adjust_X',
    //     'label'       => esc_attr__( 'Adjust the horizotal position of your Hero Image for mobile devices', 'keramas' ),
    //     'section'     => 'home_page_options',
    //     'default'     => 50,
    //     'choices'     => array(
    //         'min'  => '0',
    //         'max'  => '100',
    //         'step' => '1',
    //     ),
    // ) );

