<?php 
$menu_logo_option = get_theme_mod( 'keramas_menu_logo_option' );

if ( 'option-0' == $menu_logo_option ) {
	return;
} elseif ( 'option-3' == $menu_logo_option ) {
	require 'wp-content/plugins/flaunt-sites-core/public/partials/flaunt-sites-core-public-social-header.php';
} else {

	echo '<div class="site-branding">';

	echo '<a href="';
	echo esc_html( home_url() );
	echo '" rel="nofollow">';

	switch ( $menu_logo_option ) {
		case 'option-1':
			bloginfo( 'name' );
			break;

		case 'option-2':
			fsc_small_logo( 'menu-logo' );
			break;
	}

	echo '</a>';

	echo '</div>';

}
