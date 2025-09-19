<?php

$pageID      = get_the_ID();
$section     = get_field( 'Trusted_by_the_Supply_Chain_Community_Section', $pageID );
$title       = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Trusted by the Supply Chain Community' );
$stat1Number = esc_html( ! empty( $section['Statistics_1_Number'] ) ? $section['Statistics_1_Number'] : '1000+' );
$stat1Title  = esc_html( ! empty( $section['Statistics_1_Title'] ) ? $section['Statistics_1_Title'] : 'Podcast Episodes' );
$stat2Number = esc_html( ! empty( $section['Statistics_2_Number'] ) ? $section['Statistics_2_Number'] : '400K+' );
$stat2Title  = esc_html( ! empty( $section['Statistics_2_Title'] ) ? $section['Statistics_2_Title'] : 'Social Followers' );
$stat3Number = esc_html( ! empty( $section['Statistics_3_Number'] ) ? $section['Statistics_3_Number'] : '7M+' );
$stat3Title  = esc_html( ! empty( $section['Statistics_3_Title'] ) ? $section['Statistics_3_Title'] : 'Downloads' );
?>
<div class="gradient1 rounded-100">
	<section class="section text-white py-96 sm:py-60">
		<div class="relative z-10">
			<div class="mb-72">
				<div class="site-padding">
					<div class="w-layout-blockcontainer max-w-836 text-center w-container">
						<h2><?= $title; ?></h2>
					</div>
				</div>
			</div>
			<div class="mb-72">
				<div slider-2="" class="splide mb-36">
					<div class="splide__track">
						<ul class="splide__list items-center">
							<?php
							if ( ! empty( $section['Image_Slider_1'] ) ):
								foreach ( $section['Image_Slider_1'] as $idx => $image ):
									$image = esc_url( $image );
									?>
									<li class="splide__slide">
										<img
											class="h-57"
											src="<?= $image; ?>"
											loading="lazy" alt="logo">
									</li>
								<?php
								endforeach;
							else:
								?>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/narvan-logo.svg'; ?>"
										loading="lazy" alt="narvan-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/2025-pros-to-know-logo.svg'; ?>"
										loading="lazy" alt="2025-pros-to-know-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/sap-logo.svg'; ?>"
										loading="lazy" alt="sap-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/walmart-logo.svg'; ?>"
										loading="lazy" alt="walmart-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/dhl-logo.svg'; ?>"
										loading="lazy" alt="dhl-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/best-buy-logo.svg'; ?>"
										loading="lazy" alt="best-buy-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/microsoft-logo.svg'; ?>"
										loading="lazy" alt="microsoft logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/ups-logo.svg'; ?>"
										loading="lazy" alt="ups-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/ibm-logo.svg'; ?>"
										loading="lazy" alt="ibm logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/dp-world-logo.svg'; ?>"
										loading="lazy" alt="dp-world-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/kimberly-clark-logo.svg'; ?>"
										loading="lazy" alt="kimberly-clark-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/mckinsey-and-company-logo.svg'; ?>"
										loading="lazy" alt="mckinsey-and-company-logo">
								</li>
							<?php
							endif;
							?>
						</ul>
					</div>
				</div>
				<div class="display-none w-embed w-script">
					<script>
						document.addEventListener("DOMContentLoaded", function () {
							function slider2() {
								let splideTarget = "[slider-2]";
								let splideTargetEl = document.querySelector(`${splideTarget}`);
								if (!splideTargetEl) return;
								var options = {
									/*suggested options*/
									type: "loop", //'fade', //"slide", //"loop",
									arrows: false,
									pagination: false,
									/*custom options*/
									rewind: true,
									fixedWidth: "auto",
									perMove: 1,
									gap: 36,
									// autoplay: true,
									pauseOnHover: true,
									updateOnMove: true,
									lazyLoad: "nearby", //boost performance
									drag: false, //boost performance
									speed: 400, //boost performance
									autoScroll: {
										speed: 0.5
									},
									intersection: {
										inView: {
											autoplay: true
										},
										outView: {
											autoplay: false
										}
									}
									// breakpoints: {
									// 	479: {
									// 		type: 'slide',
									// 		perPage: 1,
									// 		perMove: 1,
									// 		fixedWidth: '100%',
									// 		padding: { left: 0, right: 0 },
									// 	},
									// },
								};
								var splide = new Splide(`${splideTarget}`, options);
								splide.mount(window.splide.Extensions);
							}

							setTimeout(function () {
								slider2();
							}, 500);
						});
					</script>
				</div>
				<div slider-3="" class="splide">
					<div class="splide__track">
						<ul class="splide__list items-center">
							<?php
							if ( ! empty( $section['Image_Slider_2'] ) ):
								foreach ( $section['Image_Slider_2'] as $idx => $image ):
									$image = esc_url( $image );
									?>
									<li class="splide__slide">
										<img
											class="h-57"
											src="<?= $image; ?>"
											loading="lazy" alt="logo">
									</li>
								<?php
								endforeach;
							else:
								?>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/ratelinx-logo.svg'; ?>"
										loading="lazy" alt="ratelinx-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/omp-logo.svg'; ?>"
										loading="lazy" alt="omp-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/lockheed-marting-logo.svg'; ?>"
										loading="lazy" alt="lockheed-marting-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/uber-freight-logo.svg'; ?>"
										loading="lazy" alt="uber-freight-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/clorox-logo.svg'; ?>"
										loading="lazy" alt="clorox-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/gartner-logo.svg'; ?>"
										loading="lazy" alt="gartner-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/johnson-and-johnson-logo.svg'; ?>"
										loading="lazy" alt="johnson-and-johnson-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/georgia-pacific-logo.svg'; ?>"
										loading="lazy" alt="georgia-pacific-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/astrazeneca-logo.svg'; ?>"
										loading="lazy" alt="astrazeneca-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/manhattan-logo.svg'; ?>"
										loading="lazy" alt="manhattan-logo">
								</li>
								<li class="splide__slide">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/scheneider-electric-logo.svg'; ?>"
										loading="lazy" alt="scheneider-electric-logo">
								</li>
							<?php
							endif;
							?>
						</ul>
					</div>
				</div>
				<div class="display-none w-embed w-script">
					<script>
						document.addEventListener("DOMContentLoaded", function () {
							function slider3() {
								let splideTarget = "[slider-3]";
								let splideTargetEl = document.querySelector(`${splideTarget}`);
								if (!splideTargetEl) return;
								var options = {
									/*suggested options*/
									type: "loop", //'fade', //"slide", //"loop",
									arrows: false,
									pagination: false,
									/*custom options*/
									rewind: true,
									fixedWidth: "auto",
									perMove: 1,
									gap: 36,
									// autoplay: true,
									pauseOnHover: true,
									updateOnMove: true,
									lazyLoad: "nearby", //boost performance
									drag: false, //boost performance
									speed: 400, //boost performance
									autoScroll: {
										speed: -0.5
									},
									intersection: {
										inView: {
											autoplay: true
										},
										outView: {
											autoplay: false
										}
									}
									// breakpoints: {
									// 	479: {
									// 		type: 'slide',
									// 		perPage: 1,
									// 		perMove: 1,
									// 		fixedWidth: '100%',
									// 		padding: { left: 0, right: 0 },
									// 	},
									// },
								};
								var splide = new Splide(`${splideTarget}`, options);
								splide.mount(window.splide.Extensions);
							}

							setTimeout(function () {
								slider3();
							}, 500);
						});
					</script>
				</div>
			</div>
			<div>
				<div class="site-padding">
					<div class="w-layout-blockcontainer max-w-664 text-center w-container">
						<div class="flex justify-between gap-20 sm:flex-col">
							<div>
								<div class="font-family-secondary text-36 tracking-[3.6px]"><?= $stat1Number; ?></div>
								<div class="font-semibold text-md"><?= $stat1Title; ?></div>
							</div>
							<div class="w-1 bg-white/25"></div>
							<div>
								<div class="font-family-secondary text-36 tracking-[3.6px]"><?= $stat2Number; ?></div>
								<div class="font-semibold text-md"><?= $stat2Title; ?></div>
							</div>
							<div class="w-1 bg-white/25"></div>
							<div>
								<div class="font-family-secondary text-36 tracking-[3.6px]"><?= $stat3Number; ?></div>
								<div class="font-semibold text-md"><?= $stat3Title; ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
