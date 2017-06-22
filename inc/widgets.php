<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */


function fsc_keramas_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer',
		'before_widget' => '<li class="footer-widget">',
		'after_widget'  => '</div></li>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3><div class="widget-contain">',
	) );
	

}

add_action( 'widgets_init', 'fsc_keramas_widgets_init' );

