<!doctype html>
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

		<?php get_template_part( 'template-parts/menu-logo-select' ); ?>

		<div class="meta-header" >

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'keramas' ); ?></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>

			</nav><!-- #site-navigation -->

			<?php if ( true == get_theme_mod( 'header_social', true ) ) {
				require 'wp-content/plugins/flaunt-sites-core/public/partials/flaunt-sites-core-public-social-header.php'; 
			} ?>


			<?php
			$options         = get_option( 'fsc_options', '' );
			$client_area     = $options['client_area_option'];
			$client_area_url = $options['client_area_url'];
			// var_dump($client_area);

			if ( 'true' == $client_area ) :
				?>

				<a class="social-icon" id="clients" target="_blank" href="<?php echo $client_area_url; ?>">
					<svg class="fs-icons">
						<use xlink:href="#icon-user-circle-o"></use>
					</svg>
				</a>

			<?php endif; ?>

			<?php if ( true == get_theme_mod( 'header_search', true ) ) : ?>
				<div class="search-container" href="#">

					<form role="search" id="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
						<label>
							<input type="search" class="search-field" placeholder="Search&#8230;" value="" name="s" title="Search" />
						</label>
					</form>

					<a id="icon-search" href="#">
						<svg class="fs-icons">
							<use xlink:href="#icon-search"></use>
						</svg>
					</a>

				</div>
			<?php endif; ?>

		</div>

	</header><!-- #masthead -->

	<div class="jumbotron" id="hero-home">

		<?php get_template_part( 'inc/hero-logo-select' ); ?>

		<div class="tint"></div>

		<?php
		$hero_image = get_theme_mod( 'keramas_hero_image', '' );
		$id         = $hero_image;
		$logo_alt   = get_bloginfo( 'description' );

		if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'oversize',
				array(
					'class' => 'jumbotron-image',
					'alt'   => $logo_alt,
				)
			);

		} elseif ( isset( $hero_image ) ) {

				echo wp_get_attachment_image( $id, 'oversize', false, array( 'class' => 'jumbotron-image', 'alt' => $logo_alt ) );	

		}
		?>

	</div>

	<div id="content" class="site-content">
