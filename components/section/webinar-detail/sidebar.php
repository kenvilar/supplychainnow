<?php
/**
 * Sidebar for Webinar Detail
 * Renders "More Webinars" list and CTA
 */

$pageId = $args['pageId'] ?? get_the_ID();
?>
<div class="max-w-395 w-full md:max-w-full">
	<div class="mb-36">
		<div class="mb-20">
			<h2 class="text-2xl">More Webinars</h2>
		</div>
		<?php
		get_template_part('components/line-with-blinking-dot', null, [
			'maxWidthClassnames' => 'ml-0'
		]);
		?>
	</div>
	<div class="mb-52">
		<!-- Search form intentionally omitted -->
	</div>
	<div class="mb-52 flex flex-col gap-58 sm:gap-20">
		<?php
		$q = new WP_Query([
			'post_type' => 'page',
			'post_status' => 'publish',
			'posts_per_page' => 2,
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
				],
				[
					'key' => 'select_media_type',
					'value' => ['webinar'],
					'compare' => 'IN',
					'type' => 'CHAR',
				],
			],
			"post__not_in" => [$pageId],
			'orderby' => 'rand', // random order
		]);

		if ($q->have_posts()): ?>
			<?php while ($q->have_posts()): $q->the_post(); ?>
				<a href="<?php the_permalink($q->post->ID); ?>" class="relative w-full group">
					<div class="relative flex flex-col justify-between gap-20 h-full">
						<div class="w-full">
							<div class="mb-28">
								<div class="overflow-hidden rounded-12 relative h-222 bg-cargogrey">
									<img
										src="<?php echo get_the_post_thumbnail_url($q->post->ID)
											? get_the_post_thumbnail_url($q->post->ID)
											: get_stylesheet_directory_uri() . '/assets/img/misc/default-card-img-thumbnail.avif' ?>"
										loading="lazy" alt="" class="image relative opacity-90">
									<?php
									$terms = get_the_terms($q->post->ID, 'tags');
									if (!is_wp_error($terms) && !empty($terms)) {
										$first = array_values($terms)[0];
										?>
										<div class="absolute absolute--tl p-24 flex items-center justify-center">
											<div class="relative rounded-full overflow-hidden py-4 px-8">
												<div class="relative font-semibold uppercase text-2xs text-white lh-normal z-10">
													<?php echo $first->name; ?>
												</div>
												<?php
												echo get_field('select_media_type', $q->post->ID) == 'livestream'
													? '<div class="absolute absolute--full bg-primary"></div>'
													: '';
												echo get_field('select_media_type', $q->post->ID) == 'podcast'
													? '<div class="absolute absolute--full bg-secondary"></div>'
													: '';
												echo get_field('select_media_type', $q->post->ID) == 'webinar'
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
										<?php if (get_field('select_media_type', $q->post->ID) == 'livestream') { ?>
											<img
												src="<?php echo get_stylesheet_directory_uri() . '/assets/img/icons/play-button-livestream.avif'; ?>"
												loading="lazy" alt="play-button-livestream">
										<?php }
										if (get_field('select_media_type', $q->post->ID) == 'podcast') { ?>
											<img
												src="<?php echo get_stylesheet_directory_uri() . '/assets/img/icons/play-button-podcast.avif'; ?>"
												loading="lazy" alt="play-button-podcast">
										<?php }
										if (get_field('select_media_type', $q->post->ID) == 'webinar') { ?>
											<img
												src="<?php echo get_stylesheet_directory_uri() . '/assets/img/icons/play-button-webinar.avif'; ?>"
												loading="lazy" alt="play-button-webinar">
										<?php } ?>
									</div>
								</div>
							</div>
							<div class="mb-12">
								<div class="flex items-center gap-32 sm:flex-wrap sm:gap-8">
									<div class="flex items-center gap-8">
										<div class="flex items-center">
											<?php if (get_field('select_media_type', $q->post->ID) == 'livestream') { ?>
												<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/icons/livestream-card-icon.svg'; ?>" loading="lazy" alt="livestream-music">
											<?php }
											if (get_field('select_media_type', $q->post->ID) == 'podcast') { ?>
												<img class="size-24" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/icons/podcast-card-icon.png'; ?>" loading="lazy" alt="podcast-blue-microphone">
											<?php }
											if (get_field('select_media_type', $q->post->ID) == 'webinar') { ?>
												<img class="size-24" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/icons/webinar-card-icon.png'; ?>" loading="lazy" alt="webinar-person">
											<?php } ?>
										</div>
										<?php if (get_field('select_media_type', $q->post->ID)) { ?>
											<div class="font-family-secondary text-sm capitalize">
												<?php echo get_field('select_media_type', $q->post->ID); ?>
											</div>
										<?php } ?>
									</div>
									<div class="flex items-center gap-8 text-sm font-light font-family-secondary">
										<div><?php echo get_the_date('F j, Y', $q->post->ID); ?></div>
										<!--<div>•</div>
										<div>6 min 25 sec</div>-->
									</div>
								</div>
							</div>
							<h3 class="font-semibold text-lg" scn-text-limit="2"><?php the_title(); ?></h3>
						</div>
						<div class="w-full tracking-[1.4px] text-sm" scn-text-limit="3">
							<?php
							if (get_the_excerpt($q->post->ID)) {
								the_excerpt();
							} else {
								if (get_field('livestream_description', $q->post->ID)) {
									the_field('livestream_description', $q->post->ID);
								} else {
									if (get_field('episode_summary', $q->post->ID)) {
										the_field('episode_summary', $q->post->ID);
									} else {
										if (get_field('webinar_description', $q->post->ID)) {
											the_field('webinar_description', $q->post->ID);
										} else {
											echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.';
										}
									}
								}
							}
							?>
						</div>
					</div>
				</a>
			<?php endwhile; wp_reset_postdata(); ?>
		<?php else: ?>
			<?php echo '<p class="w-full">No webinars found.</p>'; ?>
		<?php endif; ?>
	</div>
	<div>
		<?php
		echo get_template_part('components/ui/btn', null, [
			'text' => 'More Webinars',
			'link' => '/webinars',
			'style' => 'primary',
			'class' => '',
		]);
		?>
	</div>
</div>

