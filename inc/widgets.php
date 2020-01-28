<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */


function fsc_keramas_widgets_init() {

	/**
	 * Site Footer Widgets
	 *
	 */

	register_sidebar( array(
		'name'         => 'Site Footer 1',
		'description'  => 'Widget area for the site footer.',		
		'id'           => 'footer1',
		'before_title' => '<h3>',
		'after_title'  => '</h3>',
	) );

	register_sidebar( array(
		'name'         => 'Site Footer 2',
		'description'  => 'Widget area for the site footer.',
		'id'           => 'footer2',
		'before_title' => '<h3>',
		'after_title'  => '</h3>',
	) );

	register_sidebar( array(
		'name'         => 'Site Footer 3',
		'description'  => 'Widget area for the site footer.',
		'id'           => 'footer3',
		'before_title' => '<h3>',
		'after_title'  => '</h3>',
	) );

	register_sidebar( array(
		'name'         => 'Site Footer 4',
		'description'  => 'Widget area for the site footer.',
		'id'           => 'footer4',
		'before_title' => '<h3>',
		'after_title'  => '</h3>',
	) );


}
add_action( 'widgets_init', 'fsc_keramas_widgets_init' );

