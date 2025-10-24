<?php

if ( ! function_exists( 'our_team_and_hosts_awards_shortcode' ) ) {
	function our_team_and_hosts_awards_shortcode( $atts, $content = null ) {
		$postId = get_the_ID();
		$group  = get_field( 'Awards_&_Recognitions', $postId );

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
    <div slider-1="" class="splide">
      <div class="splide__track overflow-visible!">
        <div class="splide__list">
					<?php
					if ( $group['Image_Slider'] ):
						foreach ( $group['Image_Slider'] as $image ):
							$image = esc_url( $image );
							?>
              <div class="splide__slide">
                <div class="awards-pentagon-block">
                  <img alt="" loading="lazy"
                       src="<?= $image; ?>"
                       class="image h-auto">
                </div>
              </div>
						<?php
						endforeach;
					else:
						?>
            <div class="splide__slide">
              <div class="awards-pentagon-block">
                <img alt="" loading="lazy"
                     src="<?php
								     echo get_stylesheet_directory_uri() . '/assets/img/our-team-and-hosts/team--awards-1.avif'; ?>"
                     class="image h-auto">
              </div>
            </div>
            <div class="splide__slide">
              <div class="awards-pentagon-block">
                <img alt="" loading="lazy"
                     src="<?php
								     echo get_stylesheet_directory_uri() . '/assets/img/our-team-and-hosts/team--awards-2.avif'; ?>"
                     class="image h-auto">
              </div>
            </div>
            <div class="splide__slide">
              <div class="awards-pentagon-block">
                <img alt="" loading="lazy"
                     src="<?php
								     echo get_stylesheet_directory_uri() . '/assets/img/our-team-and-hosts/team--awards-3.avif'; ?>"
                     class="image h-auto">
              </div>
            </div>
            <div class="splide__slide">
              <div class="awards-pentagon-block">
                <img alt="" loading="lazy"
                     src="<?php
								     echo get_stylesheet_directory_uri() . '/assets/img/our-team-and-hosts/team--awards-4.avif'; ?>"
                     class="image h-auto">
              </div>
            </div>
            <div class="splide__slide">
              <div class="awards-pentagon-block">
                <img alt="" loading="lazy"
                     src="<?php
								     echo get_stylesheet_directory_uri() . '/assets/img/our-team-and-hosts/team--awards-5.avif'; ?>"
                     class="image h-auto">
              </div>
            </div>
            <div class="splide__slide">
              <div class="awards-pentagon-block">
                <img alt="" loading="lazy"
                     src="<?php
								     echo get_stylesheet_directory_uri() . '/assets/img/our-team-and-hosts/team--awards-6.avif'; ?>"
                     class="image h-auto">
              </div>
            </div>
            <div class="splide__slide">
              <div class="awards-pentagon-block">
                <img alt="" loading="lazy"
                     src="<?php
								     echo get_stylesheet_directory_uri() . '/assets/img/our-team-and-hosts/team--awards-7.avif'; ?>"
                     class="image h-auto">
              </div>
            </div>
            <div class="splide__slide">
              <div class="awards-pentagon-block">
                <img alt="" loading="lazy"
                     src="<?php
								     echo get_stylesheet_directory_uri() . '/assets/img/our-team-and-hosts/team--awards-8.avif'; ?>"
                     class="image h-auto">
              </div>
            </div>
            <div class="splide__slide">
              <div class="awards-pentagon-block">
                <img alt="" loading="lazy"
                     src="<?php
								     echo get_stylesheet_directory_uri() . '/assets/img/our-team-and-hosts/team--awards-9.avif'; ?>"
                     class="image h-auto">
              </div>
            </div>
					<?php
					endif;
					?>
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
					document.addEventListener("DOMContentLoaded", function () {
						function slider1() {
							let splideTarget = "[slider-1]";
							let splideTargetEl = document.querySelector(`${splideTarget}`);
							if (!splideTargetEl) return;
							var options = {
								/*suggested options*/
								type: "loop", //'fade', //"slide", //"loop",
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
								lazyLoad: "nearby", //boost performance
								drag: false, //boost performance
								speed: 400, //boost performance
								autoScroll: {
									speed: 0.3
								},
								intersection: {
									inView: {
										//autoplay: true,
									},
									outView: {
										//autoplay: true,
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
							slider1();
						}, 500);
					});
        </script>
      </div>
    </div>
		<?php
		return ob_get_clean();
	}
}

add_action( 'init', function () {
	add_shortcode( 'our_team_and_hosts_awards', 'our_team_and_hosts_awards_shortcode' );
} );