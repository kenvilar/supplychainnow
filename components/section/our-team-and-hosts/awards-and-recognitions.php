<?php

?>
<section class="section sm:py-60 py-64">
	<div class="site-padding">
		<div class="w-layout-blockcontainer max-w-1388 w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center">Awards &amp; Recognitions</h2>
				</div>
				<div class="w-layout-blockcontainer max-w-136 w-full h-1 relative bg-cargogrey/25 w-container">
					<div class="absolute absolute--r flex items-center pr-32">
						<div blinking-dot="" class="size-8 rounded-8 bg-primary"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div slider-1="" class="splide">
		<div class="splide__track overflow-visible">
			<div class="splide__list">
				<div class="splide__slide">
					<div class="awards-pentagon-block">
						<img alt="" loading="lazy"
						     src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/6892f9ed0ae8797dae5ae8d7_team--awards-1.avif"
						     class="image h-auto">
					</div>
				</div>
				<div class="splide__slide">
					<div class="awards-pentagon-block">
						<img alt="" loading="lazy"
						     src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/6892f9ed7333168ca84ba545_team--awards-2.avif"
						     class="image h-auto">
					</div>
				</div>
				<div class="splide__slide">
					<div class="awards-pentagon-block">
						<img alt="" loading="lazy"
						     src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/6892f9ed4e635c25439c9f58_team--awards-3.avif"
						     class="image h-auto">
					</div>
				</div>
				<div class="splide__slide">
					<div class="awards-pentagon-block">
						<img alt="" loading="lazy"
						     src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/6892f9ed804bf016b02a9200_team--awards-4.avif"
						     class="image h-auto">
					</div>
				</div>
				<div class="splide__slide">
					<div class="awards-pentagon-block">
						<img alt="" loading="lazy"
						     src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/6892f9edff8f085e64a5d6c3_team--awards-5.avif"
						     class="image h-auto">
					</div>
				</div>
				<div class="splide__slide">
					<div class="awards-pentagon-block">
						<img alt="" loading="lazy"
						     src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/6892f9edef24d16404d6bf8d_team--awards-6.avif"
						     class="image h-auto">
					</div>
				</div>
				<div class="splide__slide">
					<div class="awards-pentagon-block">
						<img alt="" loading="lazy"
						     src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/6892f9ed35e93ef20133ceeb_team--awards-7.avif"
						     class="image h-auto">
					</div>
				</div>
				<div class="splide__slide">
					<div class="awards-pentagon-block">
						<img alt="" loading="lazy"
						     src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/6892f9edf8c74a3949ee5caa_team--awards-8.avif"
						     class="image h-auto">
					</div>
				</div>
				<div class="splide__slide">
					<div class="awards-pentagon-block">
						<img alt="" loading="lazy"
						     src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/6892f9edf66019df019f9eff_team--awards-9.avif"
						     class="image h-auto">
					</div>
				</div>
			</div>
		</div>
		<div class="display-none w-embed">
			<style>
				.awards-pentagon-block:hover {
					filter: drop-shadow(0px 4.982px 24.908px rgba(49, 63, 74, 0.25));
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
							type: 'loop', //'fade', //"slide", //"loop",
							arrows: false,
							pagination: false,
							/*custom options*/
							rewind: true,
							fixedWidth: 200,
							perMove: 1,
							gap: 37.91,
							//autoplay: true,
							pauseOnHover: true,
							//updateOnMove: true,
							autoScroll: {
								speed: 0.3,
							},
							intersection: {
								inView: {
									//autoplay: true,
								},
								outView: {
									//autoplay: true,
								},
							},
							// breakpoints: {
							// 	479: {
							// 		type: 'slide',
							// 		perPage: 1,
							// 		perMove: 1,
							// 		fixedWidth: '100%',
							// 		padding: { left: 0, right: 0 },
							// 	},
							// },
						};
						var splide = new Splide(`${splideTarget}`, options);
						splide.mount(window.splide.Extensions);
					}

					setTimeout(function () {
						slider1();
					}, 500);
				});
			</script>
		</div>
	</div>
</section>