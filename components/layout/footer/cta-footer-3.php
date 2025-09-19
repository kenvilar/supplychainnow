<?php

$pageID           = get_the_ID();
$section          = get_field( 'Footer_CTA_Section', $pageID );
$title            = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Book a Free Strategy Session' );
$sub_title        = esc_html( ! empty( $section['Sub_Title'] ) ? $section['Sub_Title'] : 'Ready to get in front of 1M+ Supply Chain Professionals?' );
$description      = esc_html( ! empty( $section['Description'] ) ? $section['Description'] : 'Book a call today to learn about our packages that include podcasts, livestreams, webinars, and much more.' );
$background_image = esc_url( ! empty( $section['Background_Image'] ) ? $section['Background_Image'] : get_stylesheet_directory_uri() . '/assets/img/footer/professional-video-shoot-camera.avif' );
$button_text      = esc_html( ! empty( $section['Button_Text'] ) ? $section['Button_Text'] : 'Get Started' );
$button_link      = esc_url( ! empty( $section['Button_Link'] ) ? $section['Button_Link'] : '/contact' );
?>
<section class="section rounded-t-100 overflow-hidden text-white select-none">
	<div class="site-padding sm:py-60 py-144">
		<div class="w-layout-blockcontainer max-w-788 text-center w-container">
			<div class="mb-20">
				<h2 class="text-45"><?= $title; ?></h2>
			</div>
			<div class="mb-28">
				<p class="font-family-alternate font-semibold text-lg">
					<?= $sub_title; ?>
				</p>
			</div>
			<div class="mb-52">
				<div class="w-layout-blockcontainer max-w-568 w-container">
					<p class="tracking-[1.6px]">
						<?= $description; ?>
					</p>
				</div>
			</div>
			<div class="flex justify-center">
				<a href="<?= $button_link; ?>" class="btn primary w-inline-block">
					<div><?= $button_text; ?></div>
				</a>
			</div>
		</div>
	</div>
	<div class="absolute absolute--full w-full h-full gradient1 rotate-180 z--2"></div>
	<div class="absolute absolute--full w-full h-full z--1">
		<img
			loading="lazy"
			src="<?= $background_image; ?>"
			alt="Camera capturing a professional video shoot setup" class="image opacity-15"/>
	</div>
</section>
