<?php
/**
 * Template Name: One Pager
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Keramas
 */

get_header(); ?>



<div class="jumbotron" id="hero-home">

	<div class="container" id="hero-identity">

		<a href="<?php echo home_url(); ?>" rel="nofollow">

		<?php

			$image    = get_option( 'fsc_options', '' );
			$image    = $image['fsc_logo'];
			$id       = $image;
			$logo_alt = get_bloginfo( 'name' );

		if ( isset( $image ) ) {

				echo wp_get_attachment_image( $id, 'medium', false, array( 'class' => 'logo', 'alt' => $logo_alt ) );	

		} else {
			?>

				<span class="site-name"><?php bloginfo( 'name' ); ?></span>

			<?php } ?>

		</a>

	</div>

	<div class="jumbotron-image"></div>

</div>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">
				
		<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->



<?php
get_footer();
