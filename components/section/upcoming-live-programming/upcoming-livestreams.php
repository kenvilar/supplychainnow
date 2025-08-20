<section class="section" id="upcoming-livestreams">
	<div class="site-padding sm:py-60 py-0">
		<div class="w-layout-blockcontainer max-w-1372 relative w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center">Upcoming Livestreams</h2>
				</div>
				<?php
				get_template_part("components/line-with-blinking-dot"); ?>
			</div>
			<div class="mb-92 relative">
				<div class="w-layout-blockcontainer max-w-1252 w-container">
					<script src="https://gateway.on24.com/view/orion/engagement-hub/dist/embed/embed.js" data-width="100%"
					        data-height="auto"
					        data-url="https://gateway.on24.com/wcc/eh/4818584/category/143073/upcoming-livestreams"></script>
					<!--<div slider-1="" class="splide">
						<div class="splide__track">
							<div class="splide__list">
								<?php
					/*								echo get_template_part("components/ui/card2", null, [
														"q" => [
															"posts_per_page" => -1,
															"meta_query" => [
																"relation" => "AND",
																[
																	"relation" => "OR",
																	[
																		"key" => "_wp_page_template",
																		"value" => "livestream-detail.php",
																		"compare" => "=",
																	],
																],
																[
																	"key" => "select_media_type",
																	"value" => ["livestream"],
																	"compare" => "IN",
																	"type" => "CHAR",
																],
															],
															"date_query" => [
																[
																	"after" => current_time("Y-m-d"),
																	"inclusive" => true, // include today
																],
															],
														],
														"attributes" => [],
														"classNames" => "splide__slide",
														"noItemsFound" =>
															'<p class="w-full text-center">No upcoming livestreams found.</p>',
													]); */ ?>
							</div>
						</div>
						<?php
					/*						get_template_part("components/splide-arrows"); */ ?>
						<div class="display-none w-embed">
							<style>
								[slider-1] .splide__arrow {
									background: transparent;
								}
							</style>
						</div>
						<div class="display-none w-embed w-script">
							<script>
								document.addEventListener('DOMContentLoaded', function () {
									function slider1() {
										let splideTarget = '[slider-1]';
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
										slider1();
									}, 500);
								});
							</script>
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</div>
</section>