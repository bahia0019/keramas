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

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<div class="jumbotron" id="hero-home">

				<div class="container" id="hero-identity">

					<span class="hero-title">
					<img src="<?php echo get_theme_mod( 'keramas_hero_logo' ); ?>">
					</span>

				</div>

			</div>


			<div class="container" id="review-container">

				<div class="row">

					<?php 
					// The Query
					$the_query = new WP_Query( 
						array( 
							'post_type' 		=> 'reviews',
							'posts_per_page'    => 3,
					)); ?>

						<?php if ( $the_query->have_posts() ) : ?>

							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


								<div class="review small-4 columns">
									
									<figure class="pull-left">
									
										<?php the_post_thumbnail( 'thumbnail', array(
																				
																	'class' => 'img-circle review-thumb-small' )); 
										
										?>

									</figure>

									<p class="text-center"><em><?php the_field( 'fsc_review_quote' ); ?></em></p>
									<span class="signature pull-right">~ <?php the_title(); ?></span>
								</div>
								<div class="clear-fix"></div>
									
							<?php endwhile; ?>
							<!-- end of the loop -->

							<!-- pagination here -->

							<?php wp_reset_postdata(); ?>

						<?php else: ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>

				</div><!-- /.row -->

			</div><!-- /.container -->


			<div class="row">
				<div class="medium-9 columns centered">

					<div class="medium-6 columns">
							<?php fsc_figure( 'fsc_about_photo', 'medium_large_square', '', '' ); ?>
					</div>	

					<div class="medium-6 columns">
						<h2>About Us</h2>
						<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
						<p><a class="btn" href="#" role="button">Fine out more about us.</a></p>
					</div>
					
					<!--<div >
						<div><?php fsc_figure( 'fsc_about_photo', 'thumbnail', '', 'fig-caption-none' ); ?></div>
						<div><?php fsc_figure( 'fsc_about_photo', 'thumbnail', '', 'fig-caption-none' ); ?></div>
						<div><?php fsc_figure( 'fsc_about_photo', 'thumbnail', '', 'fig-caption-none' ); ?></div>
						<div><div><?php fsc_figure( 'fsc_about_photo_1', 'thumbnail', '', 'fig-caption-none' ); ?></div></div>

					</div>		-->

				</div>	

			</div><!-- /.container -->



			<article>

					<header>
						<h1><?php echo the_field( 'fsc_onepager_general_info_title' ); ?></h1>
					</header>	


						<div class="row">
							<div class="small-12 medium-6 columns">
								<?php fsc_figure( 'fsc_onepager_general_info_photo', 'large', '', '' ); ?>	
							</div>

							<div class="small-12 medium-6 columns">
								<p><?php echo the_field( 'fsc_onepager_general_info_text' ); ?></p>
								<p><a class="btn btn-default" href="#" role="button">Find out more about us.</a></p>
							</div>
						</div>


						<div class="row">

							<div class="small-12 medium-6 columns">
								<h2><?php echo the_field( 'fsc_onepager_areas_served_title' ); ?></h2> 
								<p><?php echo the_field( 'fsc_onepager_areas_served_text' ); ?></p>
								<p><a class="btn btn-default" href="#" role="button">Fine out more about us.</a></p>
							</div>

							<div class="small-12 medium-6 columns">
								<?php fsc_figure( 'fsc_onepager_areas_served_photo', 'Large', '', '' ); ?>	
							</div>

						</div>


						<div class="row">

							<div class="small-12 medium-6 columns">
								<?php fsc_figure( 'fsc_onepager_rates_photo', 'Large', '', '' ); ?>	
							</div>

							<div class="small-12 medium-6 columns">
								<h2><?php echo the_field( 'fsc_onepager_rates_title' ); ?></h2> 
								<p><?php echo the_field( 'fsc_onepager_rates_text' ); ?></p>
								<p><a class="btn btn-default" href="#" role="button">Fine out more about us.</a></p>
							</div>

						</div>





						<div class="row">						
						</div>

					<footer></footer>

			</article><!-- /.container -->




			<script>

					var pinHeader = new ScrollMagic.Controller();

					var scene = new ScrollMagic.Scene({
							
									triggerElement: "#trigger1", 
									})
									
									.setPin(".site-header")
									.addIndicators({name: "2 (duration: 0)"}) // add indicators (requires plugin)
									.addTo(pinHeader);



					var fadeReviews = new ScrollMagic.Controller();
					var tween = TweenMax.staggerFrom( ".review", 1, {autoAlpha:0, y:50}, 0.5 );
					// build scene
					var scene = new ScrollMagic.Scene({

										duration: 400,    // the scene should last for a scroll distance of 500px
										offset: 300        // start this scene after scrolling for 300px

									})
									// .setTween(fade)
									.setTween(tween)
									.addIndicators() // add indicators (requires plugin)
									.addTo(fadeReviews);

									

					var fadeAbout = new ScrollMagic.Controller();
					var tween = TweenMax.staggerFrom( "#home-about", 1, {autoAlpha:0, y:50}, 0.5 );
					// build scene
					var scene = new ScrollMagic.Scene({

										duration: 200,    // the scene should last for a scroll distance of 100px
										offset: 400        // start this scene after scrolling for 50px

									})
									// .setTween(fade)
									.setTween(tween)
									.addIndicators() // add indicators (requires plugin)
									.addTo(fadeAbout);


			</script>





		</main><!-- #main -->
	</div><!-- #primary -->



<?php
get_footer();
