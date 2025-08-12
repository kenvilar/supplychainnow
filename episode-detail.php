<?php
/*
 * Template Name: Episode Detail
 */

get_header();
$pageId = get_the_ID();
?>
	<div class="page-wrapper">
		<div class="main-wrapper">
			<section class="section">
				<div class="site-padding sm:py-60 pt-58">
					<div class="mx-auto text-center">
						<a href="#" class="font-semibold text-reg text-secondary">< Back to Episodes</a>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="site-padding sm:py-60 pt-29">
					<div class="mx-auto max-w-1010 w-full md:max-w-full">
						<div class="overflow-hidden rounded-25 relative">
							<div class="relative z-1 h-568 sm:h-200">
								<img class="image" src="
																<?php
								if (get_field('upload_cover_image', $pageId)) {
									echo get_field('upload_cover_image', $pageId);
								} else {
									the_post_thumbnail_url();
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
									<div class="lh-normal">April 07, 2025</div>
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
								<h3 class="mb-50 text-34 lh-43 font-semibold" scn-text-limit="2">
									<?php
									the_title(); ?>
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
							<div>ok</div>
							<div>ok</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
<?php
get_footer(); ?>