<?php

$pageID      = get_the_ID();
$section     = get_field( 'Book_a_Free_Strategy_Session_Section', $pageID );
$title       = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Book a Free Strategy Session' );
$image       = esc_url( ! empty( $section['Image'] ) ? $section['Image'] : get_stylesheet_directory_uri() . '/assets/img/work-with-us/Book-a-Free-Strategy-Session.avif' );
$subtitle    = esc_html( ! empty( $section['Subtitle'] ) ? $section['Subtitle'] : 'Get started driving leads with interactive, reusable content.' );
$description = ! empty( $section['Description'] ) ? $section['Description'] : 'Ready to get in front of 1M+ Supply Chain Professionals? Book a call today to learn about our packages that include podcasts, livestreams, webinars, and much more.';
$buttonText  = esc_html( ! empty( $section['Button_Text'] ) ? $section['Button_Text'] : 'Get Started' );
$buttonLink  = esc_url( ! empty( $section['Button_Link'] ) ? $section['Button_Link'] : '/contact' );
?>
<div class="overflow-hidden relative rounded-t-100 sm:rounded-t-none">
	<section class="section sm:text-center">
		<div class="site-padding sm:py-60 pt-100">
			<div class="w-layout-blockcontainer max-w-1172 w-container">
				<div class="flex items-center justify-between gap-20 sm:flex-col">
					<div class="max-w-528 w-full md:max-w-full">
						<img
							src="<?= $image; ?>"
							loading="lazy" alt="Book a Free Strategy Session" class="image">
					</div>
					<div class="max-w-548 w-full md:max-w-full">
						<div class="mb-20">
							<div class="max-w-348 w-full md:max-w-full">
								<h2><?= $title; ?></h2>
							</div>
						</div>
						<div class="mb-28">
							<div class="max-w-416 w-full md:max-w-full">
								<div class="font-family-alternate font-semibold text-lg text-secondary">
									<?= $subtitle; ?>
								</div>
							</div>
						</div>
						<div class="mb-36">
							<div class="tracking-[1.6px]">
								<?= $description; ?>
							</div>
						</div>
						<div class="flex sm:justify-center">
							<?php
							echo get_template_part( 'components/ui/btn', null, [
								'text'  => $buttonText,
								'link'  => $buttonLink,
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
			</div>
		</div>
	</section>
	<div class="absolute absolute--full gradient2 opacity-25 z--1 h-half"></div>
</div>
