<?php

?>
<div class="gradient1 rounded-100">
  <section class="section text-white py-96 sm:py-60">
    <div class="relative z-10">
      <div class="mb-72">
        <div class="site-padding">
          <div class="w-layout-blockcontainer max-w-836 text-center w-container">
            <h2>Trusted by the Supply Chain Community</h2>
          </div>
        </div>
      </div>
      <div class="mb-72">
        <div slider-2="" class="splide mb-36">
          <div class="splide__track">
            <ul class="splide__list items-center">
              <li class="splide__slide">
                <img
                  src="<?php
                  echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/narvan-logo.svg'; ?>"
                  loading="lazy" alt="narvan-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="<?php
                  echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/2025-pros-to-know-logo.svg'; ?>"
                  loading="lazy" alt="2025-pros-to-know-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="<?php
                  echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/sap-logo.svg'; ?>"
                  loading="lazy" alt="sap-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="<?php
                  echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/walmart-logo.svg'; ?>"
                  loading="lazy" alt="walmart-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="<?php
                  echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/dhl-logo.svg'; ?>"
                  loading="lazy" alt="dhl-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="<?php
                  echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/best-buy-logo.svg'; ?>"
                  loading="lazy" alt="best-buy-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="<?php
                  echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/microsoft-logo.svg'; ?>"
                  loading="lazy" alt="microsoft logo">
              </li>
              <li class="splide__slide">
                <img
                  src="<?php
                  echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/ups-logo.svg'; ?>"
                  loading="lazy" alt="ups-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="<?php
                  echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/ibm-logo.svg'; ?>"
                  loading="lazy" alt="ibm logo">
              </li>
              <li class="splide__slide">
                <img
                  src="<?php
                  echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/dp-world-logo.svg'; ?>"
                  loading="lazy" alt="dp-world-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="<?php
                  echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/kimberly-clark-logo.svg'; ?>"
                  loading="lazy" alt="kimberly-clark-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="<?php
                  echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/mckinsey-and-company-logo.svg'; ?>"
                  loading="lazy" alt="mckinsey-and-company-logo">
              </li>
            </ul>
          </div>
        </div>
        <div class="display-none w-embed w-script">
          <script>
            document.addEventListener("DOMContentLoaded", function() {
              function slider2() {
                let splideTarget = "[slider-2]";
                let splideTargetEl = document.querySelector(`${splideTarget}`);
                if (!splideTargetEl) return;
                var options = {
                  /*suggested options*/
                  type: "loop", //'fade', //"slide", //"loop",
                  arrows: false,
                  pagination: false,
                  /*custom options*/
                  rewind: true,
                  fixedWidth: "auto",
                  perMove: 1,
                  gap: 36,
                  // autoplay: true,
                  pauseOnHover: true,
                  updateOnMove: true,
                  autoScroll: {
                    speed: 0.5
                  },
                  intersection: {
                    inView: {
                      autoplay: true
                    },
                    outView: {
                      autoplay: false
                    }
                  }
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

              setTimeout(function() {
                slider2();
              }, 500);
            });
          </script>
        </div>
        <div slider-3="" class="splide">
          <div class="splide__track">
            <ul class="splide__list items-center">
              <li class="splide__slide">
                <img
                  src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688c880c4770292a948560dc_ratelinx-logo.svg"
                  loading="lazy" alt="ratelinx-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688c880d83f8490edb0402c4_omp-logo.svg"
                  loading="lazy" alt="omp-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688c880c15668191452d2493_lockheed-marting-logo.svg"
                  loading="lazy" alt="lockheed-marting-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688c880df7f2a214364cff23_uber-freight-logo.svg"
                  loading="lazy" alt="uber-freight-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688c880c9667b3a9ce6a1f34_clorox-logo.svg"
                  loading="lazy" alt="clorox-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688c880c1bd0bd362260d09d_gartner-logo.svg"
                  loading="lazy" alt="gartner-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688c880c6cac07a59a5140a9_johnson-and-johnson-logo.svg"
                  loading="lazy" alt="johnson-and-johnson-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688c880cf0c4c0c5257ec62b_georgia-pacific-logo.svg"
                  loading="lazy" alt="georgia-pacific-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688c880c631104c6bc6c3116_astrazeneca-logo.svg"
                  loading="lazy" alt="astrazeneca-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688c880dabfe3eb2b60847f8_manhattan-logo.svg"
                  loading="lazy" alt="manhattan-logo">
              </li>
              <li class="splide__slide">
                <img
                  src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688c880cc814f568550bb1ca_scheneider-electric-logo.svg"
                  loading="lazy" alt="scheneider-electric-logo">
              </li>
            </ul>
          </div>
        </div>
        <div class="display-none w-embed w-script">
          <script>
            document.addEventListener("DOMContentLoaded", function() {
              function slider3() {
                let splideTarget = "[slider-3]";
                let splideTargetEl = document.querySelector(`${splideTarget}`);
                if (!splideTargetEl) return;
                var options = {
                  /*suggested options*/
                  type: "loop", //'fade', //"slide", //"loop",
                  arrows: false,
                  pagination: false,
                  /*custom options*/
                  rewind: true,
                  fixedWidth: "auto",
                  perMove: 1,
                  gap: 36,
                  // autoplay: true,
                  pauseOnHover: true,
                  updateOnMove: true,
                  autoScroll: {
                    speed: -0.5
                  },
                  intersection: {
                    inView: {
                      autoplay: true
                    },
                    outView: {
                      autoplay: false
                    }
                  }
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

              setTimeout(function() {
                slider3();
              }, 500);
            });
          </script>
        </div>
      </div>
      <div>
        <div class="site-padding">
          <div class="w-layout-blockcontainer max-w-664 text-center w-container">
            <div class="flex justify-between gap-20 sm:flex-col">
              <div>
                <div class="font-family-secondary text-36 tracking-[3.6px]">1000+</div>
                <div class="font-semibold text-md">Podcast Episodes</div>
              </div>
              <div class="w-1 bg-white/25"></div>
              <div>
                <div class="font-family-secondary text-36 tracking-[3.6px]">400K+</div>
                <div class="font-semibold text-md">Social Followers</div>
              </div>
              <div class="w-1 bg-white/25"></div>
              <div>
                <div class="font-family-secondary text-36 tracking-[3.6px]">7M+</div>
                <div class="font-semibold text-md">Downloads</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
