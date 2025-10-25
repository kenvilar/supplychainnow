<?php

if ( ! function_exists( 'work_with_us_trusted_by_community_slider_reverse_shortcode' ) ) {
	function work_with_us_trusted_by_community_slider_reverse_shortcode( $atts, $content = null ) {
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
    <div slider-3="" class="splide">
      <div class="splide__track">
        <ul class="splide__list items-center">
					<?php
					if ( ! empty( $section['Image_Slider_2'] ) ):
						foreach ( $section['Image_Slider_2'] as $idx => $image ):
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
								echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/ratelinx-logo.svg'; ?>"
                loading="lazy" alt="ratelinx-logo">
            </li>
            <li class="splide__slide">
              <img
                src="<?php
								echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/omp-logo.svg'; ?>"
                loading="lazy" alt="omp-logo">
            </li>
            <li class="splide__slide">
              <img
                src="<?php
								echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/lockheed-marting-logo.svg'; ?>"
                loading="lazy" alt="lockheed-marting-logo">
            </li>
            <li class="splide__slide">
              <img
                src="<?php
								echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/uber-freight-logo.svg'; ?>"
                loading="lazy" alt="uber-freight-logo">
            </li>
            <li class="splide__slide">
              <img
                src="<?php
								echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/clorox-logo.svg'; ?>"
                loading="lazy" alt="clorox-logo">
            </li>
            <li class="splide__slide">
              <img
                src="<?php
								echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/gartner-logo.svg'; ?>"
                loading="lazy" alt="gartner-logo">
            </li>
            <li class="splide__slide">
              <img
                src="<?php
								echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/johnson-and-johnson-logo.svg'; ?>"
                loading="lazy" alt="johnson-and-johnson-logo">
            </li>
            <li class="splide__slide">
              <img
                src="<?php
								echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/georgia-pacific-logo.svg'; ?>"
                loading="lazy" alt="georgia-pacific-logo">
            </li>
            <li class="splide__slide">
              <img
                src="<?php
								echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/astrazeneca-logo.svg'; ?>"
                loading="lazy" alt="astrazeneca-logo">
            </li>
            <li class="splide__slide">
              <img
                src="<?php
								echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/manhattan-logo.svg'; ?>"
                loading="lazy" alt="manhattan-logo">
            </li>
            <li class="splide__slide">
              <img
                src="<?php
								echo get_stylesheet_directory_uri() . '/assets/img/work-with-us/scheneider-electric-logo.svg'; ?>"
                loading="lazy" alt="scheneider-electric-logo">
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
							lazyLoad: "nearby", //boost performance
							drag: false, //boost performance
							speed: 400, //boost performance
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

					setTimeout(function () {
						slider3();
					}, 500);
				});
      </script>
    </div>
		<?php
		return ob_get_clean();
	}
}

add_action( 'init', function () {
	add_shortcode( 'work_with_us_trusted_by_community_slider_reverse',
		'work_with_us_trusted_by_community_slider_reverse_shortcode' );
} );