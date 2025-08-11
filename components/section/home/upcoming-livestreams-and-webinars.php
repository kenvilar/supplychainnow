<?php

?>
<div class="gradient1 rounded-100">
	<section class="section text-white">
		<div class="site-padding sm:py-60 py-88">
			<div class="w-layout-blockcontainer max-w-1372 relative w-container">
				<div class="mb-52">
					<div class="mb-20">
						<h2 class="text-center">Upcoming Livestreams &amp; Webinars</h2>
					</div>
					<div class="w-layout-blockcontainer max-w-136 w-full h-1 relative bg-cargogrey/25 w-container bg-white/25">
						<div class="absolute absolute--r flex items-center pr-32">
							<div blinking-dot="" class="size-8 rounded-8 bg-primary"></div>
						</div>
					</div>
				</div>
				<div class="mb-56">
					<div class="max-w-1248 mx-auto">
						<div slider-3="" class="splide">
							<div class="splide__track">
								<div class="splide__list">
									<?php
									$q = new WP_Query([
										'post_type' => 'page',
										'post_status' => 'publish',
										'posts_per_page' => 15,
										'offset' => 0,
										'meta_query' => [
											'relation' => 'AND',
											[
												'relation' => 'OR',
												[
													'key' => '_wp_page_template',
													'value' => 'webinar-detail.php',
													'compare' => '=',
												],
												[
													'key' => '_wp_page_template',
													'value' => 'livestream-detail.php',
													'compare' => '=',
												],
											],
											[
												'key' => 'select_media_type',
												'value' => ['livestream', 'webinar'],
												'compare' => 'IN',
												'type' => 'CHAR',
											],
										],
										'orderby' => ['menu_order' => 'ASC', 'date' => 'DESC'],
									]);

									if ($q->have_posts()): ?>
										<?php
										while ($q->have_posts()): $q->the_post(); ?>
											<div class="splide__slide group">
												<a href="<?php
												the_permalink(); ?>" class="relative w-full group">
													<div class="relative flex flex-col justify-between gap-20 h-full">
														<div class="w-full">
															<div class="mb-28">
																<div class="overflow-hidden rounded-12 relative h-222 bg-cargogrey">
																	<img
																		src="<?php
																		echo get_the_post_thumbnail()
																			? the_post_thumbnail_url()
																			: get_stylesheet_directory_uri(
																			) . '/assets/img/misc/default-card-img-thumbnail.avif' ?>"
																		loading="lazy" alt="" class="image relative opacity-40">
																	<?php
																	$terms = get_the_terms(get_the_ID(), 'tags');
																	if (!is_wp_error($terms) && !empty($terms)) {
																		$first = array_values($terms)[0];
																		?>
																		<div class="absolute absolute--tl p-24 flex items-center justify-center">
																			<div class="relative rounded-full overflow-hidden py-4 px-8">
																				<div
																					class="relative font-semibold uppercase text-2xs text--white lh-full z-10">
																					<?php
																					echo $first->name; ?>
																				</div>
																				<?php
																				echo get_field(
																					'select_media_type'
																				) == 'livestream'
																					? '<div class="absolute absolute--full bg-primary"></div>'
																					: '';
																				?>
																				<?php
																				echo get_field(
																					'select_media_type'
																				) == 'podcast'
																					? '<div class="absolute absolute--full bg-secondary"></div>'
																					: '';
																				?>
																				<?php
																				echo get_field(
																					'select_media_type'
																				) == 'webinar'
																					? '<div class="absolute absolute--full bg-tertiary"></div>'
																					: '';
																				?>
																			</div>
																		</div>
																		<?php
																	}
																	?>
																	<div
																		class="absolute absolute--full flex items-center justify-center translate-y-220 group-hover:translate-y-0 transition-all duration-500">
																		<?php
																		if (get_field('select_media_type') == 'livestream') {
																			?>
																			<img
																				src="<?php
																				echo get_stylesheet_directory_uri(
																					) . '/assets/img/icons/play-button-livestream.avif'; ?>"
																				loading="lazy" alt="play-button-livestream">
																			<?php
																		}
																		?>
																		<?php
																		if (get_field('select_media_type') == 'podcast') {
																			?>
																			<img
																				src="<?php
																				echo get_stylesheet_directory_uri(
																					) . '/assets/img/icons/play-button-podcast.avif'; ?>"
																				loading="lazy" alt="play-button-podcast">
																			<?php
																		}
																		?>
																		<?php
																		if (get_field('select_media_type') == 'webinar') {
																			?>
																			<img
																				src="<?php
																				echo get_stylesheet_directory_uri(
																					) . '/assets/img/icons/play-button-webinar.avif'; ?>"
																				loading="lazy" alt="play-button-webinar">
																			<?php
																		}
																		?>
																	</div>
																</div>
															</div>
															<div class="mb-12">
																<div class="flex items-center gap-32 sm:flex-wrap sm:gap-8">
																	<div class="flex items-center gap-8">
																		<div class="flex items-center">
																			<?php
																			if (get_field('select_media_type') == 'livestream') {
																				?>
																				<img
																					src="<?php
																					echo get_stylesheet_directory_uri(
																						) . '/assets/img/icons/livestream-card-icon.svg'; ?>"
																					loading="lazy" alt="livestream-music">
																				<?php
																			}
																			?>
																			<?php
																			if (get_field('select_media_type') == 'podcast') {
																				?>
																				<img
																					class="size-24"
																					src="<?php
																					echo get_stylesheet_directory_uri(
																						) . '/assets/img/icons/podcast-card-icon.png'; ?>"
																					loading="lazy" alt="podcast-blue-microphone">
																				<?php
																			}
																			?>
																			<?php
																			if (get_field('select_media_type') == 'webinar') {
																				?>
																				<img
																					class="size-24"
																					src="<?php
																					echo get_stylesheet_directory_uri(
																						) . '/assets/img/icons/webinar-card-icon.png'; ?>"
																					loading="lazy" alt="webinar-person">
																				<?php
																			}
																			?>
																		</div>
																		<?php
																		if (get_field('select_media_type')) {
																			?>
																			<div class="font-family-secondary text-sm capitalize">
																				<?php
																				echo the_field('select_media_type'); ?>
																			</div>
																			<?php
																		}
																		?>
																	</div>
																	<div class="flex items-center gap-8 text-sm font-light font-family-secondary">
																		<div><?php
																			the_date(); ?></div>
																		<!--<div>•</div>
																	<div>6 min 25 sec</div>-->
																	</div>
																</div>
															</div>
															<h3 class="font-semibold text-lg" scn-text-limit="2"><?php
																the_title(); ?></h3>
														</div>
														<div class="w-full tracking-[1.4px] text-sm" scn-text-limit="3">
															<?php
															if (get_the_excerpt()) {
																the_excerpt();
															} else {
																if (get_field('livestream_description')) {
																	the_field('livestream_description');
																} else {
																	if (get_field('episode_summary')) {
																		the_field('episode_summary');
																	} else {
																		if (get_field('webinar_description')) {
																			the_field('webinar_description');
																		} else {
																			echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
								tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero
								vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus
								tristique posuere.';
																		}
																	}
																}
															}
															?>
														</div>
													</div>
												</a>
											</div>
										<?php
										endwhile;
										wp_reset_postdata(); ?>
									<?php
									endif; ?>
								</div>
							</div>
							<div class="splide__arrows splide__arrows--ltr">
								<div class="splide__arrow splide__arrow--prev" aria-label="Go to last slide"
								     aria-controls="splide03-track">
									<div class="flex w-embed">
										<svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
											<path
												d="M21 41C9.95431 41 1 32.0457 1 21C1 9.95431 9.95431 1 21 1C32.0457 1 41 9.95431 41 21C41 32.0457 32.0457 41 21 41Z"
												stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
											<path d="M28.5912 21.4893H13.0004" stroke="#FFAB56" stroke-width="2"
											      stroke-miterlimit="10"></path>
											<path d="M19.4894 15L13 21.4894L19.4894 27.9787" stroke="#FFAB56" stroke-width="2"
											      stroke-miterlimit="10"></path>
										</svg>
									</div>
								</div>
								<div class="splide__arrow splide__arrow--next" aria-label="Next slide" aria-controls="splide03-track">
									<div class="flex w-embed">
										<svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
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
									[slider-3] .splide__arrow {
										background: transparent;
									}
								</style>
							</div>
							<div class="display-none w-embed w-script">
								<script>
									document.addEventListener('DOMContentLoaded', function () {
										function slider3() {
											let splideTarget = '[slider-3]';
											let splideTargetEl = document.querySelector(`${splideTarget}`);
											if (!splideTargetEl) return;
											var options = {
												/*suggested options*/
												type: 'slide', //'fade', //"slide", //"loop",
												arrows: true,
												pagination: false,
												/*custom options*/
												rewind: true,
												//fixedWidth: 394,
												perMove: 1,
												perPage: 3,
												gap: 32,
												autoplay: true,
												pauseOnHover: true,
												autoScroll: {
													speed: 1,
												},
												intersection: {
													inView: {
														autoplay: true,
													},
													outView: {
														autoplay: false,
													},
												},
												breakpoints: {
													991: {
														// 		type: 'slide',
														perPage: 2,
														padding: {left: 42, right: 42},
														// 		perMove: 1,
														// 		fixedWidth: '100%',
														// 		padding: { left: 0, right: 0 },
													},
													767: {
														perPage: 1,
														gap: 50,
														padding: {left: 42, right: 42},
													},
												},
											};
											var splide = new Splide(`${splideTarget}`, options);
											splide.mount();
										}

										setTimeout(function () {
											slider3();
										}, 500);
									});
								</script>
							</div>
						</div>
					</div>
				</div>
				<div class="flex justify-center gap-12 sm:flex-col">
					<a href="/upcoming-live-programming" class="btn primary w-inline-block">
						<div>Browse Upcoming Events</div>
					</a>
				</div>
			</div>
		</div>
	</section>
</div>
