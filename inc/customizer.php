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
	$wp_customize->remove_section( 'title_tagline' );
	$wp_customize->remove_section( 'static_front_page' );
	// Move CSS to Site Styles panel.
	$wp_customize->remove_section( 'custom_css' );
	$wp_customize->add_section( 'custom_css',
		array(
			'title' => 'Custom CSS',
			'panel' => 'site_styles',
		)
	);
}
add_action( 'customize_register', 'keramas_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function keramas_customize_preview_js() {
	wp_enqueue_script( 'keramas_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20190406', true );
}
add_action( 'customize_preview_init', 'keramas_customize_preview_js' );


/**
 * Add the theme configuration
 */
keramas_Kirki::add_config( 'keramas', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );

/**
 * Call the individual sections.
 */

require get_template_directory() . '/inc/customizer-sections/business-identity.php';
require get_template_directory() . '/inc/customizer-sections/header-options.php';
require get_template_directory() . '/inc/customizer-sections/site-styles.php';
require get_template_directory() . '/inc/customizer-sections/cta-area.php';

if ( is_super_admin() ) {
	require get_template_directory() . '/inc/customizer-sections/custom-js.php';
}


add_action( 'customize_controls_print_styles', function() {
	?>
	<style>
	#customize-controls .customize-info .accordion-section-title{
		height:200px;
		background-image:url('<?php echo get_template_directory_uri() . '/screenshot.png'; ?>');
		background-size:cover;
	}
	.preview-notice{
		display:none;
	}
	#customize-controls .customize-info{
		margin-bottom:0;
	}
	</style>
	<?php
} );
