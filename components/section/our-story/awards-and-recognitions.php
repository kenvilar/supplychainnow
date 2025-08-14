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
		<div class="splide__track overflow-visible!">
			<div class="splide__list">
				<?php
				// Number of images you have
				$total_awards = 8;

				for ($i = 1; $i <= $total_awards; $i++) : ?>
					<div class="splide__slide">
						<div class="awards-pentagon-block">
							<img
								src="<?php
								echo get_stylesheet_directory_uri() . "/assets/img/our-story/about--awards-{$i}.avif"; ?>"
								loading="lazy" alt="Award <?php
							echo $i; ?>" class="image h-auto">
						</div>
					</div>
				<?php
				endfor; ?>
			</div>
		</div>
		<div class="display-none w-embed">
			<style>
				.awards-pentagon-block:hover {
					filter: drop-shadow(0px 4.982px 24.908px rgba(49, 63, 74, 0.25));
				}
				html.wf-design-mode [slider-1] .splide__list {
					display: flex;
					flex-wrap: nowrap;
					justify-content: center;
					gap: 20px;
					padding: 0 12px;
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
                      updateOnMove: true,
                      autoScroll: {
                          speed: 0.3,
                      },
                      intersection: {
                          inView: {
                              //autoplay: true,
                          },
                          outView: {
                              //autoplay: false,
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
