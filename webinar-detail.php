<?php
/*
 * Template Name: Webinar Detail
 */

get_header();
$pageId = get_the_ID();
?>
	<div class="page-wrapper">
		<div class="main-wrapper">
			<section class="section">
				<div class="site-padding sm:py-60 pt-58">
					<div class="mx-auto text-center">
						<a href="#" class="font-semibold text-reg text-secondary">< Back to Webinars</a>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="site-padding sm:py-60 pt-29">
					<div class="mx-auto max-w-1010 w-full md:max-w-full">
						<div class="overflow-hidden rounded-25 relative">
							<div class="relative z-1 max-h-568 h-full sm:h-200">
								<img class="image" src="
															<?php
								if (get_the_post_thumbnail_url($pageId, 'large')) {
									echo get_the_post_thumbnail_url($pageId, 'large');
								} else {
									if (get_field('thumbnail_upload', $pageId)) {
										echo get_field('thumbnail_upload', $pageId);
									}
								}
								?>" alt="">
							</div>
							<div class="absolute absolute--full bg-cargogrey z--1"></div>
						</div>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="site-padding sm:py-60 py-88">
					<div class="mx-auto max-w-1249 w-full md:max-w-full">
						<div class="relative overflow-hidden shadow4 rounded-8 pt-56 pb-47 px-20">
							<div class="mx-auto max-w-1129 w-full md:max-w-full">
								<div class="mb-16 flex items-center gap-22">
									<div class="lh-normal"><?php
										echo get_the_date('F j, Y', $pageId) ?></div>
									<?php
									$terms = get_the_terms(get_the_ID(), 'tags');
									if (!is_wp_error($terms) && !empty($terms)) {
										$first = array_values($terms)[0];
										?>
										<div class="relative rounded-full overflow-hidden py-4 px-8">
											<div class="relative font-semibold uppercase text-2xs text--white lh-normal z-10">
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
										<?php
									}
									?>
								</div>
								<h3 class="text-34 lh-43 font-semibold" scn-text-limit="2">
									WEBINAR: <?php
									echo get_field("webinar_title", $pageId); ?>
								</h3>
								<div>
									<?php
									if (!empty(get_field('episode_captivate_link', $pageId))) { ?>
										<?php
										echo get_field("episode_captivate_link");
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="site-padding sm:py-60 py-64">
					<div class="mx-auto max-w-1249 w-full md:max-w-full">
						<div class="flex gap-20 justify-between">
							<div class="max-w-775 w-full md:max-w-full">
								<div class="mb-60">
									<div class="flex gap-28 items-center">
										<div class="flex items-center gap-15">
											<div class="tracking-[1.6px]">Share:</div>
											<div class="flex gap-8 items-center">
												<a href="#" class="text-secondary hover:text-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
													     fill="none">
														<path fill-rule="evenodd" clip-rule="evenodd"
														      d="M0 11.8644C0 5.31188 5.31188 0 11.8644 0C18.4169 0 23.7288 5.31188 23.7288 11.8644C23.7288 18.4169 18.4169 23.7288 11.8644 23.7288C5.31188 23.7288 0 18.4169 0 11.8644ZM6.08051 9.86229V17.7966H8.6017V9.86229H6.08051ZM5.9322 7.3411C5.9322 8.15678 6.52543 8.75 7.3411 8.75C8.15678 8.75 8.75 8.15678 8.75 7.3411C8.75 6.52543 8.15678 5.9322 7.3411 5.9322C6.59958 5.9322 5.9322 6.52543 5.9322 7.3411ZM15.2754 17.7966H17.6483V12.9025C17.6483 10.4555 16.1653 9.63983 14.7564 9.63983C13.4958 9.63983 12.6059 10.4555 12.3835 10.9746V9.86229H10.0106V17.7966H12.5318V13.5699C12.5318 12.4576 13.2733 11.8644 14.0148 11.8644C14.7564 11.8644 15.2754 12.2352 15.2754 13.4958V17.7966Z"
														      fill="currentColor"/>
													</svg>
												</a>
												<a href="#" class="text-secondary hover:text-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
													     fill="none">
														<path d="M14.7561 17.0607H16.3638L8.9637 6.7032H7.35603L14.7561 17.0607Z"
														      fill="currentColor"/>
														<path fill-rule="evenodd" clip-rule="evenodd"
														      d="M11.8644 23.7288C5.31188 23.7288 0 18.4169 0 11.8644C0 5.31188 5.31188 0 11.8644 0C18.4169 0 23.7288 5.31188 23.7288 11.8644C23.7288 18.4169 18.4169 23.7288 11.8644 23.7288ZM17.4099 5.9322L12.9929 10.956L17.7966 17.7966H14.2637L11.0289 13.1901L6.97891 17.7966H5.9322L10.5642 12.5284L5.9322 5.9322H9.46511L12.5282 10.2943L16.3633 5.9322H17.4099Z"
														      fill="currentColor"/>
													</svg>
												</a>
												<a href="#" class="text-secondary hover:text-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
													     fill="none">
														<path
															d="M11.8644 13.9407C10.7521 13.9407 9.78814 13.0508 9.78814 11.8644C9.78814 10.7521 10.678 9.78813 11.8644 9.78813C12.9767 9.78813 13.9407 10.678 13.9407 11.8644C13.9407 12.9767 12.9767 13.9407 11.8644 13.9407Z"
															fill="currentColor"/>
														<path fill-rule="evenodd" clip-rule="evenodd"
														      d="M14.3856 6.82203H9.34322C8.75 6.89618 8.45339 6.97034 8.23093 7.04449C7.93432 7.11864 7.71186 7.26695 7.48941 7.4894C7.31338 7.66543 7.23021 7.84146 7.12968 8.05423C7.10319 8.1103 7.07542 8.16908 7.04449 8.23093C7.03302 8.26534 7.01977 8.30153 7.00558 8.34032C6.928 8.55226 6.82203 8.84177 6.82203 9.34322V14.3856C6.89619 14.9788 6.97034 15.2754 7.04449 15.4979C7.11864 15.7945 7.26695 16.0169 7.48941 16.2394C7.66544 16.4154 7.84146 16.4986 8.05423 16.5991C8.11035 16.6256 8.16903 16.6534 8.23093 16.6843C8.26535 16.6958 8.30153 16.709 8.34032 16.7232C8.55226 16.8008 8.84177 16.9068 9.34322 16.9068H14.3856C14.9788 16.8326 15.2754 16.7585 15.4979 16.6843C15.7945 16.6102 16.0169 16.4619 16.2394 16.2394C16.4154 16.0634 16.4986 15.8874 16.5991 15.6746C16.6256 15.6185 16.6534 15.5598 16.6843 15.4979C16.6958 15.4635 16.709 15.4273 16.7232 15.3885C16.8008 15.1766 16.9068 14.887 16.9068 14.3856V9.34322C16.8326 8.75 16.7585 8.45339 16.6843 8.23093C16.6102 7.93432 16.4619 7.71186 16.2394 7.4894C16.0634 7.31338 15.8874 7.23021 15.6746 7.12968C15.6186 7.10321 15.5597 7.07539 15.4979 7.04449C15.4635 7.03302 15.4273 7.01977 15.3885 7.00558C15.1766 6.928 14.887 6.82203 14.3856 6.82203ZM11.8644 8.67585C10.0847 8.67585 8.67585 10.0847 8.67585 11.8644C8.67585 13.6441 10.0847 15.053 11.8644 15.053C13.6441 15.053 15.053 13.6441 15.053 11.8644C15.053 10.0847 13.6441 8.67585 11.8644 8.67585ZM15.8686 8.60169C15.8686 9.01123 15.5367 9.34322 15.1271 9.34322C14.7176 9.34322 14.3856 9.01123 14.3856 8.60169C14.3856 8.19216 14.7176 7.86017 15.1271 7.86017C15.5367 7.86017 15.8686 8.19216 15.8686 8.60169Z"
														      fill="currentColor"/>
														<path fill-rule="evenodd" clip-rule="evenodd"
														      d="M0 11.8644C0 5.31188 5.31188 0 11.8644 0C18.4169 0 23.7288 5.31188 23.7288 11.8644C23.7288 18.4169 18.4169 23.7288 11.8644 23.7288C5.31188 23.7288 0 18.4169 0 11.8644ZM9.34322 5.70974H14.3856C15.053 5.7839 15.4979 5.85805 15.8686 6.00635C16.3136 6.22881 16.6102 6.37712 16.9809 6.74788C17.3517 7.11864 17.5742 7.4894 17.7225 7.86017C17.8708 8.23093 18.0191 8.67585 18.0191 9.34322V14.3856C17.9449 15.053 17.8708 15.4979 17.7225 15.8686C17.5 16.3136 17.3517 16.6102 16.9809 16.9809C16.6102 17.3517 16.2394 17.5742 15.8686 17.7225C15.4979 17.8708 15.053 18.0191 14.3856 18.0191H9.34322C8.67585 17.9449 8.23093 17.8708 7.86017 17.7225C7.41525 17.5 7.11864 17.3517 6.74788 16.9809C6.37712 16.6102 6.15466 16.2394 6.00636 15.8686C5.85805 15.4979 5.70975 15.053 5.70975 14.3856V9.34322C5.7839 8.67585 5.85805 8.23093 6.00636 7.86017C6.22881 7.41525 6.37712 7.11864 6.74788 6.74788C7.11864 6.37712 7.48941 6.15466 7.86017 6.00635C8.23093 5.85805 8.67585 5.70974 9.34322 5.70974Z"
														      fill="currentColor"/>
													</svg>
												</a>
												<a href="#" class="text-secondary hover:text-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
													     fill="none">
														<path fill-rule="evenodd" clip-rule="evenodd"
														      d="M0 11.8644C0 5.31188 5.31188 0 11.8644 0C18.4169 0 23.7288 5.31188 23.7288 11.8644C23.7288 18.4169 18.4169 23.7288 11.8644 23.7288C5.31188 23.7288 0 18.4169 0 11.8644ZM11.8644 5.9322C15.1271 5.9322 17.7966 8.6017 17.7966 11.8644C17.7966 14.8305 15.6462 17.3517 12.6801 17.7966V13.5699H14.089L14.3856 11.8644H12.7542V10.7521C12.7542 10.3072 12.9767 9.86229 13.7182 9.86229H14.4597V8.37924C14.4597 8.37924 13.7924 8.23093 13.125 8.23093C11.7903 8.23093 10.9004 9.04661 10.9004 10.5297V11.8644H9.41737V13.5699H10.9004V17.7225C8.08263 17.2775 5.9322 14.8305 5.9322 11.8644C5.9322 8.6017 8.6017 5.9322 11.8644 5.9322Z"
														      fill="currentColor"/>
													</svg>
												</a>
												<a href="#" class="text-secondary hover:text-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
													     fill="none">
														<circle cx="12" cy="12" r="12" fill="currentColor"/>
														<path
															d="M11.3191 9.04827L12.6093 7.75331C13.0916 7.27097 13.7458 7 14.4279 7C15.1101 7 15.7643 7.27097 16.2466 7.75331C16.7289 8.23565 16.9999 8.88984 16.9999 9.57196C16.9999 10.2541 16.7289 10.9083 16.2466 11.3906L14.9516 12.6808"
															stroke="white" stroke-width="1.5" stroke-miterlimit="10"/>
														<path
															d="M9.04827 11.3192L7.75331 12.6094C7.27097 13.0917 7 13.7459 7 14.4281C7 15.1102 7.27097 15.7644 7.75331 16.2467C8.23565 16.7291 8.88984 17 9.57196 17C10.2541 17 10.9083 16.7291 11.3906 16.2467L12.6808 14.9518"
															stroke="white" stroke-width="1.5" stroke-miterlimit="10"/>
														<path d="M14.2714 9.72913L9.72949 14.271" stroke="white" stroke-width="1.5"
														      stroke-miterlimit="10"/>
													</svg>
												</a>
											</div>
										</div>
										<div class="flex items-center gap-12">
											<?php
											$webinar_button_link = get_field('webinar_button_link', $pageId);
											?>
											<a href="<?php
											if ($webinar_button_link) {
												echo esc_url($webinar_button_link);
											} ?>" class="btn primary-outline w-inline-block" target="<?php
											if ($webinar_button_link) {
												echo '_blank';
											} else {
												echo '_self';
											}
											?>" rel="noopener noreferrer">
												<div class="flex items-center gap-8">
													<div>View this Webinar</div>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="tracking-[1.6px]">
									<?php
									if (get_field('webinar_description', $pageId)) {
										echo wp_kses_post(get_field('webinar_description', $pageId));
									}
									?>
								</div>
							</div>
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
									<!--<form class="relative overflow-hidden rounded-100 border border-secondary/50 bg-[#EBF6FF]"
								      method="get" action="<?php
									/*									echo esc_url(home_url(add_query_arg([]))); */ ?>">
									<input
										type="search"
										name="s"
										value="<?php
									/*											echo esc_attr(get_search_query()); */ ?>"
										placeholder="Search by episode, topic, name, etc..."
										class="overflow-hidden rounded-100 w-full h-43 py-14 pl-48 pr-12 text-sm font-light placeholder:text-secondary"
									/>
									<div class="absolute absolute--l flex items-center justify-center pl-22">
										<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
											<path
												d="M6.31756 11.6351C9.25436 11.6351 11.6351 9.25436 11.6351 6.31756C11.6351 3.38075 9.25436 1 6.31756 1C3.38075 1 1 3.38075 1 6.31756C1 9.25436 3.38075 11.6351 6.31756 11.6351Z"
												stroke="#4E88B6" stroke-miterlimit="10"/>
											<path d="M14 13.9997L10.4529 10.4526" stroke="#4E88B6" stroke-miterlimit="10"/>
										</svg>
									</div>
								</form>-->
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
												/*[
													'key' => '_wp_page_template',
													'value' => 'episode-detail.php',
													'compare' => '=',
												],
												[
													'key' => '_wp_page_template',
													'value' => 'livestream-detail.php',
													'compare' => '=',
												],*/
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
										'orderby' => 'rand', // random order
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
																			<div class="relative font-semibold uppercase text-2xs text--white lh-normal z-10">
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
										<?php
										endwhile;
										wp_reset_postdata(); ?>
									<?php
									endif; ?>
								</div>
								<div>
									<?php
									echo get_template_part('components/ui/btn', null, [
										'text' => 'More Webinars',
										'link' => '#',
										'style' => 'primary',
										'class' => '',
										/*'attributes' => [
											'target' => '_blank',
											'rel'    => 'noopener noreferrer',
										],*/
									])
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
<?php
get_footer(); ?>