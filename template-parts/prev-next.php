<?php

?>

<div class="post-navigation">
	<div class="prev-next">
	<?php
		$prev_post = get_previous_post();
		if ( ! empty( $prev_post ) ) :
			?>
			<a class href="<?php echo $prev_post->guid ?>">

				<svg class="fs-icons">
					<use xlink:href="#icon-caret-left"></use>
				</svg>

				<?php echo get_the_post_thumbnail( $prev_post, 'thumbnail' ); ?>
				<span>
					<?php echo $prev_post->post_title; ?>
				</span>
			</a>
		<?php endif ?>
	</div>

	<div class="prev-next">
		<?php
		$next_post = get_next_post();
		if ( ! empty( $next_post ) ) :
			?>
			<a href="<?php echo $next_post->guid ?>">

				<span>
					<?php echo $next_post->post_title; ?>
				</span>

				<?php echo get_the_post_thumbnail( $next_post, 'thumbnail' ); ?>

				<svg class="fs-icons">
					<use xlink:href="#icon-caret-right"></use>
				</svg>
			</a>
		<?php endif ?>
	</div>
	

</div>