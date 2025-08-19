<section class="section">
	<div class="site-padding sm:py-60 py-60">
		<div class="w-layout-blockcontainer max-w-1372 relative w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center">Upcoming Webinars</h2>
				</div>
				<?php
				get_template_part("components/line-with-blinking-dot"); ?>
			</div>
			<div class="relative">
				<div class="w-layout-blockcontainer max-w-1252 w-container">
					<div slider-2="" class="splide">
						<div class="splide__track">
							<div class="splide__list">
								<?php
								echo get_template_part("components/ui/card2", null, [
									"q" => [
										"posts_per_page" => -1,
										"meta_query" => [
											"relation" => "AND",
											[
												"relation" => "OR",
												[
													"key" => "_wp_page_template",
													"value" => "webinar-detail.php",
													"compare" => "=",
												],
											],
											[
												"key" => "select_media_type",
												"value" => ["webinar"],
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
										'<p class="w-full text-center">No upcoming webinars found.</p>',
								]); ?>
							</div>
						</div>
						<?php
						get_template_part("components/splide-arrows"); ?>
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
