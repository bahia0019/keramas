<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Keramas
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php get_template_part( 'inc/customizer-styles' ); ?>
<?php require_once 'wp-content/plugins/flaunt-sites-core/public/partials/icons.svg'; ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'keramas' ); ?></a>
	
	<header id="masthead" class="site-header" role="banner">
	
		<div class="site-branding">
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
		</div><!-- .site-branding -->

		<div class="meta-header" >

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'keramas' ); ?></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>

			</nav><!-- #site-navigation -->

			<?php if ( true == get_theme_mod( 'header_client_area', true ) ) : ?>

				<a class="social-icon" target="_blank" href="<?php echo get_theme_mod( 'client_area_link' ); ?>">
					<svg class="fs-icons">
						<use xlink:href="#icon-clients-square"></use>
					</svg>
				</a>

			<?php endif; ?>
			
			<?php if ( true == get_theme_mod( 'header_search', true ) ) : ?>
				<a class="social-icon" href="#">
					<svg class="fs-icons">
						<use xlink:href="#icon-search"></use>
					</svg>
				</a>
			<?php endif; ?>
			
		</div>



	</header><!-- #masthead -->
	
	<div id="trigger2" class="spacer s0"></div>
	<div id="content" class="site-content">
