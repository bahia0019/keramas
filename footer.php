<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Keramas
 */

?>

	</div><!-- #content -->

	<?php get_template_part( 'footer-meta' ); ?>
	
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

			<p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.
				<?php if ( ! is_admin() ) : ?>
				<a href="/privacy-policy" class="privacy">Privacy Policy</a>
				<?php endif; ?>
			</p>
  			
			<p class="site-credit">
				<?php 

					if ( is_front_page() ){

						printf( esc_html__( 'Website Proudly Provided by: %s.', 'padang-padang' ), '<a href="https://flauntsites.com.com/">Flaunt Sites</a>' ); 
				}else{
						printf( esc_html__( 'Website Proudly Provided by: %s.', 'padang-padang' ), '<a href="https://flauntsites.com.com/" rel="nofollow">Flaunt Sites</a>' );

				}?>
			</p>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
