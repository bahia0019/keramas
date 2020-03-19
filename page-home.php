<?php

get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">
		<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->
<?php fsc_business_info(); ?>



<?php
get_footer();
