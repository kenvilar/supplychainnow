<?php

$postId = get_the_ID();
$group  = get_field( 'The_Team_Behind_the_Voice_of_Supply_Chain', $postId );
$title  = esc_html( ! empty( $group['Title'] ) ? $group['Title'] : 'The Team Behind the Voice of Supply Chain' );
$image  = esc_url( ! empty( $group['Image'] ) ? $group['Image'] : get_stylesheet_directory_uri() . '/assets/img/our-team-and-hosts/behind-the-microphone.avif' );
?>
<section class="section">
	<div class="site-padding sm:py-60 py-92">
		<div class="w-layout-blockcontainer max-w-1184 w-container">
			<div class="flex gap-20 justify-between sm:flex-col items-center sm:gap-32">
				<div class="max-w-608 w-full md:max-w-full sm:order-2">
					<div class="mb-36">
						<div class="max-w-460 w-full md:max-w-full">
							<h2 class="font-semibold text-36">
								<?php
								echo $title; ?>
							</h2>
						</div>
					</div>
					<div class="tracking-[1.6px]">
						<?php
						echo wp_kses_post(
							! empty( $group['Description'] )
								? $group['Description']
								: 'We’re only able to accomplish what we do thanks to the contributions of each individual on our team.
<br>
<br>
They bring expertise, creativity, and outside-the-box thinking to help get meaningful stories and valuable
messages out to our audience.'
						);
						?>
					</div>
				</div>
				<div class="max-w-484 w-full md:max-w-full">
					<img loading="lazy"
					     src="<?php
					     echo $image; ?>"
					     alt="behind-the-microphone" class="image">
				</div>
			</div>
		</div>
	</div>
	<div class="absolute absolute--full w-full h-full flex items-center justify-center z--1">
		<img loading="lazy"
		     src="<?php
		     echo get_stylesheet_directory_uri() . '/assets/img/grid/bg-grid.avif'; ?>"
		     alt="bg-grid">
	</div>
</section>
