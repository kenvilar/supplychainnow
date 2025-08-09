<?php

?>
<section class="section">
	<div class="site-padding">
		<div class="max-w-1252 pt-92 md:pt-0 md:mb-20 w-container">
			<div class="mb-36">
				<div class="flex gap-20 justify-between sm:flex-col">
					<div class="max-w-664 w-full"><h1>The #1 Voice of Supply Chain</h1></div>
				</div>
			</div>
			<div class="flex gap-28 sm:flex-col">
				<div class="max-w-512 md:max-w-full card">
					<div class="pt-48 pb-36 px-12">
						<div class="w-layout-blockcontainer max-w-388 w-full md:max-w-full w-container">
							<div class="mb-16">
								<div class="font-family-alternate font-medium text-xl tracking-2-4 xs:text-md">JOIN THE
									CONVERSATION
								</div>
							</div>
							<div class="mb-40">
								<div class="max-w-348 w-full md:max-w-full"><p class="tracking-1-6">Get expert takes on
										the industry’s latest topics, via podcast, livestream, or webinar.</p></div>
							</div>
							<div class="flex gap-12 xs:flex-col sm:flex-col flex-wrap"><a href="/on-demand-programming"
							                                                              class="btn secondary w-inline-block">
									<div>Listen Now</div>
								</a><a href="/programs" class="btn secondary-outline w-inline-block">
									<div>Subscribe for Updates</div>
								</a></div>
						</div>
					</div>
				</div>
				<div class="max-w-512 md:max-w-full card">
					<div class="pt-48 pb-36 px-12">
						<div class="w-layout-blockcontainer max-w-432 w-full md:max-w-full w-container">
							<div class="mb-16">
								<div class="font-family-alternate font-medium text-xl tracking-2-4 xs:text-md">WORK WITH
									US
								</div>
							</div>
							<div class="mb-40">
								<div class="max-w-432 w-full md:max-w-full"><p class="tracking-1-6">Reach the right
										audience as a sponsor or campaign partner and generate high-value leads for your
										brand.</p></div>
							</div>
							<div class="flex gap-12 sm:flex-col"><a href="/work-with-us"
							                                        class="btn primary w-inline-block">
									<div>Learn More About Working with Us</div>
								</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="absolute absolute--r w-full h-full z--1 flex justify-end items-center md:relative">
			<div class="w-[50%] h-540 md:w-full">
				<div class="max-w-624 w-full h-full ml-auto md:max-w-full">
					<div slider-1 class="splide">
						<div class="splide__track">
							<div class="splide__list">
								<div class="splide__slide">
									<img
										src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/68920c07fcd75d4e39c691a6_homepage-slider-1.avif"
										loading="lazy" alt="homepage-slider-1"
										class="overflow-hidden image rounded-l-24 md:rounded-24">
								</div>
								<div class="splide__slide">
									<img
										src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/68920c07e3a635b3519dad2f_homepage-slider-2.avif"
										loading="lazy" alt="homepage-slider-2"
										class="overflow-hidden image rounded-l-24 md:rounded-24">
								</div>
								<div class="splide__slide">
									<img
										src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/68920c07d4d5aa0507704dcd_homepage-slider-3.avif"
										loading="lazy" alt="homepage-slider-3"
										class="overflow-hidden image rounded-l-24 md:rounded-24">
								</div>
								<div class="splide__slide">
									<img
										src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/68920c079265a71b20626f01_homepage-slider-4.avif"
										loading="lazy" alt="homepage-slider-4"
										class="overflow-hidden image rounded-l-24 md:rounded-24">
								</div>
								<div class="splide__slide is-active is-visible" id="splide01-slide05" role="group"
								     aria-roledescription="slide" aria-label="5 of 7"
								     style="width: auto; height: 540px; transform: translateX(-400%); transition: opacity 400ms cubic-bezier(0.25, 1, 0.5, 1);">
									<img
										src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/68920c070f50444dbc05a97a_homepage-slider-5.avif"
										loading="lazy" alt="homepage-slider-5"
										class="overflow-hidden image rounded-l-24 md:rounded-24"></div>
								<div class="splide__slide is-next" id="splide01-slide06" role="group"
								     aria-roledescription="slide" aria-label="6 of 7"
								     style="width: auto; height: 540px; transform: translateX(-500%); transition: opacity 400ms cubic-bezier(0.25, 1, 0.5, 1);"
								     aria-hidden="true"><img
										src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/68920c077c17ef0a583f99b6_homepage-slider-6.avif"
										loading="lazy" alt="homepage-slider-6"
										class="overflow-hidden image rounded-l-24 md:rounded-24"></div>
								<div class="splide__slide" id="splide01-slide07" role="group"
								     aria-roledescription="slide" aria-label="7 of 7"
								     style="width: auto; height: 540px; transform: translateX(-600%); transition: opacity 400ms cubic-bezier(0.25, 1, 0.5, 1);"
								     aria-hidden="true"><img
										src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/68920c0714cb7e2d676ce5e4_homepage-slider-7.avif"
										loading="lazy" alt="homepage-slider-7"
										class="overflow-hidden image rounded-l-24 md:rounded-24"></div>
							</div>
						</div>
					</div>

					<script>
						document.addEventListener('DOMContentLoaded', function () {
							function slider1() {
								let splideTarget = '[slider-1]';
								let splideTargetEl = document.querySelector(`${splideTarget}`);
								if (!splideTargetEl) return;
								var options = {
									/*suggested options*/
									type: 'fade', //'fade', //"slide", //"loop",
									arrows: false,
									pagination: false,
									/*custom options*/
									rewind: true,
									fixedWidth: 'auto',
									fixedHeight: 540,
									perMove: 1,
									perPage: 1,
									gap: 0,
									autoplay: true,
									pauseOnHover: false,
									/*autoScroll: {
																									speed: 1,
																							},*/
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
											fixedWidth: '100%',
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
			</div>
		</div>
	</div>
</section>
