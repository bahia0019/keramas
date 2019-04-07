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
	$wp_customize->remove_section( 'title_tagline' );
}
add_action( 'customize_register', 'keramas_customize_register' );

/**
 * Add the theme configuration
 */
keramas_Kirki::add_config( 'keramas', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function keramas_customize_preview_js() {
	wp_enqueue_script( 'keramas_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20190406', true );
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
 * Call the individual sections.
 */

require get_template_directory() . '/inc/customizer-sections/site-identity.php';
require get_template_directory() . '/inc/customizer-sections/header-options.php';
require get_template_directory() . '/inc/customizer-sections/colors.php';
require get_template_directory() . '/inc/customizer-sections/typography.php';
require get_template_directory() . '/inc/customizer-sections/home-options.php';
require get_template_directory() . '/inc/customizer-sections/image-appearance.php';
require get_template_directory() . '/inc/customizer-sections/social-links.php';
require get_template_directory() . '/inc/customizer-sections/custom-css.php';