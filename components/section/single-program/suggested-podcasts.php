<?php

$pageId = get_the_ID();
?>
<section class="section">
	<div class="site-padding sm:py-60 py-88">
		<div class="w-layout-blockcontainer max-w-1372 relative w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center">Suggested Podcasts</h2>
				</div>
				<?php
				get_template_part('components/line-with-blinking-dot');
				?>
			</div>
			<div class="mb-44 relative">
				<div class="max-w-1248 mx-auto">
					<div slider-1="" class="splide">
						<div class="splide__track">
							<div class="splide__list">
								<?php
								$q = new WP_Query([
									'post_type' => 'program',
									'post_status' => 'publish',
									'posts_per_page' => -1,
									'offset' => 0,
									"post__not_in" => [$pageId],
									'orderby' => 'rand', // random order
								]);

								if ($q->have_posts()): ?>
									<?php
									while ($q->have_posts()): $q->the_post(); ?>
										<div class="splide__slide">
											<a href="<?php
														the_permalink(); ?>" class="w-full h-full overflow-hidden rounded-24 w-inline-block"
												tabindex="-1">
												<img
													src="<?php
															if (get_field('program_thumbnail_image_upload', $q->ID)) {
																echo get_field('program_thumbnail_image_upload', $q->ID);
															} else {
																if (has_post_thumbnail($q->ID)) {
																	echo the_post_thumbnail_url('thumbnail');
																} else {
																	echo get_stylesheet_directory_uri() . '/assets/img/misc/default-card-img-thumbnail.avif';
																}
															}
															?>"
													loading="lazy" alt="" class="image">
											</a>
										</div>
									<?php
									endwhile;
									wp_reset_postdata(); ?>
								<?php
								endif; ?>
							</div>
						</div>
						<?php
						get_template_part('components/splide-arrows');
						?>
						<div class="display-none w-embed w-script">
							<script>
								document.addEventListener('DOMContentLoaded', function() {
									function slider1() {
										let splideTarget = '[slider-1]';
										let splideTargetEl = document.querySelector(`${splideTarget}`);
										if (!splideTargetEl) return;
										var options = {
											/*suggested options*/
											type: 'loop', //'fade', //"slide", //"loop",
											arrows: true,
											pagination: false,
											/*custom options*/
											//rewind: true,
											//fixedWidth: 394,
											perMove: 1,
											perPage: 4,
											gap: 22,
											autoplay: true,
											pauseOnHover: true,
											updateOnMove: true,
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
													padding: {
														left: 42,
														right: 42
													},
													// 		perMove: 1,
													// 		fixedWidth: '100%',
													// 		padding: { left: 0, right: 0 },
												},
												767: {
													perPage: 1,
													gap: '4rem',
													fixedWidth: '100%',
													padding: {
														left: 42,
														right: 42
													},
												},
											},
										};
										var splide = new Splide(`${splideTarget}`, options);
										splide.mount();
									}

									setTimeout(function() {
										slider1();
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