<?php
/*
 * Template Name: Dev Collections v2
 */

get_header();
$pageId = get_the_ID();
?>
	<section class="section">
		<div class="site-padding sm:py-60">
			<div class="max-w-1252 w-container">
				<h1 class="">
					Collection 1
				</h1>
				<div role="link" class="relative w-full group ">
					<div class="relative flex flex-col gap-20 h-full">
						<div class="w-full h-full">
							<div class="mb-28">
								<div class="overflow-hidden rounded-12 relative h-344 bg-cargogrey">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/home/homepage-slider-1.avif' ?>"
										loading="lazy" alt="" class="image relative opacity-40">
									<div class="absolute absolute--tl p-24 flex items-center justify-center">
										<div class="relative rounded-full overflow-hidden py-4 px-8">
											<div class="relative font-semibold uppercase text-2xs text-white lh-full z-10">
												This is some text inside of a div block.
											</div>
											<div class="absolute absolute--full bg-primary"></div>
											<div class="absolute absolute--full bg-secondary"></div>
											<div class="absolute absolute--full bg-tertiary"></div>
										</div>
									</div>
									<div
										class="absolute absolute--full flex items-center justify-center translate-y-220 group-hover:translate-y-0 transition-all duration-500">
										<img
											src="<?php
											echo get_stylesheet_directory_uri() . '/assets/img/icons/play-button-livestream.avif'; ?>"
											loading="lazy" alt="play-button-livestream">
										<img
											src="<?php
											echo get_stylesheet_directory_uri() . '/assets/img/icons/play-button-podcast.avif'; ?>"
											loading="lazy" alt="play-button-podcast">
										<img
											src="<?php
											echo get_stylesheet_directory_uri() . '/assets/img/icons/play-button-webinar.avif'; ?>"
											loading="lazy" alt="play-button-webinar">
									</div>
								</div>
							</div>
							<div class="mb-12">
								<div class="flex items-center gap-32 sm:flex-wrap sm:gap-8">
									<div class="flex items-center gap-8">
										<div class="flex items-center">
											<img
												src="<?php
												echo get_stylesheet_directory_uri() . '/assets/img/icons/livestream-card-icon.svg'; ?>"
												loading="lazy" alt="livestream-music">
											<img
												class="size-24"
												src="<?php
												echo get_stylesheet_directory_uri() . '/assets/img/icons/podcast-card-icon.png'; ?>"
												loading="lazy" alt="podcast-blue-microphone">
											<img
												class="size-24"
												src="<?php
												echo get_stylesheet_directory_uri() . '/assets/img/icons/webinar-card-icon.png'; ?>"
												loading="lazy" alt="webinar-person">
										</div>
										<div class="font-family-secondary text-sm">lorem</div>
									</div>
									<div class="flex items-center gap-8 text-sm font-light font-family-secondary">
										<div>April 11, 2025</div>
										<div>•</div>
										<div>6 min 25 sec</div>
									</div>
								</div>
							</div>
							<h3 class="font-semibold" scn-text-limit="3">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
								tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero
								vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus
								tristique posuere.
							</h3>
						</div>
						<div class="w-full tracking-[1.6px]" scn-text-limit="2">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
								tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero
								vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus
								tristique posuere.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="site-padding sm:py-60">
			<div class="max-w-1252 w-container">
				<h1 class="">
					Collection 1 with WP_Query
				</h1>
				<?php
				$q = new WP_Query([
					'post_type' => 'page',
					'post_status' => 'publish',
					'posts_per_page' => 1,
					'offset' => 0,
					'meta_query' => [
						'relation' => 'AND',
						[
							'relation' => 'OR',
							[
								'key' => '_wp_page_template',
								'value' => 'episode-detail.php',
								'compare' => '=',
							],
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
							'value' => ['podcast', 'livestream', 'webinar'],
							'compare' => 'IN',
							'type' => 'CHAR',
						],
					],
					'orderby' => ['menu_order' => 'ASC', 'date' => 'DESC'],
				]);

				if ($q->have_posts()): ?>
					<?php
					while ($q->have_posts()): $q->the_post(); ?>
						<a href="<?php
						the_permalink(); ?>" class="relative w-full group">
							<div class="relative flex flex-col justify-between gap-20 h-full">
								<div class="w-full">
									<div class="mb-28">
										<div class="overflow-hidden rounded-12 relative h-344 bg-cargogrey">
											<img
												src="<?php
												echo get_the_post_thumbnail_url()
													? get_the_post_thumbnail_url()
													: get_stylesheet_directory_uri() . '/assets/img/misc/default-card-img-thumbnail.avif' ?>"
												loading="lazy" alt="" class="image relative opacity-40">
											<?php
											$terms = get_the_terms(get_the_ID(), 'tags');
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
														echo get_stylesheet_directory_uri() . '/assets/img/icons/play-button-livestream.avif'; ?>"
														loading="lazy" alt="play-button-livestream">
													<?php
												}
												?>
												<?php
												if (get_field('select_media_type') == 'podcast') {
													?>
													<img
														src="<?php
														echo get_stylesheet_directory_uri() . '/assets/img/icons/play-button-podcast.avif'; ?>"
														loading="lazy" alt="play-button-podcast">
													<?php
												}
												?>
												<?php
												if (get_field('select_media_type') == 'webinar') {
													?>
													<img
														src="<?php
														echo get_stylesheet_directory_uri() . '/assets/img/icons/play-button-webinar.avif'; ?>"
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
															echo get_stylesheet_directory_uri() . '/assets/img/icons/livestream-card-icon.svg'; ?>"
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
															echo get_stylesheet_directory_uri() . '/assets/img/icons/podcast-card-icon.png'; ?>"
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
															echo get_stylesheet_directory_uri() . '/assets/img/icons/webinar-card-icon.png'; ?>"
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
													echo get_the_date('F j, Y', $pageId); ?></div>
												<!--<div>•</div>
												<div>6 min 25 sec</div>-->
											</div>
										</div>
									</div>
									<h3 class="font-semibold" scn-text-limit="3"><?php
										the_title(); ?></h3>
								</div>
								<div class="w-full tracking-[1.6px]" scn-text-limit="2">
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
					<?php
					endwhile;
					wp_reset_postdata(); ?>
				<?php
				endif; ?>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="site-padding sm:py-60">
			<div class="max-w-1252 w-container">
				<h1 class="">
					Collection 2
				</h1>
				<div role="link" class="relative w-full group ">
					<div class="relative flex flex-col gap-20 h-full">
						<div class="w-full h-full">
							<div class="mb-28">
								<div class="overflow-hidden rounded-12 relative h-222 bg-cargogrey">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/home/homepage-slider-1.avif' ?>"
										loading="lazy" alt="" class="image relative opacity-40">
									<div class="absolute absolute--tl p-24 flex items-center justify-center">
										<div class="relative rounded-full overflow-hidden py-4 px-8">
											<div class="relative font-semibold uppercase text-2xs text-white lh-full z-10">
												This is some text inside of a div block.
											</div>
											<div class="absolute absolute--full bg-primary"></div>
											<div class="absolute absolute--full bg-secondary"></div>
											<div class="absolute absolute--full bg-tertiary"></div>
										</div>
									</div>
									<div
										class="absolute absolute--full flex items-center justify-center translate-y-220 group-hover:translate-y-0 transition-all duration-500">
										<img
											src="<?php
											echo get_stylesheet_directory_uri() . '/assets/img/icons/play-button-livestream.avif'; ?>"
											loading="lazy" alt="play-button-livestream">
										<img
											src="<?php
											echo get_stylesheet_directory_uri() . '/assets/img/icons/play-button-podcast.avif'; ?>"
											loading="lazy" alt="play-button-podcast">
										<img
											src="<?php
											echo get_stylesheet_directory_uri() . '/assets/img/icons/play-button-webinar.avif'; ?>"
											loading="lazy" alt="play-button-webinar">
									</div>
								</div>
							</div>
							<div class="mb-12">
								<div class="flex items-center gap-32 sm:flex-wrap sm:gap-8">
									<div class="flex items-center gap-8">
										<div class="flex items-center">
											<img
												src="<?php
												echo get_stylesheet_directory_uri() . '/assets/img/icons/livestream-card-icon.svg'; ?>"
												loading="lazy" alt="livestream-music">
											<img
												class="size-24"
												src="<?php
												echo get_stylesheet_directory_uri() . '/assets/img/icons/podcast-card-icon.png'; ?>"
												loading="lazy" alt="podcast-blue-microphone">
											<img
												class="size-24"
												src="<?php
												echo get_stylesheet_directory_uri() . '/assets/img/icons/webinar-card-icon.png'; ?>"
												loading="lazy" alt="webinar-person">
										</div>
										<div class="font-family-secondary text-xs">lorem</div>
									</div>
									<div class="flex items-center gap-8 text-xs font-light font-family-secondary">
										<div>April 11, 2025</div>
										<div>•</div>
										<div>6 min 25 sec</div>
									</div>
								</div>
							</div>
							<h3 class="font-semibold text-lg" scn-text-limit="2">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
								tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero
								vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus
								tristique posuere.
							</h3>
						</div>
						<div class="w-full tracking-[1.4px] text-sm" scn-text-limit="3">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
								tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero
								vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus
								tristique posuere.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="site-padding sm:py-60">
			<div class="max-w-1252 w-container">
				<h1 class="">
					Collection 2 with WP_Query
				</h1>
				<?php
				$q = new WP_Query([
					'post_type' => 'page',
					'post_status' => 'publish',
					'posts_per_page' => 1,
					'offset' => 0,
					'meta_query' => [
						'relation' => 'AND',
						[
							'relation' => 'OR',
							[
								'key' => '_wp_page_template',
								'value' => 'episode-detail.php',
								'compare' => '=',
							],
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
							'value' => ['podcast', 'livestream', 'webinar'],
							'compare' => 'IN',
							'type' => 'CHAR',
						],
					],
					'orderby' => ['menu_order' => 'ASC', 'date' => 'DESC'],
				]);

				if ($q->have_posts()): ?>
					<?php
					while ($q->have_posts()): $q->the_post(); ?>
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
													: get_stylesheet_directory_uri() . '/assets/img/misc/default-card-img-thumbnail.avif' ?>"
												loading="lazy" alt="" class="image relative opacity-40">
											<?php
											$terms = get_the_terms(get_the_ID(), 'tags');
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
														echo get_stylesheet_directory_uri() . '/assets/img/icons/play-button-livestream.avif'; ?>"
														loading="lazy" alt="play-button-livestream">
													<?php
												}
												?>
												<?php
												if (get_field('select_media_type') == 'podcast') {
													?>
													<img
														src="<?php
														echo get_stylesheet_directory_uri() . '/assets/img/icons/play-button-podcast.avif'; ?>"
														loading="lazy" alt="play-button-podcast">
													<?php
												}
												?>
												<?php
												if (get_field('select_media_type') == 'webinar') {
													?>
													<img
														src="<?php
														echo get_stylesheet_directory_uri() . '/assets/img/icons/play-button-webinar.avif'; ?>"
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
															echo get_stylesheet_directory_uri() . '/assets/img/icons/livestream-card-icon.svg'; ?>"
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
															echo get_stylesheet_directory_uri() . '/assets/img/icons/podcast-card-icon.png'; ?>"
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
															echo get_stylesheet_directory_uri() . '/assets/img/icons/webinar-card-icon.png'; ?>"
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
													echo get_the_date('F j, Y', $pageId); ?></div>
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
					<?php
					endwhile;
					wp_reset_postdata(); ?>
				<?php
				endif; ?>
			</div>
		</div>
	</section>
<?php
get_footer(); ?>