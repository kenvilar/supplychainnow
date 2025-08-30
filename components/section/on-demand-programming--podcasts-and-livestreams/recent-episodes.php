<?php

?>
<section class="section">
  <div class="site-padding sm:py-60 pb-80">
    <div class="w-layout-blockcontainer max-w-1372 relative w-container">
      <div class="mb-52">
        <div class="mb-20">
          <h2 class="text-center">Recent Episodes</h2>
        </div>
        <?php
        get_template_part('components/line-with-blinking-dot', null, [
          'maxWidthClassnames' => ''
        ]);
        ?>
      </div>
      <div class="relative">
        <div class="w-layout-blockcontainer max-w-1252 w-container">
          <div slider-1="" class="splide">
            <div class="splide__track">
              <div class="splide__list">
                <?php
                /*echo get_template_part('components/ui/card2', null, [
                  'q' => [
                    'posts_per_page' => -1,
                    "meta_query" => [
                      "relation" => "AND",
                      [
                        "relation" => "OR",
                        [
                          "key" => "_wp_page_template",
                          "value" => "episode-detail.php",
                          "compare" => "=",
                        ],
                        [
                          "key" => "_wp_page_template",
                          "value" => "livestream-detail.php",
                          "compare" => "=",
                        ],
                      ],
                      [
                        "key" => "select_media_type",
                        "value" => ["podcast", "livestream"],
                        "compare" => "IN",
                        "type" => "CHAR",
                      ],
                    ],
                  ],
                  'attributes' => [],
                  'classNames' => 'splide__slide',
                  'noItemsFound' => '',
                ]);*/
                echo get_template_part('components/ui/card1', null, [
                  'q' => [
                    "meta_query" => [
                      [
                        "relation" => "AND",
                        [
                          'key' => '_wp_page_template',
                          'value' => ['episode-detail.php', 'livestream-detail.php',],
                          'compare' => 'IN',
                          'type' => 'CHAR',
                        ],
                      ],
                    ],
                  ],
                  'q_post' => [],
                  'post_per_page' => 500,
                  'card_size' => 'small',
                  'attributes' => [],
                  'classNames' => 'splide__slide',
                  'noItemsFound' => '',
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
                    lazyLoad: 'nearby', //boost performance
                    drag: false, //boost performance
                    speed: 400, //boost performance
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