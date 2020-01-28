<?php if ( true === is_active_sidebar( 'footer1' ) || is_active_sidebar( 'footer2' ) || is_active_sidebar( 'footer3' ) || is_active_sidebar( 'footer4' ) ) : ?>

	<footer class="footer">

		<div class="widget-container">

			<div class="footer-widget">
				<?php dynamic_sidebar( 'footer1' ); ?>
			</div>

			<div class="footer-widget">
				<?php dynamic_sidebar( 'footer2' ); ?>
			</div>

			<div class="footer-widget">
				<?php dynamic_sidebar( 'footer3' ); ?>
			</div>

			<div class="footer-widget">
				<?php dynamic_sidebar( 'footer4' ); ?>
			</div>

		</div>

	</footer>	

<?php endif; ?>
