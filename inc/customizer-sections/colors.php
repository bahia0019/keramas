<?php 

/**
 * Add the Color section
 */
keramas_Kirki::add_section( 'site_colors', array(
	'title'      => esc_attr__( 'Site Colors', 'keramas' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'site_background_color',
		'label'       => __( 'Site Background Color', 'keramas' ),
		'description' => __( 'Change the background color of the site.', 'keramas' ),
		'section'     => 'site_colors',
		'default'     => '#fff',
		'priority'    => 1,
	) );


	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'custom',
		'settings'    => 'divide_1',
		'section'     => 'site_colors',
		'default'     => '<div style="border-bottom:1px solid #999"></div>',
		'priority'    => 1,
	) );	


	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'heading_color',
		'label'       => __( 'Titles & Headings Color', 'keramas' ),
		'description' => __( 'Color for all Blog and Page titles and headings.', 'keramas' ),		
		'section'     => 'site_colors',
		'default'     => '#666',
		'priority'    => 1,
	) );	

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'heading_hover_color',
		'label'       => __( 'Titles & Headings Hover Color', 'keramas' ),
		'description' => __( 'Color for all titles and headings when hovered over by mouse.', 'keramas' ),				
		'section'     => 'site_colors',
		'default'     => '#222',
		'priority'    => 1,
	) );


	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'custom',
		'settings'    => 'divide_2',
		'section'     => 'site_colors',
		'default'     => '<div style="border-bottom:1px solid #999"></div>',
		'priority'    => 1,
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'text_color',
		'label'       => __( 'Main Body Text Color', 'keramas' ),
		'description' => __( 'Color for regular text.', 'keramas' ),				
		'section'     => 'site_colors',
		'default'     => '#666',
		'priority'    => 1,
	) );


	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'custom',
		'settings'    => 'divide_3',
		'section'     => 'site_colors',
		'default'     => '<div style="border-bottom:1px solid #999"></div>',
		'priority'    => 1,
	) );


	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'site_accent_color',
		'label'       => __( 'Site Accent Color', 'keramas' ),
		'description' => __( 'Color for Links, Buttons and Menu Background(if enabled).', 'keramas' ),						
		'section'     => 'site_colors',
		'default'     => '#999',
		'priority'    => 1,
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'site_accent_text_color',
		'label'       => __( 'Site Accent Text Color', 'keramas' ),
		'description' => __( 'Color for Button Text & Menu Text (if menu background is enabled).', 'keramas' ),								
		'section'     => 'site_colors',
		'default'     => '#fff',
		'priority'    => 1,
	) );	

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'site_accent_hover_color',
		'label'       => __( 'Site Accent Hover Color', 'keramas' ),
		'description' => __( 'Color for Links, Buttons when hovered over by mouse.', 'keramas' ),								
		'section'     => 'site_colors',
		'default'     => '#089',
		'priority'    => 1,
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'site_accent_text_hover_color',
		'label'       => __( 'Menu & Button Text Hover Color', 'keramas' ),
		'description' => __( 'Color for Button Text & Menu Text when hovered over by mouse.', 'keramas' ),										
		'section'     => 'site_colors',
		'default'     => '#ddd',
		'priority'    => 1,
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'custom',
		'settings'    => 'divide_4',
		'section'     => 'site_colors',
		'default'     => '<div style="border-bottom:1px solid #999"></div>',
		'priority'    => 1,
	) );
