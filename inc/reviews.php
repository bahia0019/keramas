<aside>	
	<header>	
		<h2>Some love from our clients.</h2>
	</header>

	<div class="reviews">

		<?php
		// The Query.
		$the_query = new WP_Query(
			array(
				'post_type'      => 'reviews',
				'posts_per_page' => 3,
			)
		);
		?>

			<?php if ( $the_query->have_posts() ) : ?>

				<?php
				while (
					$the_query->have_posts() ) :
					$the_query->the_post();
					?>

					<div class="review">

								<?php
									the_post_thumbnail(
										'thumbnail', array( 'class' => 'thumb-small' )
									);
								?>
							<div>
								<p class="quote"><em><?php the_field( 'fsc_review_quote' ); ?></em></p>
								<p class="handwrite">~ <?php the_title(); ?></p>
							</div>
					</div>


				<?php endwhile; ?>
				<!-- end of the loop -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'keramas' ); ?></p>
			<?php endif; ?>

	</div>

</aside>
