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

		<?php if ( 'option-1' == get_theme_mod( 'keramas_hero_option', true ) ){

			$image 		= get_option( 'fsc_options', '' );
			$image 		= $image[ 'fsc_logo' ];
			$id 		= $image[ 'id' ]; 
			$logo_alt 	= get_bloginfo( 'name' );
			
			if (isset ( $image ) ){ 
				
				echo wp_get_attachment_image( $id, 'medium', false, array( 'class' => 'logo', 'alt' => $logo_alt ) );	
			}

			}elseif ( 'option-2' == get_theme_mod( 'keramas_hero_option', true ) ){ ?>

				<span class="hero-title">
					<h1><?php echo bloginfo( 'name' ); ?></h1>
					<h3><?php echo bloginfo( 'description' ); ?></h3>
				</span>

		<?php } ?>

	</div>

	<div class="jumbotron-image"></div>

</div>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

		<?php get_template_part( 'inc/reviews' );  // Get the reviews ?> 

			<article>
				<header>
					<h2><?php echo get_field( 'fsc_about_section_title' ); ?></h2>
				</header>
				<section id="about-container">
					<?php 
						$about_image = get_field( 'fsc_about_photo' );

						if ( isset ( $about_image ) ){ ?>
												
								<div class="about-photo">
										<?php fsc_figure( 'fsc_about_photo', 'medium_large_square', '', '' ); ?>
								</div>

					<?php }else{
						return;
					} ?>							

					<div class="about-us-text">
						<p><?php echo get_field( 'fsc_about_text' ); ?></p>
						<a class="btn" href="#" role="button">Find out more about us.</a>
					</div>
				</section>
			</article><!-- /.container -->



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
