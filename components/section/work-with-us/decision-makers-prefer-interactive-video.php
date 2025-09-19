<?php

$pageID           = get_the_ID();
$section          = get_field( 'Decision-Makers_Prefer_Interactive_Video_Content_Section', $pageID );
$title            = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : '81% of Decision-Makers Prefer Interactive Video Content' );
$card1Image       = esc_url( ! empty( $section['Card_1_Image'] ) ? $section['Card_1_Image'] : get_stylesheet_directory_uri() . '/assets/img/logo/header-logo.svg' );
$card1Title       = esc_html( ! empty( $section['Card_1_Title'] ) ? $section['Card_1_Title'] : '50%' );
$card1Description = esc_html( ! empty( $section['Card_1_Description'] ) ? $section['Card_1_Description'] : 'Webinar attendance rate over the last 18 months' );
$card2TopTitle    = esc_html( ! empty( $section['Card_2_Top_Title'] ) ? $section['Card_2_Top_Title'] : 'OTHER' );
$card2Title       = esc_html( ! empty( $section['Card_2_Title'] ) ? $section['Card_2_Title'] : '30-35%' );
$card2Description = esc_html( ! empty( $section['Card_2_Description'] ) ? $section['Card_2_Description'] : 'Webinar attendance rate, according to the industry average' );
?>
<section class="section sm:text-center">
	<div class="site-padding sm:py-60 py-76">
		<div class="w-layout-blockcontainer max-w-1252 w-container">
			<div class="flex gap-20 justify-between sm:flex-col items-center sm:gap-40">
				<div class="max-w-568 w-full md:max-w-full">
					<div class="mb-20">
						<h2><?= $title; ?></h2>
					</div>
					<?php
					if ( ! empty( $section['Description'] ) ):
						echo $section['Description'];
					else:
						?>
						<p class="tracking-[1.6px]">
							Supply chain brands are turning to webinars and livestreams to drive 10x more engagement than traditional
							ads, leveraging the forms of content that decision-makers are actively tuning into, week after week.
						</p>
					<?php
					endif;
					?>
				</div>
				<div class="max-w-608 w-full md:max-w-full">
					<div class="flex items-end gap-28 sm:flex-col sm:gap-12">
						<div class="max-w-288 w-full md:max-w-full group transition-all hover:-translate-y-25">
							<div class="text-center rounded-t-24 overflow-hidden relative px-20 pt-48 pb-148 cursor-pointer">
								<div class="w-layout-blockcontainer max-w-200 w-full md:max-w-full w-container">
									<div class="mb-48">
										<div class="w-layout-blockcontainer max-w-124 w-full md:max-w-full w-container">
											<img
												src="<?= $card1Image; ?>"
												loading="lazy" alt="header logo">
										</div>
									</div>
									<div class="mb-12">
										<div class="font-family-secondary text-36 tracking-[3.6px] text-secondary"><?= $card1Title; ?></div>
									</div>
									<div class="mb-28">
										<div class="text-md font-semibold"><?= $card1Description; ?></div>
									</div>
								</div>
								<div class="absolute absolute--full w-full h-full z--1">
									<div class="w-full h-full gradient2 opacity-25 group-hover-gradient5"></div>
								</div>
							</div>
						</div>
						<div class="max-w-288 w-full md:max-w-full group transition-all hover:-translate-y-25">
							<div class="text-center rounded-t-24 overflow-hidden relative px-20 pt-48 pb-112 cursor-pointer">
								<div class="w-layout-blockcontainer max-w-200 w-full md:max-w-full w-container">
									<div class="mb-56">
										<div
											class="font-family-alternate font-medium tracking-[2.4px] text-black text-xl"><?= $card2TopTitle; ?></div>
									</div>
									<div class="mb-12">
										<div class="font-family-secondary text-36 tracking-[3.6px] text-secondary"><?= $card2Title; ?></div>
									</div>
									<div class="mb-28">
										<div class="text-md font-semibold">
											<?= $card2Description; ?>
										</div>
									</div>
								</div>
								<div class="absolute absolute--full w-full h-full z--1">
									<div class="w-full h-full gradient2 opacity-25 group-hover-gradient5"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
