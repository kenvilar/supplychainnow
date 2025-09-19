<?php

$pageID      = get_the_ID();
$section     = get_field( 'The_Power_of_Supply_Chain_Podcasts_Section', $pageID );
$topTitle    = esc_html( ! empty( $section['Top_Title'] ) ? $section['Top_Title'] : 'Breaking Through:' );
$title       = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'The Power of Supply Chain Podcasts' );
$description = esc_html( ! empty( $section['Description'] ) ? $section['Description'] : 'Read our latest white paper on the measurable value podcast appearances bring to your marketing efforts.' );
$buttonText  = esc_html( ! empty( $section['Button_Text'] ) ? $section['Button_Text'] : 'Download Now' );
$buttonLink  = esc_url( ! empty( $section['Button_Link'] ) ? $section['Button_Link'] : 'https://now.supplychainnow.com/supply-chain-podcasts' );
$image       = esc_url( ! empty( $section['Image'] ) ? $section['Image'] : get_stylesheet_directory_uri() . '/assets/img/work-with-us/the-power-of-supply-chain-podcasts.avif' );
?>
<section class="section sm:text-center">
	<div class="site-padding sm:py-60 py-76">
		<div class="w-layout-blockcontainer max-w-1252 w-container">
			<div class="flex gap-20 justify-between sm:flex-col items-center sm:gap-40">
				<div class="max-w-568 w-full md:max-w-full sm:order-2">
					<div class="mb-20">
						<div class="font-family-alternate font-semibold text-lg text-secondary"><?= $topTitle; ?></div>
					</div>
					<div class="mb-28">
						<div class="max-w-476 w-full md:max-w-full">
							<h2><?= $title; ?></h2>
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
							'text'       => $buttonText,
							'link'       => $buttonLink,
							'style'      => 'primary',
							'class'      => '',
							'attributes' => [
								'target' => '_blank',
								'rel'    => 'noopener noreferrer',
							],
						] );
						?>
					</div>
				</div>
				<div class="max-w-580 w-full md:max-w-full">
					<div class="card v4">
						<div class="relative z-10 py-60 px-20">
							<div class="w-layout-blockcontainer max-w-352 rounded-12 overflow-hidden w-container">
								<img
									src="<?= $image; ?>"
									loading="lazy" alt="the power of supply chain podcasts">
							</div>
						</div>
						<div class="absolute absolute--full w-full h-full gradient9"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
