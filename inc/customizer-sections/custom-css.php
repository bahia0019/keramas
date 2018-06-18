<?php


/**
 * Add the Custom CSS section
 */
keramas_Kirki::add_section( 'custom_css', array(
	'title'      => esc_attr__( 'Custom CSS', 'keramas' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
) );

    keramas_Kirki::add_field( 'keramas', array(
        'type'          => 'code',
        'settings'      => 'custom_css',
        'label'         => __( 'Custom CSS', 'keramas' ),
        'description'   => __( 'Know how to code CSS to make things pretty? Add your custom CSS here.', 'keramas' ),
        'section'       => 'custom_css',
        'priority'      => 10,
        'choices'       => array(
            'language'  => 'css',
            'theme'     => 'monokai',
            'height'    => 250,
        ),
    ) );
