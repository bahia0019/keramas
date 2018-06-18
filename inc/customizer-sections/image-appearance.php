<?php

/**
 * Add the Image Appearance section
 */
keramas_Kirki::add_section( 'image_appearance', array(
	'title'      => esc_attr__( 'Image Appearance', 'keramas' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
) );


keramas_Kirki::add_field( 'keramas', array(
	'type'        => 'color',
	'settings'    => 'caption_background_color',
	'label'       => __( 'Caption Background Color', 'keramas' ),
	'section'     => 'image_appearance',
	'default'     => 'rgba( 0,0,0,.8 )',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
) );
