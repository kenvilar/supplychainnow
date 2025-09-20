<?php

$pageID     = get_the_ID();
$section    = get_field( 'Sponsorships_Available_Section', $pageID );
$title      = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : '2026 Sponsorships Available' );
$subtitle   = esc_html( ! empty( $section['Subtitle'] ) ? $section['Subtitle'] : 'Are you interested in sponsoring National Supply Chain Day® in 2026?' );
$buttonText = esc_html( ! empty( $section['Button_Text'] ) ? $section['Button_Text'] : 'Contact Us' );
$buttonLink = esc_url( ! empty( $section['Button_Link'] ) ? $section['Button_Link'] : '/contact' );
?>
<div class="overflow-hidden relative rounded-t-100 sm:rounded-t-none">
	<section class="section">
		<div class="site-padding sm:py-60 py-92">
			<div class="w-layout-blockcontainer max-w-1248 w-container">
				<div class="flex items-center justify-between gap-20 sm:flex-col">
					<div class="max-w-724 w-full md:max-w-full sm:text-center">
						<div class="mb-16">
							<h2><?= $title; ?></h2>
						</div>
						<div class="mb-40">
							<div class="font-semibold text-lg text-secondary">
								<?= $subtitle; ?>
							</div>
						</div>
						<div class="mb-40">
							<div class="max-w-584 w-full md:max-w-full tracking-[1.6px]">
								<?php
								if ( ! empty( $section['Description'] ) ):
									echo $section['Description'];
								else:
									?>
									<p>
										Reach out to Mary Kate Love at nscd@supplychainnow.com
										<br>
										<br>
										Sponsorship levels range from $10k – $50k and include exclusive naming rights, segment naming
										rights, logo on all promotional materials, co-hosting opportunities and more. Be a leader in
										Supply Chain and join our NSCD efforts today!
									</p>
								<?php
								endif;
								?>
							</div>
						</div>
						<div class="flex sm:flex-col">
							<a href="<?= $buttonLink; ?>" class="btn primary w-inline-block">
								<div><?= $buttonText; ?></div>
							</a>
						</div>
					</div>
					<div class="max-w-476 w-full md:max-w-full">
						<div class="grid grid-cols-2 gap-16 sm:grid-cols-1">
							<?php
							if ( ! empty( $section['Images'] ) ) :
								foreach ( $section['Images'] as $idx => $image ) :
									$image = esc_url( $image );
									?>
									<div class="card">
										<div class="flex items-center justify-center h-92">
											<img
												class="image w-auto! fit-contain"
												src="<?= $image; ?>"
												loading="lazy" alt="">
										</div>
									</div>
								<?php
								endforeach;
							else:
								?>
								<div class="card">
									<div class="flex items-center justify-center h-92">
										<img
											src="<?php
											echo get_stylesheet_directory_uri() . '/assets/img/national-supply-chain-day/charlie-pesti.svg'; ?>"
											loading="lazy" alt="">
									</div>
								</div>
								<div class="card">
									<div class="flex items-center justify-center h-92">
										<img
											src="<?php
											echo get_stylesheet_directory_uri() . '/assets/img/national-supply-chain-day/illinois.svg'; ?>"
											loading="lazy" alt="">
									</div>
								</div>
								<div class="card">
									<div class="flex items-center justify-center h-92">
										<img
											src="<?php
											echo get_stylesheet_directory_uri() . '/assets/img/national-supply-chain-day/california-state-university-long-beach.svg'; ?>"
											loading="lazy" alt="">
									</div>
								</div>
								<div class="card">
									<div class="flex items-center justify-center h-92">
										<img
											src="<?php
											echo get_stylesheet_directory_uri() . '/assets/img/national-supply-chain-day/university-of-arkansas.svg'; ?>"
											loading="lazy" alt="">
									</div>
								</div>
								<div class="card">
									<div class="flex items-center justify-center h-92">
										<img
											src="<?php
											echo get_stylesheet_directory_uri() . '/assets/img/national-supply-chain-day/the-university-of-texas-at-dallas.svg'; ?>"
											loading="lazy" alt="">
									</div>
								</div>
								<div class="card">
									<div class="flex items-center justify-center h-92">
										<img
											src="<?php
											echo get_stylesheet_directory_uri() . '/assets/img/national-supply-chain-day/vector-global-logistics.svg'; ?>"
											loading="lazy" alt="">
									</div>
								</div>
							<?php
							endif;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="absolute absolute--full gradient2 opacity-25 z--1"></div>
</div>
