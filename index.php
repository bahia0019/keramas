<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Keramas
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<?php
		if ( have_posts() ) :
			
			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				
				<?php
			endif; ?>
			

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				if ( is_singular() ) :

					get_template_part( 'template-parts/content', get_post_format() );

				else :
					?>

					<article class="grid-fade" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'large_2_1' ); ?>
							<header>
								<?php the_title( '<h2>', '</h2>' ); ?>
							</header>
							<div class="view-more">View More</div>
						</a>
					</article>

				<?php endif; ?>

				<?php endwhile; ?>

			<?php
			the_posts_navigation();
			else :

				get_template_part( 'template-parts/content', 'none' );

				endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
