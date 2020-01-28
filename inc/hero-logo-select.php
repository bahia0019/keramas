<?php 
$hero_logo_option = get_theme_mod( 'keramas_hero_logo_option' );

if ( 'option-0' == $hero_logo_option ) {
	return;
} else {

	echo '<div class="container fade" id="hero-identity">';
	echo '<a href="';
	echo esc_html( home_url() );
	echo '" rel="nofollow">';

	switch ( $hero_logo_option ) {
		case 'option-1':
			fsc_logo( 'logo' );
			break;
		case 'option-2':
			fsc_logo( 'logo' );
			echo '<span>';
			bloginfo( 'description' );
			echo '</span>';
			break;
		case 'option-3':
			echo '<span class="site-name">';
			bloginfo( 'name' );
			echo '</span>';
			break;
		case 'option-4':
			echo '<span class="site-name">';
			bloginfo( 'name' );
			echo '</span>';

			echo '<span>';
			bloginfo( 'description' );
			echo '</span>';
			break;
	}

	echo '</a>';
	echo '</div>';
}
