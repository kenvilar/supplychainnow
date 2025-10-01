<?php

$postID  = get_the_ID();
$section = get_field( 'What_the_Supply_Chain_Community_Has_to_Say_Section', $postID );
$title   = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'What the Supply Chain Community Has to Say' );
?>
<section class="section">
	<div class="site-padding sm:py-60 py-68 pb-140">
		<div class="w-layout-blockcontainer max-w-1248 relative w-container">
			<div class="mb-32">
				<div class="w-layout-blockcontainer max-w-500 w-container">
					<h2 class="text-center"><?= $title; ?></h2>
				</div>
			</div>
			<div>
				<div class="w-layout-blockcontainer max-w-1064 sm:relative w-container">
					<?php
					if ( shortcode_exists( 'home_testimonial_slider' ) ) {
						echo do_shortcode( '[home_testimonial_slider]' );
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="absolute absolute--tr z--1 pt-164 pr-64 select-none">
		<img src="<?php
		echo get_stylesheet_directory_uri() . '/assets/img/misc/double-ring.avif'; ?>"
		     loading="lazy" alt="double ring">
	</div>
	<div class="absolute absolute--bl z--1 pb-88 pl-56 select-none">
		<img src="<?php
		echo get_stylesheet_directory_uri() . '/assets/img/misc/double-ring.avif'; ?>"
		     loading="lazy" alt="double ring">
	</div>
</section>
