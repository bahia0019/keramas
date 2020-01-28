<?php
/**
 * The template for displaying archive pages
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
			?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				?>

			<article class="grid-fade" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'large' ); ?>
					<header>
						<?php the_title( '<h2>', '</h2>' ); ?>
					</header>
					<div class="view-more">View More</div>
				</a>
			</article>

				<?php
			endwhile;

			the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

		endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
