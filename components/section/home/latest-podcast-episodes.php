<?php

?>
<section class="section">
	<div class="site-padding sm:py-60 py-88">
		<div class="max-w-1372 relative w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center">Latest Podcast Episodes</h2>
				</div>
				<?php
				get_template_part('components/line-with-blinking-dot', null, [
					'maxWidthClassnames' => ''
				]);
				?>
			</div>
			<div class="mb-44">
				<div class="max-w-1248 mx-auto">
					<div slider-2="" class="splide">
						<div class="splide__track">
							<div class="splide__list">
								<?php
								echo get_template_part('components/ui/card2', null, [
									'q' => [
										'posts_per_page' => 20,
										'meta_query' => [
											'relation' => 'AND',
											[
												'relation' => 'OR',
												[
													'key' => '_wp_page_template',
													'value' => 'episode-detail.php',
													'compare' => '=',
												],
											],
											[
												'key' => 'select_media_type',
												'value' => ['podcast'],
												'compare' => 'IN',
												'type' => 'CHAR',
											],
										],
									],
									'attributes' => [],
									'classNames' => 'splide__slide',
								]);
								?>
							</div>
						</div>
						<?php
						get_template_part('components/splide-arrows');
						?>
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
			<div class="flex justify-center gap-12 sm:flex-col">
				<?php
				echo get_template_part('components/ui/btn', null, [
					'text' => 'Browse All Podcasts',
					'link' => '/podcasts-and-livestreams',
					'style' => 'primary',
					'class' => '',
					/*'attributes' => [
						'target' => '_blank',
						'rel'    => 'noopener noreferrer',
					],*/
				]);
				?>
			</div>
		</div>
	</div>
</section>
