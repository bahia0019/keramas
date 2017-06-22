<?php
/**
 * Keramas Theme Customizer
 *
 * @package Keramas
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function keramas_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'widgets' );
}
add_action( 'customize_register', 'keramas_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function keramas_customize_preview_js() {
	wp_enqueue_script( 'keramas_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'keramas_customize_preview_js' );







/**
 * Configuration sample for the Kirki Customizer.
 * The function's argument is an array of existing config values
 * The function returns the array with the addition of our own arguments
 * and then that result is used in the kirki/config filter
 *
 * @param $config the configuration array
 *
 * @return array
 */
function kirki_demo_configuration_sample_styling( $config ) {
	return wp_parse_args( array(
		'logo_image'   => get_template_directory_uri() . '/images/header.png',
		'description'  => esc_attr__( 'The theme description.', 'kirki' ),
		'color_accent' => '#0091EA',
		'color_back'   => '#FFFFFF',
	), $config );
}
add_filter( 'kirki/config', 'kirki_demo_configuration_sample_styling' );



/**
 * Add the theme configuration
 */
keramas_Kirki::add_config( 'keramas', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );


/**
 * Add the Color section
 */
keramas_Kirki::add_section( 'site_colors', array(
	'title'      => esc_attr__( 'Site Colors', 'keramas' ),
	'priority'   => 1,
	'capability' => 'edit_theme_options',
) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'site_background_color',
		'label'       => __( 'Site Background Color', 'keramas' ),
		'section'     => 'site_colors',
		'default'     => '#fff',
		'priority'    => 10,
		'output' => array(
				'element'  => 'body',
				'property' => 'background-color',
		),
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'menu_text_color',
		'label'       => __( 'Menu & Button Text Color', 'keramas' ),
		'section'     => 'site_colors',
		'default'     => '#fff',
		'priority'    => 10,
		'output' => array(
			array(
				'element' => '.main-navigation li a',
			),
		),
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'menu_text_hover_color',
		'label'       => __( 'Menu & Button Text Hover Color', 'keramas' ),
		'section'     => 'site_colors',
		'default'     => '#fff',
		'priority'    => 10,
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'text_color',
		'label'       => __( 'Text Color', 'keramas' ),
		'section'     => 'site_colors',
		'default'     => '#999',
		'priority'    => 10,
	) );	

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'site_accent_color',
		'label'       => __( 'Site Accent & Link Color', 'keramas' ),
		'section'     => 'site_colors',
		'default'     => '#ddd',
		'priority'    => 10,
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'site-accent_hover_color',
		'label'       => __( 'Site Accent Hover Color', 'keramas' ),
		'section'     => 'site_colors',
		'default'     => '#ccc',
		'priority'    => 10,
	) );

	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'color',
		'settings'    => 'footer_widget_text_color',
		'label'       => __( 'Footer Widget Text Color', 'keramas' ),
		'section'     => 'site_colors',
		'default'     => '#ccc',
		'priority'    => 10,
	) );








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









/**
 * Add the Home Page Options section
 */
keramas_Kirki::add_section( 'home_page_options', array(
	'title'      => esc_attr__( 'Home Page Options', 'keramas' ),
	'priority'   => 1,
	'capability' => 'edit_theme_options',
) );



	keramas_Kirki::add_field( 'keramas', array(
		'type'      => 'radio',
		'settings'  => 'keramas_logo_text_option',
		'label'     => __( 'Display Logo or Text', 'keramas' ),
		'section'   => 'home_page_options',
		'default'   => 'option-1',
		'priority'  => 2,
		'choices'   => array(
			'option-1' => __( 'Logo', 'keramas' ),
			'option-2' => __( 'Text', 'keramas' )
		)
	) );

		keramas_Kirki::add_field( 'keramas', array(
			'type'      => 'image',
			'settings'  => 'keramas_hero_logo',
			'label'     => __( 'Logo', 'keramas' ),
			'section'   => 'home_page_options',
			'default'   => __( 'Pick your logo', 'keramas' ),
			'priority'  => 3,
			'active_callback'  => array(
				array(
					'setting'  => 'keramas_logo_text_option',
					'operator' => '==',
					'value'    => 'option-1'
				),
			)
		) );

		keramas_Kirki::add_field( 'keramas', array(
			'type'      => 'text',
			'settings'  => 'keramas_hero_text',
			'label'     => __( 'Text', 'keramas' ),
			'section'   => 'home_page_options',
			'default'   => __( 'Add your text here:', 'keramas' ),
			'priority'  => 4,
			'active_callback'  => array(
				array(
					'setting'  => 'keramas_logo_text_option',
					'operator' => '==',
					'value'    => 'option-2'
				),
			)
		) );

		/**
		* Add the Headers Typography control
		*/
		keramas_Kirki::add_field( 'keramas', array(
			'type'        => 'typography',
			'settings'    => 'keramas_hero_text_typography',
			'label'       => esc_attr__( 'Hero Text Typography', 'keramas' ),
			'description' => esc_attr__( 'Select the typography options for your Hero Text.', 'keramas' ),
			'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).', 'keramas' ),
			'section'     => 'home_page_options',
			'priority'    => 10,
			'default'     => array(
				'font-family'    => 'Julius Sans One',
				// 'variant'        => '400',
				'font-size'      => '18px',
				// 'line-height'    => '1.5',
				'color'          => '#fff',
			),
			'output' => array(
				array(
					'media_query' 	=> '@media ( min-width:300px )',
					'element' 		=> '.hero-title',
					'font-size'     => '50%'
				),
				array(
					'media_query' 	=> '@media ( min-width:800px )',
					'element' 		=> '.hero-title',
					'font-size'     => '100%'
				),
			),
		) );




	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'slider',
		'settings'    => 'keramas_logo_width',
		'label'       => esc_attr__( 'Adjust the size of your logo here', 'my_textdomain' ),
		'section'     => 'home_page_options',
		'default'     => 200,
		'choices'     => array(
			'min'  => '100',
			'max'  => '300',
			'step' => '1',
		),
	) );



	keramas_Kirki::add_field( 'keramas', array(
		'type'        => 'image',
		'settings'    => 'keramas_hero_image',
		'label'       => __( 'Hero Image', 'keramas' ),
		'description' => __( 'Select the main, large Hero image.', 'keramas' ),
		'help'        => __( 'This is some extra help text.', 'keramas' ),
		'section'     => 'home_page_options',
		'default'     => '',
		'priority'    => 10,
	) );




/**
 * Add the Image Appearance section
 */
keramas_Kirki::add_section( 'image_appearance', array(
	'title'      => esc_attr__( 'Image Appearance', 'keramas' ),
	'priority'   => 4,
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