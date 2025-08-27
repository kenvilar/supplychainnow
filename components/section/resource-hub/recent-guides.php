<?php

$posts_per_page = $args['posts_per_page'] ?? -1;
$sitePaddingClassnames = $args['sitePaddingClassnames'] ?? '';
?>
<section class="section">
	<div class="site-padding sm:py-60 py-40 pb-92 <?= esc_attr($sitePaddingClassnames); ?>">
		<div class="w-layout-blockcontainer max-w-1372 w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center">Recent Guides</h2>
				</div>
				<?php
				get_template_part('components/line-with-blinking-dot', null, [
					'maxWidthClassnames' => ''
				]);
				?>
			</div>
			<div class="relative">
				<div class="w-layout-blockcontainer max-w-1248 w-container">
					<div slider-6="" class="splide">
						<div class="splide__track">
							<div class="splide__list">
								<?php
								echo get_template_part('components/ui/card2-post', null, [
									'q' => [
										'posts_per_page' => $posts_per_page,
										"tax_query" => [
											[
												"taxonomy" => "category",
												"field" => "slug",
												"terms" => ["podcast-episode"],
												"operator" => "NOT IN",
											],
										],
									],
									'attributes' => [],
									'classNames' => 'splide__slide',
									'noItemsFound' => '',
									'taxQueryTerms' => [
										'guide',
									],
								]);
								?>
							</div>
						</div>
						<?php
						get_template_part('components/splide-arrows');
						?>
					</div>
					<div class="display-none w-embed">
						<style>
							[slider-6] .splide__arrow {
								background: transparent;
							}
						</style>
					</div>
					<div class="display-none w-embed w-script">
						<script>
							document.addEventListener('DOMContentLoaded', function() {
								function slider6() {
									let splideTarget = '[slider-6]';
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
										autoplay: false,
										pauseOnHover: true,
										updateOnMove: true,
										autoScroll: {
											speed: 1,
										},
										intersection: {
											inView: {
												autoplay: false,
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
												gap: 50,
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
									slider6();
								}, 500);
							});
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>