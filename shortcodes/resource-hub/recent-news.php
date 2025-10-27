<?php

if ( ! function_exists( 'resource_hub_recent_news_shortcode' ) ) {
  function resource_hub_recent_news_shortcode( $atts, $content = null ) {
    $posts_per_page = $args['posts_per_page'] ?? - 1;

    $defaults = array(
      'class' => '',
      'id'    => '',
    );

    $raw_atts = is_array( $atts ) ? $atts : array();
    $atts     = shortcode_atts( $defaults, $raw_atts );

    $class = esc_attr( $atts['class'] );
    $id    = esc_attr( $atts['id'] );
    ob_start();
    ?>
    <div slider-5="" class="splide">
      <div class="splide__track">
        <div class="splide__list">
          <?php
          echo get_template_part( 'components/ui/card2-post', null, [
            'q'             => [
              'posts_per_page' => $posts_per_page,
              "tax_query"      => [
                [
                  "taxonomy" => "category",
                  "field"    => "slug",
                  "terms"    => [ "podcast-episode" ],
                  "operator" => "NOT IN",
                ],
              ],
            ],
            'attributes'    => [],
            'classNames'    => 'splide__slide',
            'noItemsFound'  => '',
            'taxQueryTerms' => [ 'news' ],
          ] );
          ?>
        </div>
      </div>
      <?php
      get_template_part( 'components/splide-arrows' );
      ?>
    </div>
    <div class="display-none w-embed">
      <style>
				[slider-5] .splide__arrow {
					background: transparent;
				}
      </style>
    </div>
    <div class="display-none w-embed w-script">
      <script>
				document.addEventListener("DOMContentLoaded", function () {
					function slider5() {
						let splideTarget = "[slider-5]";
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
							lazyLoad: "nearby", //boost performance
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
									padding: {left: 42, right: 42}
									// 		perMove: 1,
									// 		fixedWidth: '100%',
									// 		padding: { left: 0, right: 0 },
								},
								767: {
									perPage: 1,
									gap: 50,
									padding: {left: 42, right: 42}
								}
							}
						};
						var splide = new Splide(`${splideTarget}`, options);
						splide.mount();
					}

					setTimeout(function () {
						slider5();
					}, 500);
				});
      </script>
    </div>
    <?php
    return ob_get_clean();
  }
}

add_action( 'init', function () {
  add_shortcode( 'resource_hub_recent_news', 'resource_hub_recent_news_shortcode' );
} );