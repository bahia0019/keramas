<?php
/**
 * Add the Site Style section.
 */

keramas_Kirki::add_panel( 'site_styles', array(
	'title' => esc_html__( 'Site Styles', 'keramas' ),
	'icon'  => 'dashicons-admin-appearance',
) );


/********************************
 * Add the Color section
******************************* */
keramas_Kirki::add_section( 'site_colors', array(
	'title'      => esc_attr__( 'Site Colors', 'keramas' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
	'panel'      => 'site_styles',
	'icon'       => 'dashicons-admin-customizer',
) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'site_background_color',
		'label'       => __( 'Site Background Color', 'keramas' ),
		'description' => __( 'Change the background color of the site.', 'keramas' ),
		'section'     => 'site_colors',
		'default'     => '#fff',
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'     => 'custom',
		'settings' => 'divide_1',
		'section'  => 'site_colors',
		'default'  => '<div style="border-bottom:1px solid #999"></div>',
	));

	keramas_Kirki::add_field( 'keramas', array(
		'type'     => 'color',
		'settings' => 'header_background_color',
		'label'    => __( 'Header Background Color', 'keramas' ),
		'section'  => 'site_colors',
		'default'  => 'rgba(0, 0, 0, 0.8)',
		'choices'  => [
			'alpha' => true,
		],
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'     => 'color',
		'settings' => 'header_item_color',
		'label'    => __( 'Header Item Color', 'keramas' ),
		'section'  => 'site_colors',
		'default'  => '#fff',
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'     => 'color',
		'settings' => 'header_item_hover_color',
		'label'    => __( 'Header Item Hover Color', 'keramas' ),
		'section'  => 'site_colors',
		'default'  => '#999',
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'     => 'custom',
		'settings' => 'divide_2',
		'section'  => 'site_colors',
		'default'  => '<div style="border-bottom:1px solid #999"></div>',
	));


	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'heading_color',
		'label'       => __( 'Titles & Headings Color', 'keramas' ),
		'description' => __( 'Color for all Blog and Page titles and headings.', 'keramas' ),		
		'section'     => 'site_colors',
		'default'     => '#666',
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'heading_hover_color',
		'label'       => __( 'Titles & Headings Hover Color', 'keramas' ),
		'description' => __( 'Color for all titles and headings when hovered over by mouse.', 'keramas' ),				
		'section'     => 'site_colors',
		'default'     => '#222',
	));

	keramas_Kirki::add_field( 'keramas', array(
		'type'     => 'custom',
		'settings' => 'divide_3',
		'section'  => 'site_colors',
		'default'  => '<div style="border-bottom:1px solid #999"></div>',
	));

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'text_color',
		'label'       => __( 'Main Body Text Color', 'keramas' ),
		'description' => __( 'Color for regular text.', 'keramas' ),				
		'section'     => 'site_colors',
		'default'     => '#666',
	));

	keramas_Kirki::add_field( 'keramas', array(
		'type'     => 'custom',
		'settings' => 'divide_4',
		'section'  => 'site_colors',
		'default'  => '<div style="border-bottom:1px solid #999"></div>',
	));

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'site_accent_color',
		'label'       => __( 'Accent Color', 'keramas' ),
		'description' => __( 'Color for Links and Buttons.', 'keramas' ),
		'section'     => 'site_colors',
		'default'     => '#000',
	));

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'site_accent_hover_color',
		'label'       => __( 'Accent Hover Color', 'keramas' ),
		'description' => __( 'Color for Links, Buttons when hovered over by mouse.', 'keramas' ),
		'section'     => 'site_colors',
		'default'     => '#fff',
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'site_accent_text_color',
		'label'       => __( 'Accent Text Color.', 'keramas' ),	
		'description' => __( 'Color for text on buttons.', 'keramas' ),
		'section'     => 'site_colors',
		'default'     => '#fff',
	));

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'site_accent_text_hover_color',
		'label'       => __( 'Accent Text Hover Color', 'keramas' ),
		'description' => __( 'Color for Button Text when hovered.', 'keramas' ),	
		'section'     => 'site_colors',
		'default'     => '#000',
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'     => 'custom',
		'settings' => 'divide_5',
		'section'  => 'site_colors',
		'default'  => '<div style="border-bottom:1px solid #999"></div>',
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'radio',
		'settings'    => 'footer_color_select',
		'label'       => esc_html__( 'Footer Colors', 'keramas' ),
		'description' => __( 'Leave the footer colors that same as Accent color, or change them?', 'keramas' ),	
		'section'     => 'site_colors',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'1' => esc_html__( 'Same as Site Accent Colors.', 'keramas' ),
			'2' => esc_html__( 'Unique Footer colors.', 'keramas' ),
		],
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'            => 'color',
		'settings'        => 'footer_color',
		'label'           => __( 'Footer Color', 'keramas' ),
		'section'         => 'site_colors',
		'default'         => '#000',
		'active_callback' => [
			[
				'setting'  => 'footer_color_select',
				'operator' => '=',
				'value'    => 2,
			],
		],
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'            => 'color',
		'settings'        => 'footer_text_color',
		'label'           => __( 'Footer Text Color', 'keramas' ),
		'description'     => __( 'Color for Button Text & Menu Text when hovered over by mouse.', 'keramas' ),										
		'section'         => 'site_colors',
		'default'         => '#fff',
		'active_callback' => [
			[
				'setting'  => 'footer_color_select',
				'operator' => '=',
				'value'    => 2,
			],
		],
	) );


	/********************************
	 * Add the Typography section
	******************************* */
	keramas_Kirki::add_section( 'typography', array(
		'title'      => esc_attr__( 'Typography', 'keramas' ),
		'priority'   => 10,
		'capability' => 'edit_theme_options',
		'panel'      => 'site_styles',
		'icon'       => 'dashicons-editor-italic',
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'typography',
		'settings'    => 'menu_font',
		'label'       => esc_attr__( 'Menu Typography', 'keramas' ),
		'description' => esc_attr__( 'Select the typography options for your menu.', 'keramas' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
			'font-family' => 'Cormorant Garamond',
			'font-size'   => '16px',
		),
		'output'      => array(
			array(
				'element' => array(
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
	* Headings.
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
			'font-family' => 'Cormorant Garamond',
		),
		'output'      => array(
			array(
				'element' => array( 'h1', '.h1', 'h2', '.h2', 'h3', '.h3', 'h4', '.h4', 'h5', '.h5', 'h6', '.h6' ),
			),
		),
	) );

	/**
	* Body font.
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
			'font-family' => 'Quattrocento Sans',
			'font-size'   => '16px',
		),
		'output'      => array(
			array(
				'element' => 'body',
			),
		),
	) );

	/**
	* Handwritten fonts.
	*/
	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'typography',
		'settings'    => 'handwriting_typography',
		'label'       => esc_attr__( 'Handwriting Typography', 'keramas' ),
		'description' => esc_attr__( 'Select a Handwritten font for client testimonial signatures.', 'keramas' ),
		'help'        => esc_attr__( 'The typography options you set here apply to all content on your site.', 'keramas' ),
		'section'     => 'typography',
		'priority'    => 10,
		'default'     => array(
			'font-family' => 'Dancing Script',
			'font-size'   => '20px',
		),
		'output'      => array(
			array(
				'element' => '.handwrite',
			),
		),
	) );

	/**
	 * Add the Image Appearance section
	 */
	keramas_Kirki::add_section( 'image_appearance', array(
		'title'      => esc_attr__( 'Image Appearance', 'keramas' ),
		'priority'   => 10,
		'capability' => 'edit_theme_options',
		'panel'      => 'site_styles',
		'icon'       => 'dashicons-format-image',
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'     => 'color',
		'settings' => 'caption_background_color',
		'label'    => __( 'Caption Background Color', 'keramas' ),
		'section'  => 'image_appearance',
		'default'  => 'rgba( 0,0,0,.8 )',
		'priority' => 10,
		'choices'  => array(
			'alpha' => true,
		),
	) );
