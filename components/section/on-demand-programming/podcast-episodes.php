<?php

?>
<section class="section">
  <div class="site-padding sm:py-60 pb-80">
    <div class="w-layout-blockcontainer max-w-1372 relative w-container">
      <div class="mb-52">
        <div class="mb-20">
          <h2 class="text-center">Podcast Episodes</h2>
        </div>
        <?php
        get_template_part("components/line-with-blinking-dot"); ?>
      </div>
      <div class="relative">
        <div class="w-layout-blockcontainer max-w-1252 w-container">
          <div slider-1="" class="splide">
            <div class="splide__track">
              <div class="splide__list">
                <?php
                echo get_template_part("components/ui/card2", null, [
                  "q" => [
                    "posts_per_page" => -1,
                    'search_title' => 'episode',
                    'no_found_rows' => true,  // set true if not paginating
                    'update_post_meta_cache' => false, // set false if not reading lots of meta
                    'update_post_term_cache' => false,
                    "meta_query" => [
                      "relation" => "AND",
                      [
                        'key' => 'episode_title',
                        'value' => 'episode',
                        'compare' => 'LIKE',
                      ],
                      [
                        "key" => "_wp_page_template",
                        "value" => "episode-detail.php",
                        "compare" => "=",
                      ],
                      [
                        "key" => "select_media_type",
                        "value" => ["podcast"],
                        "compare" => "IN",
                        "type" => "CHAR",
                      ],
                    ],
                  ],
                  "attributes" => [],
                  "classNames" => "splide__slide",
                  "noItemsFound" => "",
                ]); ?>
              </div>
            </div>
            <?php
            get_template_part("components/splide-arrows"); ?>
          </div>
          <div class="display-none w-embed">
            <style>
							[slider-1] .splide__arrow {
								background: transparent;
							}
            </style>
          </div>
          <div class="display-none w-embed w-script">
            <script>
              document.addEventListener("DOMContentLoaded", function() {
                function slider1() {
                  let splideTarget = "[slider-1]";
                  let splideTargetEl = document.querySelector(`${splideTarget}`);
                  if (!splideTargetEl) return;
                  var options = {
                    /*suggested options*/
                    type: "slide", //'fade', //"slide", //"loop",
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
                      speed: 1
                    },
                    intersection: {
                      inView: {
                        autoplay: false
                      },
                      outView: {
                        autoplay: false
                      }
                    },
                    breakpoints: {
                      991: {
                        // 		type: 'slide',
                        perPage: 2,
                        padding: { left: 42, right: 42 }
                        // 		perMove: 1,
                        // 		fixedWidth: '100%',
                        // 		padding: { left: 0, right: 0 },
                      },
                      767: {
                        perPage: 1,
                        gap: 50,
                        padding: { left: 42, right: 42 }
                      }
                    }
                  };
                  var splide = new Splide(`${splideTarget}`, options);
                  splide.mount();
                }

                setTimeout(function() {
                  slider1();
                }, 500);
              });
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
