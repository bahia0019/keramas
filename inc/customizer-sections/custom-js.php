<?php

/**
 * Add the Custom CSS section
 */
keramas_Kirki::add_section( 'custom_js', array(
	'title'      => esc_attr__( 'Custom JS', 'keramas' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
	'icon'       => 'dashicons-editor-code',
) );

	keramas_Kirki::add_field( 'keramas', [
		'type'        => 'code',
		'settings'    => 'custom_js',
		'label'       => __( 'Custom JS', 'keramas' ),
		'description' => __( 'For additional Javascript.', 'keramas' ),
		'section'     => 'custom_js',
		'priority'    => 10,
		'choices'     => [
			'language' => 'js',
			'theme'    => 'monokai',
			'height'   => 250,
		],
	] );
