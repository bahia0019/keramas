<?php 
/**
* Renders styles from the Customizer and outputs it to Head.
* 
* @package keramas
*/
?>

<style type="text/css">

/*--------------------
BASE (MOBILE) SIZE
--------------------*/

	/**
	* PHP flips 0-100 to 100-0 for positioning reasons.
	**/
	<?php  
		$fifty = get_theme_mod( 'mobile_hero_adjust_X');
		$tint_slider = get_theme_mod( 'hero_image_tint_slider' );

		function invert($number){
			$number = 50 - $number + 50;
			echo $number;
		}
	?>

	.jumbotron-image{
		object-position: <?php echo $fifty; ?>%;
	}

	.tint{
		display:<?php echo get_theme_mod( 'hero_image_tint'); ?>;
		background: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0) <?php invert( $tint_slider); ?>%, black 100%); /* FF3.6-15 */
		background: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0) <?php invert( $tint_slider); ?>%, black 100%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom, rgba(0, 0, 0, 0) <?php invert( $tint_slider); ?>%, black 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#000000',GradientType=0 ); /* IE6-9 */
	}


	.site-header {
		background:<?php echo get_theme_mod( 'header_background_color'); ?>;
	}

	.site-header a .fs-icons, .main-navigation li a{
		color:<?php echo get_theme_mod( 'header_item_color' ); ?>;
		fill:<?php echo get_theme_mod( 'header_item_color' ); ?>;
	}
	.site-header a .fs-icons:hover, .main-navigation li a:hover{
		color:<?php echo get_theme_mod( 'header_item_hover_color' ); ?>;
		fill:<?php echo get_theme_mod( 'header_item_hover_color' ); ?>;
	}


	body{
			color:<?php echo get_theme_mod( 'text_color', '#555'  ); ?>; 
			background-color:<?php echo get_theme_mod( 'site_background_color', '#fff' ); ?>
	}  

	.logo{
		width: <?php echo get_theme_mod( 'keramas_logo_width', '200'  ); ?>px;
	}

	.page-title, .page-title a, .entry-title, .entry-title a, .sidebar-title, .sidebar-title a{
		color:<?php echo get_theme_mod( 'heading_color', '#666' ); ?>;
	}

	.page-title a, .entry-title a, .sidebar-title a{
		border-bottom: 1px solid <?php echo get_theme_mod( 'heading_color', '#666' ); ?>;
	}

	.page-title a:hover, .entry-title a:hover, .sidebar-title a:hover {
		color:<?php echo get_theme_mod( 'heading_hover_color', '#222' ); ?>;
		border-bottom: 1px solid <?php echo get_theme_mod( 'heading_hover_color', '#222' ); ?>;
	}    

	button.menu-toggle, a.btn {
		background-color:<?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>;
	}

	.footer, .footer a{
		background-color:
		<?php
		if ( 2 == get_theme_mod( 'footer_color_select' ) ) {
			echo get_theme_mod( 'footer_color' );
		} else {
			echo get_theme_mod( 'site_accent_color' );
		}
		?>
		;
		color:
		<?php
		if ( 2 == get_theme_mod( 'footer_color_select' ) ) {
			echo get_theme_mod( 'footer_text_color' );
		} else {
			echo get_theme_mod( 'site_accent_text_color' );
		}
		?>
		;
	}

	svg.fs-icons, svg.fs-icons a{
		fill:<?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>;
	}

	input {
		border: 1px solid <?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>;
	}

	.search-container{
		border: 1px hidden <?php echo get_theme_mod( 'site_accent_hover_color', '#089' ); ?>;
	}

	a, .social-icon, .swiper-button-prev, .swiper-button-next{
		color:<?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>;
	}
 
	svg.fs-icons:hover, svg.fs-icons a:hover{
		fill:<?php echo get_theme_mod( 'site_accent_hover_color', '#089' ); ?>;
	}

	.btn, .btn:visited, button, input[type="button"], input[type="reset"], input[type="submit"]{
		color:<?php echo get_theme_mod( 'site_accent_text_color', '#fff' ); ?>;
		background-color:<?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>;
	}

	.btn:hover, button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover{
		color:<?php echo get_theme_mod( 'site_accent_text_hover_color', '#ddd' ); ?>;
		background-color:<?php echo get_theme_mod( 'site_accent_hover_color', '#333' ); ?>;
	}

	.footer-widget-area, .footer-widget-area a, .footer ul.footer-widget-area li.footer-widget h2 {
		color:<?php echo get_theme_mod( 'site_accent_text_color', '#fff' ); ?>;
	}

	.footer ul.footer-widget-area li.footer-widget h2{
		border-bottom: 1px solid <?php echo get_theme_mod( 'site_accent_text_color', '#fff' ); ?>;
	}

	.footer-widget-area a:hover{
		opacity: 0.75;
	}


/*--------------------
TABLET & SMALLER LAPTOPS
--------------------*/
@media screen and (min-width: 40em) {

	.site-header{
		position:<?php echo get_theme_mod( 'keramas_menu_behavior_option', ''); ?>;
		<?php if ( 'option-0' == get_theme_mod( 'keramas_menu_logo_option' ) ) { ?>
			justify-content: flex-end;
			<?php
		}
		?>
	}

	.jumbotron-image{
		.background-position-x: 50%;
	}

	figcaption{
		background-color: <?php echo esc_html( get_theme_mod( 'caption_background_color', '' ) ); ?>;
	}

	.recent-post-thumbs{
		grid-template-columns: repeat( <?php echo esc_html( get_theme_mod( 'number_recent_posts_columns', 4 ) ); ?>, 1fr);
	}

} // end of media query

/*--------------------
DESKTOP
--------------------*/
@media screen and (min-width: 64em) {



} // end of media query

/*--------------------
LARGE VIEWING SIZE
--------------------*/

@media only screen and (min-width: 90.063em) {



} // end of media query

/*--------------------
RETINA (2x RESOLUTION DEVICES)
--------------------*/
@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
       only screen and (min--moz-device-pixel-ratio: 1.5),
       only screen and (min-device-pixel-ratio: 1.5) {





} // end of media query


/*--------------------
CUSTOM CSS FROM CUSTOMIZER
--------------------*/

<?php echo get_theme_mod( 'custom_css' ); ?>

</style>

