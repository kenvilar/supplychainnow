<?php

?>
<section class="section">
	<div class="site-padding sm:py-60 py-88">
		<div class="w-layout-blockcontainer max-w-1252 w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center">Featured Content</h2>
				</div>
				<?php
				get_template_part('components/line-with-blinking-dot');
				?>
			</div>
			<div class="mb-48">
				<div class="flex justify-center gap-28 sm:flex-col">
					<?php
					$q = new WP_Query([
						'post_type' => 'page',
						'posts_per_page' => 2,
						'meta_query' => [
							[
								'key' => 'select_media_type',          // your ACF field name
								'value' => ['podcast', 'livestream', 'webinar'],   // option values, not labels
								'compare' => 'IN',
								'type' => 'CHAR',
							]
						],
						'orderby' => ['menu_order' => 'ASC', 'date' => 'DESC'],
					]);

					if ($q->have_posts()): ?>
						<?php
						while ($q->have_posts()): $q->the_post(); ?>
							<a href="<?php
							the_permalink(); ?>" class="relative w-full group ">
								<div class="relative flex flex-col gap-20 h-full">
									<div class="w-full h-full">
										<div class="mb-28">
											<div class="overflow-hidden rounded-12 relative h-344 bg-cargogrey">
												<img
													src="<?php
													echo get_the_post_thumbnail()
														? the_post_thumbnail_url()
														: get_stylesheet_directory_uri() . '/assets/img/misc/default-card-img-thumbnail.avif' ?>"
													loading="lazy" alt="" class="image relative opacity-40">
												<?php
												$terms = get_the_terms(get_the_ID(), 'tags');
												if (!is_wp_error($terms) && !empty($terms)) {
													$first = array_values($terms)[0];
													?>
													<div class="absolute absolute--tl p-24 flex items-center justify-center">
														<div class="relative rounded-full overflow-hidden py-4 px-8">
															<div class="relative font-semibold uppercase text-2xs text--white lh-full z-10">
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
														the_date(); ?></div>
													<!--<div>•</div>
													<div>6 min 25 sec</div>-->
												</div>
											</div>
										</div>
										<h3 class="font-semibold"><?php
											the_title(); ?></h3>
									</div>
									<div class="w-full tracking-1.6" scn-text-limit="2">
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
														echo '';
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
			<div class="mb-64">
				<div role="list" class="flex justify-center gap-32 sm:flex-col w-dyn-items">
					<div role="listitem" class="w-full group w-dyn-item">
						<a href="/event/livestream-on-mental-health" class="flex flex-col gap-20 h-full w-inline-block">
							<div class="w-full h-full">
								<div class="mb-28">
									<div class="overflow-hidden rounded-12 relative h-220 bg--cargogrey">
										<img
											src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/68937a163918d6a1775ef71b_image16.jpeg"
											loading="lazy" alt="Mental health awareness livestream" class="image relative opacity-40">
										<div class="absolute absolute--tl p-24">
											<div style="background-color:hsla(0, 0.00%, 100.00%, 1.00)"
											     class="rounded-full text--white py-4 px-8">
												<div class="font-semibold text-2xs uppercase">Search Engine Optimization</div>
											</div>
										</div>
										<div
											class="absolute absolute--full flex items-center justify-center translate-y-220 group-hover-translate-y-0 transition-all duration-500">
											<img
												src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688a36f89ae4a406c3dbc9a5_play-bg--primary.avif"
												loading="lazy" alt="play-bg--primary" class="w-condition-invisible">
											<img
												src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688a3474d97d0c9a0c4acafd_play-bg--tertiary.avif"
												loading="lazy" alt="play-bg--tertiary" class="w-condition-invisible">
										</div>
									</div>
								</div>
								<div class="mb-12">
									<div class="flex items-center gap-32 sm:flex-wrap sm:gap-8">
										<div class="flex items-center gap-8">
											<img
												src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688a3bba6b4ceb6bcf03867d_podcast-blue-microphone.avif"
												loading="lazy" alt="podcast-blue-microphone" class="w-condition-invisible">
											<div class="flex w-condition-invisible w-embed">
												<svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20"
												     fill="none">
													<circle cx="9.5" cy="9.99609" r="9.5" fill="#FFAB56"></circle>
													<path d="M5.34363 8.48926V11.737" stroke="white" stroke-width="1.1875"
													      stroke-miterlimit="10"></path>
													<path d="M7.37445 6.86987V13.3566" stroke="white" stroke-width="1.1875"
													      stroke-miterlimit="10"></path>
													<path d="M13.4586 8.48926V11.737" stroke="white" stroke-width="1.1875"
													      stroke-miterlimit="10"></path>
													<path d="M11.4277 6.86987V13.3566" stroke="white" stroke-width="1.1875"
													      stroke-miterlimit="10"></path>
													<path d="M9.40094 5.24609V14.9806" stroke="white" stroke-width="1.1875"
													      stroke-miterlimit="10"></path>
												</svg>
											</div>
											<img
												src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688a2f9dc4c41532e44fa96e_webinar-person.avif"
												loading="lazy" alt="webinar-person" class="w-condition-invisible">
											<div class="font-family-secondary text-xs">Article</div>
										</div>
										<div class="flex items-center gap-8">
											<div class="font-family-secondary font-light text-xs">October 10, 2023</div>
											<div>•</div>
											<div class="font-family-secondary font-light text-xs">2 hours</div>
										</div>
									</div>
								</div>
								<h3 class="font-semibold">Livestream on Mental Health Awareness</h3>
							</div>
							<div class="w-full">
								<p>Join our livestream to discuss mental health awareness and resources.</p>
							</div>
						</a>
					</div>
					<div role="listitem" class="w-full group w-dyn-item">
						<a href="/event/podcast-episode-10" class="flex flex-col gap-20 h-full w-inline-block">
							<div class="w-full h-full">
								<div class="mb-28">
									<div class="overflow-hidden rounded-12 relative h-220 bg--cargogrey">
										<img
											src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/68937a153918d6a1775ef69f_image4.jpeg"
											loading="lazy" alt="Community podcast episode" class="image relative opacity-40">
										<div class="absolute absolute--tl p-24">
											<div style="background-color:#4e88b6" class="rounded-full text--white py-4 px-8">
												<div class="font-semibold text-2xs uppercase">Digital Marketing</div>
											</div>
										</div>
										<div
											class="absolute absolute--full flex items-center justify-center translate-y-220 group-hover-translate-y-0 transition-all duration-500">
											<img
												src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688a36f89ae4a406c3dbc9a5_play-bg--primary.avif"
												loading="lazy" alt="play-bg--primary" class="w-condition-invisible">
											<img
												src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688a3474d97d0c9a0c4acafd_play-bg--tertiary.avif"
												loading="lazy" alt="play-bg--tertiary" class="w-condition-invisible">
										</div>
									</div>
								</div>
								<div class="mb-12">
									<div class="flex items-center gap-32 sm:flex-wrap sm:gap-8">
										<div class="flex items-center gap-8">
											<img
												src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688a3bba6b4ceb6bcf03867d_podcast-blue-microphone.avif"
												loading="lazy" alt="podcast-blue-microphone">
											<div class="flex w-condition-invisible w-embed">
												<svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20"
												     fill="none">
													<circle cx="9.5" cy="9.99609" r="9.5" fill="#FFAB56"></circle>
													<path d="M5.34363 8.48926V11.737" stroke="white" stroke-width="1.1875"
													      stroke-miterlimit="10"></path>
													<path d="M7.37445 6.86987V13.3566" stroke="white" stroke-width="1.1875"
													      stroke-miterlimit="10"></path>
													<path d="M13.4586 8.48926V11.737" stroke="white" stroke-width="1.1875"
													      stroke-miterlimit="10"></path>
													<path d="M11.4277 6.86987V13.3566" stroke="white" stroke-width="1.1875"
													      stroke-miterlimit="10"></path>
													<path d="M9.40094 5.24609V14.9806" stroke="white" stroke-width="1.1875"
													      stroke-miterlimit="10"></path>
												</svg>
											</div>
											<img
												src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688a2f9dc4c41532e44fa96e_webinar-person.avif"
												loading="lazy" alt="webinar-person" class="w-condition-invisible">
											<div class="font-family-secondary text-xs">Podcast</div>
										</div>
										<div class="flex items-center gap-8">
											<div class="font-family-secondary font-light text-xs">October 10, 2023</div>
											<div>•</div>
											<div class="font-family-secondary font-light text-xs">38 minutes</div>
										</div>
									</div>
								</div>
								<h3 class="font-semibold">The Importance of Community</h3>
							</div>
							<div class="w-full">
								<p>This episode discusses the role of community in our lives.</p>
							</div>
						</a>
					</div>
					<div role="listitem" class="w-full group w-dyn-item">
						<a href="/event/podcast-episode-9" class="flex flex-col gap-20 h-full w-inline-block">
							<div class="w-full h-full">
								<div class="mb-28">
									<div class="overflow-hidden rounded-12 relative h-220 bg--cargogrey">
										<img
											src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/68937a163918d6a1775ef706_image9.jpeg"
											loading="lazy" alt="Resilience podcast episode" class="image relative opacity-40">
										<div class="absolute absolute--tl p-24">
											<div style="background-color:#4e88b6" class="rounded-full text--white py-4 px-8">
												<div class="font-semibold text-2xs uppercase">User Experience</div>
											</div>
										</div>
										<div
											class="absolute absolute--full flex items-center justify-center translate-y-220 group-hover-translate-y-0 transition-all duration-500">
											<img
												src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688a36f89ae4a406c3dbc9a5_play-bg--primary.avif"
												loading="lazy" alt="play-bg--primary" class="w-condition-invisible">
											<img
												src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688a3474d97d0c9a0c4acafd_play-bg--tertiary.avif"
												loading="lazy" alt="play-bg--tertiary" class="w-condition-invisible">
										</div>
									</div>
								</div>
								<div class="mb-12">
									<div class="flex items-center gap-32 sm:flex-wrap sm:gap-8">
										<div class="flex items-center gap-8">
											<img
												src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688a3bba6b4ceb6bcf03867d_podcast-blue-microphone.avif"
												loading="lazy" alt="podcast-blue-microphone">
											<div class="flex w-condition-invisible w-embed">
												<svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20"
												     fill="none">
													<circle cx="9.5" cy="9.99609" r="9.5" fill="#FFAB56"></circle>
													<path d="M5.34363 8.48926V11.737" stroke="white" stroke-width="1.1875"
													      stroke-miterlimit="10"></path>
													<path d="M7.37445 6.86987V13.3566" stroke="white" stroke-width="1.1875"
													      stroke-miterlimit="10"></path>
													<path d="M13.4586 8.48926V11.737" stroke="white" stroke-width="1.1875"
													      stroke-miterlimit="10"></path>
													<path d="M11.4277 6.86987V13.3566" stroke="white" stroke-width="1.1875"
													      stroke-miterlimit="10"></path>
													<path d="M9.40094 5.24609V14.9806" stroke="white" stroke-width="1.1875"
													      stroke-miterlimit="10"></path>
												</svg>
											</div>
											<img
												src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688a2f9dc4c41532e44fa96e_webinar-person.avif"
												loading="lazy" alt="webinar-person" class="w-condition-invisible">
											<div class="font-family-secondary text-xs">Podcast</div>
										</div>
										<div class="flex items-center gap-8">
											<div class="font-family-secondary font-light text-xs">October 9, 2023</div>
											<div>•</div>
											<div class="font-family-secondary font-light text-xs">48 minutes</div>
										</div>
									</div>
								</div>
								<h3 class="font-semibold">Building Resilience</h3>
							</div>
							<div class="w-full">
								<p>We discuss strategies for building resilience in tough times.</p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="flex justify-center gap-12 sm:flex-col">
				<a href="/on-demand-programming/podcasts-and-livestreams" class="btn secondary w-inline-block">
					<div>Browse All Podcasts</div>
				</a>
				<a href="/on-demand-programming/webinars" class="btn secondary-outline w-inline-block">
					<div>Browse All Webinars</div>
				</a>
			</div>
		</div>
	</div>
</section>
