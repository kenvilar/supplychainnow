<?php

$pageID           = get_the_ID();
$section          = get_field( 'Footer_CTA_Section', $pageID );
$title            = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Work With Us' );
$description      = esc_html( ! empty( $section['Description'] ) ? $section['Description'] : 'Reach the right audience as a sponsor or campaign partner and generate high-value leads for your brand.' );
$background_image = esc_url( ! empty( $section['Background_Image'] ) ? $section['Background_Image'] : get_stylesheet_directory_uri() . '/assets/img/home/professional-video-shoot-camera.avif' );
$button_text      = esc_html( ! empty( $section['Button_Text'] ) ? $section['Button_Text'] : 'Learn More About Working with Us' );
$button_link      = esc_url( ! empty( $section['Button_Link'] ) ? $section['Button_Link'] : '/work-with-us' );
?>
<section class="section rounded-t-100 overflow-hidden text-white select-none sm:rounded-t-none">
	<div class="site-padding sm:py-60 py-144">
		<div class="w-layout-blockcontainer max-w-564 text-center w-container">
			<div class="mb-32">
				<h2 class="text-45 sm:text-2xl!"><?= $title; ?></h2>
			</div>
			<div class="mb-32">
				<p class="font-semibold text-lg"><?= $description; ?></p>
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
	</div>
	<div class="absolute absolute--full w-full h-full gradient1 rotate-180 z--2"></div>
	<div class="absolute absolute--full w-full h-full z--1">
		<img
			src="<?= $background_image; ?>"
			loading="lazy" alt="Camera capturing a professional video shoot setup" class="image opacity-15">
	</div>
</section>