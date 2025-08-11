<?php

?>
<section class="section">
	<div class="site-padding sm:py-60 py-68 pb-140">
		<div class="w-layout-blockcontainer max-w-1248 relative w-container">
			<div class="mb-32">
				<div class="w-layout-blockcontainer max-w-500 w-container">
					<h2 class="text-center">What the Supply Chain Community Has to Say</h2>
				</div>
			</div>
			<div>
				<div class="w-layout-blockcontainer max-w-1064 sm:relative w-container">
					<div slider-4="" class="splide">
						<div class="splide__track">
							<div class="splide__list">
								<?php
								$q = new WP_Query([
									'post_type' => 'testimonials',
									'post_status' => 'publish',
									'posts_per_page' => -1,
									'offset' => 0,
									'orderby' => ['menu_order' => 'ASC', 'date' => 'DESC'],
								]);

								if ($q->have_posts()): ?>
									<?php
									while ($q->have_posts()): $q->the_post(); ?>
										<div class="splide__slide">
											<div class="card v2">
												<div class="w-full flex flex-col justify-between gap-52 p-32">
													<div>
														<div class="mb-20">
															<div class="size-40 overflow-hidden rounded-full">
																<img
																	src="<?php
																	the_post_thumbnail_url(); ?>"
																	loading="lazy" alt="" class="image">
															</div>
														</div>
														<div class="text-xs tracking-[1.35px] w-richtext">
															<?php
															echo esc_html(get_post_meta(get_the_ID(), 'qode_testimonial-text', true));
															?>
														</div>
													</div>
													<div>
														<div class="mb-8">
															<div class="font-family-secondary text-sm tracking-[1.52px]">
																<?php
																echo get_post_meta(get_the_ID(), 'qode_testimonial-author', true); ?>
															</div>
														</div>
														<!--<div class="uppercase font-family-secondary text-2xs tracking-[1.01px]">
															<div class="display-inline">Senior Director, Logistics &amp; Manufacturing Solutions
															</div>
															<div class="display-inline">&nbsp;•</div>
															<div class="display-inline">Cisco</div>
														</div>-->
													</div>
												</div>
											</div>
										</div>
									<?php
									endwhile;
									wp_reset_postdata(); ?>
								<?php
								endif; ?>
							</div>
						</div>
						<div class="splide__arrows">
							<div class="splide__arrow splide__arrow--prev">
								<div class="flex w-embed">
									<svg style="background: white;border-radius: 50%;" xmlns="http://www.w3.org/2000/svg" width="42"
									     height="42" viewBox="0 0 42 42" fill="none">
										<path
											d="M21 41C9.95431 41 1 32.0457 1 21C1 9.95431 9.95431 1 21 1C32.0457 1 41 9.95431 41 21C41 32.0457 32.0457 41 21 41Z"
											stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
										<path d="M28.5912 21.4893H13.0004" stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
										<path d="M19.4894 15L13 21.4894L19.4894 27.9787" stroke="#FFAB56" stroke-width="2"
										      stroke-miterlimit="10"></path>
									</svg>
								</div>
							</div>
							<div class="splide__arrow splide__arrow--next">
								<div class="flex w-embed">
									<svg style="background: white;border-radius: 50%;" xmlns="http://www.w3.org/2000/svg" width="42"
									     height="42" viewBox="0 0 42 42" fill="none">
										<path
											d="M21 41C32.0457 41 41 32.0457 41 21C41 9.95431 32.0457 1 21 1C9.95431 1 1 9.95431 1 21C1 32.0457 9.95431 41 21 41Z"
											stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
										<path d="M13 21.4893H28.5908" stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
										<path d="M22.1017 15L28.5911 21.4894L22.1017 27.9787" stroke="#FFAB56" stroke-width="2"
										      stroke-miterlimit="10"></path>
									</svg>
								</div>
							</div>
						</div>
						<div class="display-none w-embed">
							<style>
								[slider-4] .splide__list {
									align-items: center;
								}
								[slider-4] .splide__slide.is-active {
									transform: scale(1.2);
									margin: 7vh 0;
									transition: transform 800ms ease-in-out;
								}
								[slider-4] .splide__slide.is-active .card {
									box-shadow: 0px 5px 25px 0px rgba(49, 63, 74, 0.25);
								}
								[slider-4] .splide__slide {
									width: 315px;
								}
								@media screen and (max-width: 767px) {
									[slider-4] .splide__slide.is-active {
										transform: scale(1);
										margin: 0;
										transition: transform 800ms ease-in-out;
									}
									[slider-4] .splide__slide {
										width: 100%;
									}
									[slider-4] .splide__slide.is-active .card {
										box-shadow: 0 0 0 0 transparent;
									}
								}
							</style>
						</div>
						<div class="display-none w-embed w-script">
							<script>
								document.addEventListener('DOMContentLoaded', function () {
									function slider4() {
										let splideTarget = '[slider-4]';
										let splideTargetEl = document.querySelector(`${splideTarget}`);
										if (!splideTargetEl) return;
										var options = {
											/*suggested options*/
											type: 'loop', //'fade', //"slide", //"loop",
											arrows: true,
											pagination: false,
											/*custom options*/
											rewind: true,
											//fixedWidth: 315,
											//fixedWidth: 373,
											//perMove: 1,
											perPage: 3,
											//gap: 29.94,
											autoplay: false,
											pauseOnHover: true,
											focus: 'center',
											updateOnMove: true,
											trimSpace: true,
											autoWidth: true,
											//autoHeight: true,
											gap: '5%',
											start: 1,
											autoScroll: {
												speed: 1,
											},
											intersection: {
												inView: {
													autoplay: false,
												},
												outView: {
													autoplay: false,
												},
											},
											breakpoints: {
												767: {
													type: 'slide',
													perPage: 1,
													perMove: 1,
													start: 0,
													gap: 50,
													padding: {left: 42, right: 42},
													fixedWidth: '100%',
												},
											},
										};
										var splide = new Splide(`${splideTarget}`, options);
										splide.mount();
									}

									setTimeout(function () {
										slider4();
									}, 500);
								});
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="absolute absolute--tr z--1 pt-164 pr-64">
		<img src="<?php
		echo get_stylesheet_directory_uri() . '/assets/img/misc/double-ring.avif'; ?>"
		     loading="lazy" alt="double ring">
	</div>
	<div class="absolute absolute--bl z--1 pb-88 pl-56">
		<img src="<?php
		echo get_stylesheet_directory_uri() . '/assets/img/misc/double-ring.avif'; ?>"
		     loading="lazy" alt="double ring">
	</div>
</section>
