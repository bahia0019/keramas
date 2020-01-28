<?php
/**
 * Display a grid of Recent Blog posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Keramas
 */

if ( true === get_theme_mod( 'cta_testimonials', true ) ) : ?>

	<section class="cta-sections recent-testimonials">
		<header class="entry-header">
			<h2>Testimonials</h2>
			<p>What our amazing clients are saying.</p>
		</header>


		<?php
			$the_query = new WP_Query(
				array(
					'post_type'      => 'reviews',
					'post_status'    => 'publish',
					'posts_per_page' => 8,
				)
			);
		?>

		<?php if ( $the_query->have_posts() ) : ?>

			<!-- pagination here -->
			<article class="reviews">
				<!-- the loop -->

				<?php
				while ( $the_query->have_posts() ) :
					$the_query->the_post();
					?>

					<div class="review" href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'medium_square' ); ?>
						<?php the_content(); ?>
						<span class="handwrite">~ <?php the_title(); ?> ~</span>
					</div>

				<?php endwhile; ?>
				<!-- end of the loop -->
			</article>
			<!-- pagination here -->

			<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'keramas' ); ?></p>
		<?php endif; ?>

	</section>

<?php endif; ?>
