<?php

?>
<section class="section">
	<div class="site-padding sm:py-60 py-60">
		<div class="w-layout-blockcontainer max-w-1372 relative w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center">Upcoming Webinars</h2>
				</div>
				<?php
				get_template_part('components/line-with-blinking-dot');
				?>
			</div>
			<div class="relative">
				<div class="w-layout-blockcontainer max-w-1252 w-container">
					<div slider-2="" class="splide">
						<div class="splide__track">
							<div class="splide__list">
								<?php
								$q = new WP_Query([
									'post_type' => 'page',
									'post_status' => 'publish',
									'posts_per_page' => 20,
									'offset' => 0,
									'meta_query' => [
										'relation' => 'AND',
										[
											'relation' => 'OR',
											//																						[
											//																							'key' => '_wp_page_template',
											//																							'value' => 'episode-detail.php',
											//																							'compare' => '=',
											//																						],
											[
												'key' => '_wp_page_template',
												'value' => 'webinar-detail.php',
												'compare' => '=',
											],
											//																						[
											//																							'key' => '_wp_page_template',
											//																							'value' => 'livestream-detail.php',
											//																							'compare' => '=',
											//																						],
										],
										[
											'key' => 'select_media_type',
											'value' => [
												//'podcast',
												//'livestream',
												'webinar'
											],
											'compare' => 'IN',
											'type' => 'CHAR',
										],
									],
									'date_query' => [
										[
											'after' => current_time('Y-m-d'),
											'inclusive' => true, // include today
										]
									],
									'orderby' => ['menu_order' => 'ASC', 'date' => 'DESC'],
								]);

								if ($q->have_posts()): ?>
									<?php
									while ($q->have_posts()): $q->the_post(); ?>
										<div class="splide__slide">
											<a href="<?php
											the_permalink(); ?>" class="relative w-full group">
												<div class="relative flex flex-col justify-between gap-20 h-full">
													<div class="w-full">
														<div class="mb-28">
															<div class="overflow-hidden rounded-12 relative h-222 bg-cargogrey">
																<img
																	src="<?php
																	echo get_the_post_thumbnail_url()
																		? get_the_post_thumbnail_url()
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
																			<div class="relative font-semibold uppercase text-2xs text-white lh-full z-10">
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
																		echo get_the_date('F j, Y'); ?></div>
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
								else:
									echo '<p class="w-full text-center">No upcoming webinars found.</p>';
								endif; ?>
							</div>
						</div>
						<?php
						get_template_part('components/splide-arrows');
						?>
						<div class="display-none w-embed">
							<style>
								[slider-2] .splide__arrow {
									background: transparent;
								}
							</style>
						</div>
						<div class="display-none w-embed w-script">
							<script>
                  document.addEventListener('DOMContentLoaded', function () {
                      function slider2() {
                          let splideTarget = '[slider-2]';
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
                          slider2();
                      }, 500);
                  });
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
