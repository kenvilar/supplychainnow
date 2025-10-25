<?php

if ( ! function_exists( 'work_with_us_trusted_by_community_slider_shortcode' ) ) {
	function work_with_us_trusted_by_community_slider_shortcode( $atts, $content = null ) {
		$pageID  = get_the_ID();
		$section = get_field( 'Trusted_by_the_Supply_Chain_Community_Section', $pageID );

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
    <div slider-2="" class="splide">
      <div class="splide__track">
        <ul class="splide__list items-center">
					<?php
					if ( ! empty( $section['Image_Slider_1'] ) ):
						foreach ( $section['Image_Slider_1'] as $idx => $image ):
							$image = esc_url( $image );
							?>
              <li class="splide__slide">
                <img
                  class="h-57"
                  src="<?= $image; ?>"
                  loading="lazy" alt="logo">
              </li>
						<?php
						endforeach;
					else:
						?>
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
					<?php
					endif;
					?>
        </ul>
      </div>
    </div>
    <div class="display-none w-embed w-script">
      <script>
				document.addEventListener("DOMContentLoaded", function () {
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
							lazyLoad: "nearby", //boost performance
							drag: false, //boost performance
							speed: 400, //boost performance
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

					setTimeout(function () {
						slider2();
					}, 500);
				});
      </script>
    </div>
		<?php
		return ob_get_clean();
	}
}

add_action( 'init', function () {
	add_shortcode( 'work_with_us_trusted_by_community_slider', 'work_with_us_trusted_by_community_slider_shortcode' );
} );