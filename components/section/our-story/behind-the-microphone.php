<?php

$pageID      = get_the_ID();
$section     = get_field( 'Behind_the_Microphone_Section', $pageID );
$title       = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Behind the Microphone' );
$button_text = esc_html( ! empty( $section['Button_Text'] ) ? $section['Button_Text'] : 'Meet Our Team' );
$button_link = esc_url( ! empty( $section['Button_Link'] ) ? $section['Button_Link'] : '/our-team-and-hosts' );
$image       = esc_url( ! empty( $section['Image'] ) ? $section['Image'] : get_stylesheet_directory_uri() . '/assets/img/our-story/behind-the-microphone.avif' );
?>
<section class="section">
	<div class="site-padding sm:py-60 py-148">
		<div class="w-layout-blockcontainer max-w-1068 w-container">
			<div class="flex gap-20 justify-between sm:flex-col items-center sm:gap-32">
				<div class="max-w-452 w-full md:max-w-full sm:order-2 text-center">
					<div class="mb-32">
						<h2 class="font-semibold text-36"><?= $title; ?></h2>
					</div>
					<div class="flex justify-center">
						<?php
						echo get_template_part( 'components/ui/btn', null, [
							'text'  => $button_text,
							'link'  => $button_link,
							'style' => 'primary',
							'class' => '',
							/*'attributes' => [
								'target' => '_blank',
								'rel'    => 'noopener noreferrer',
							],*/
						] );
						?>
					</div>
				</div>
				<div class="max-w-492 w-full md:max-w-full">
					<img
						src="<?= $image; ?>"
						loading="lazy" alt="behind-the-microphone" class="image">
				</div>
			</div>
		</div>
	</div>
	<div class="absolute absolute--full w-full h-full flex items-center justify-center z--1">
		<img src="<?php
		echo get_stylesheet_directory_uri() . '/assets/img/grid/bg-grid.avif'; ?>"
		     loading="lazy" alt="bg-grid">
	</div>
</section>
