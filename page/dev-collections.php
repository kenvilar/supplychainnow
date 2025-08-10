<?php
/*
 * Template Name: Dev Collections
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
											<div class="relative font-semibold uppercase text-2xs text--white lh-full z-10">
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
							<h3 class="font-semibold">Heading</h3>
						</div>
						<div class="w-full tracking-1.6">
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
											<div class="relative font-semibold uppercase text-2xs text--white lh-full z-10">
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
							<h3 class="font-semibold text-lg">Heading</h3>
						</div>
						<div class="w-full tracking-1.4 text-sm">
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
<?php
get_footer(); ?>