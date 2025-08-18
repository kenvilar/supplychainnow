<?php

$pageId = get_the_ID();
$programFeaturedEpisodes = get_field('program_featured_episodes', $pageId)
?>
<section class="section">
	<div class="site-padding sm:py-60 py-56">
		<div class="w-layout-blockcontainer max-w-1252 w-container">
			<?php
			if ($programFeaturedEpisodes):
				?>
				<div class="mb-44">
					<div class="mb-20">
						<h2 class="text-center">Featured Episodes</h2>
					</div>
					<?php
					get_template_part('components/line-with-blinking-dot');
					?>
				</div>
				<div class="mb-100">
					<div class="w-dyn-list">
						<div role="list" class="grid grid-cols-2 gap-28 gap-y-32 sm:grid-cols-1 w-dyn-items">
							<?php
							$featured_episodes = $programFeaturedEpisodes;
							//echo '<pre>';
							//print_r($featured_episodes);

							$keys = array_keys($featured_episodes);
							for ($i = 0; $i < count($featured_episodes); $i++) {
								//echo $keys[$i] . "{<br>";
								foreach ($featured_episodes[$keys[$i]] as $key => $value) {
									//echo $key . " : " . $value . "<br>";
									$episode_img = get_field('thumbnail_upload', $value);
									$episode_url = get_permalink($value);

									$selectMediaType = get_field('select_media_type', $value);
									?>
									<a href="<?php
									echo esc_url($episode_url); ?>" class="relative w-full group">
										<div class="relative flex flex-col justify-between gap-20 h-full">
											<div class="w-full">
												<div class="mb-28">
													<div class="overflow-hidden rounded-12 relative h-344 bg-cargogrey">
														<img
															src="<?php
															echo get_the_post_thumbnail_url($value)
																? get_the_post_thumbnail_url($value)
																: get_stylesheet_directory_uri(
																  ) . '/assets/img/misc/default-card-img-thumbnail.avif' ?>"
															loading="lazy" alt="" class="image relative opacity-40">
														<?php
														$terms = get_the_terms($value, 'tags');
														if (!is_wp_error($terms) && !empty($terms)) {
															$first = array_values($terms)[0];
															?>
															<div class="absolute absolute--tl p-24 flex items-center justify-center">
																<div class="relative rounded-full overflow-hidden py-4 px-8">
																	<div class="relative font-semibold uppercase text-2xs text-white lh-normal z-10">
																		<?php
																		echo $first->name; ?>
																	</div>
																	<?php
																	echo $selectMediaType == 'livestream'
																		? '<div class="absolute absolute--full bg-primary"></div>'
																		: '';
																	echo $selectMediaType == 'podcast'
																		? '<div class="absolute absolute--full bg-secondary"></div>'
																		: '';
																	echo $selectMediaType == 'webinar'
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
															if ($selectMediaType == 'livestream') {
																?>
																<img
																	src="<?php
																	echo get_stylesheet_directory_uri(
																	     ) . '/assets/img/icons/play-button-livestream.avif'; ?>"
																	loading="lazy" alt="play-button-livestream">
																<?php
															} elseif ($selectMediaType == 'podcast') {
																?>
																<img
																	src="<?php
																	echo get_stylesheet_directory_uri(
																	     ) . '/assets/img/icons/play-button-podcast.avif'; ?>"
																	loading="lazy" alt="play-button-podcast">
																<?php
															} elseif ($selectMediaType == 'webinar') {
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
																if ($selectMediaType == 'livestream') {
																	?>
																	<img
																		src="<?php
																		echo get_stylesheet_directory_uri(
																		     ) . '/assets/img/icons/livestream-card-icon.svg'; ?>"
																		loading="lazy" alt="livestream-music">
																	<?php
																} elseif ($selectMediaType == 'podcast') {
																	?>
																	<img
																		class="size-24"
																		src="<?php
																		echo get_stylesheet_directory_uri() . '/assets/img/icons/podcast-card-icon.png'; ?>"
																		loading="lazy" alt="podcast-blue-microphone">
																	<?php
																} elseif ($selectMediaType == 'webinar') {
																	?>
																	<img
																		class="size-24"
																		src="<?php
																		echo get_stylesheet_directory_uri() . '/assets/img/icons/webinar-card-icon.png'; ?>"
																		loading="lazy" alt="webinar-person">
																	<?php
																}
																?>
															</div>
															<?php
															if ($selectMediaType) {
																?>
																<div class="font-family-secondary text-sm capitalize">
																	<?php
																	echo $selectMediaType;
																	?>
																</div>
																<?php
															}
															?>
														</div>
														<div class="flex items-center gap-8 text-sm font-light font-family-secondary">
															<div>
																<?php
																echo get_the_date('F j, Y', $value); ?>
															</div>
															<!--<div>•</div>
															<div>6 min 25 sec</div>-->
														</div>
													</div>
												</div>
												<h3 class="font-semibold" scn-text-limit="3">
													<?php
													echo get_the_title($value); ?>
												</h3>
											</div>
											<div class="w-full tracking-[1.6px]" scn-text-limit="2">
												<?php
												if (get_the_excerpt($value)) {
													echo get_the_excerpt($value);
												} elseif (get_field('livestream_description', $value)) {
													the_field('livestream_description', $value);
												} elseif (get_field('episode_summary', $value)) {
													the_field('episode_summary', $value);
												} elseif (get_field('webinar_description', $value)) {
													the_field('webinar_description', $value);
												}
												?>
											</div>
										</div>
									</a>
									<?php
								}
							}
							?>
						</div>
					</div>
				</div>
			<?php
			endif; ?>
			<div class="">
				<div data-lenis-prevent="" class="w-richtext">
					<?php
					$captivate_code = get_field('captivate_code', $pageId);
					if ($captivate_code) {
						echo $captivate_code;
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
