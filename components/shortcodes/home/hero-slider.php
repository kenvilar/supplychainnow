<?php
/**
 * Shortcode: [home_hero_slider]
 *
 * Renders the hero image slider using ACF data, following the provided
 * template exactly (no shortcode attributes). It attempts to read the
 * images from $section['Hero_Image_Slider'] if available (as in template
 * parts), otherwise falls back to get_field('Hero_Image_Slider') on the
 * current post. If no images are found, it uses the default theme assets.
 */

if ( ! function_exists( 'scn_hero_slider_shortcode' ) ) {
	function scn_hero_slider_shortcode( $atts = [] ) {
		global $section;

		$images = [];

		// Prefer the same structure as the provided code: $section['Hero_Image_Slider']
		if ( isset( $section ) && is_array( $section ) && ! empty( $section['Hero_Image_Slider'] ) ) {
			$images = (array) $section['Hero_Image_Slider'];
		} else {
			// Fallback to ACF on the current post (field name: Hero_Image_Slider)
			$acf_images = get_field( 'Hero_Image_Slider' );
			if ( ! empty( $acf_images ) ) {
				$images = (array) $acf_images;
			}
		}

		// Normalize images to URLs (in case ACF returns arrays/IDs)
		$normalized = [];
		foreach ( $images as $img ) {
			if ( is_string( $img ) ) {
				$normalized[] = esc_url( $img );
			} elseif ( is_array( $img ) ) {
				if ( ! empty( $img['url'] ) ) {
					$normalized[] = esc_url( $img['url'] );
				}
			} elseif ( is_numeric( $img ) ) {
				$url = wp_get_attachment_url( (int) $img );
				if ( $url ) {
					$normalized[] = esc_url( $url );
				}
			}
		}

		$images    = array_values( array_filter( $normalized ) );
		$theme_uri = get_stylesheet_directory_uri();

		ob_start();
		?>
		<div class="absolute absolute--r w-full h-full z--1 flex justify-end items-center md:relative">
			<div class="w-[50%] h-540 xs:h-full md:w-full">
				<div class="max-w-624 w-full h-full ml-auto md:max-w-full">
					<div slider-1 class="splide">
						<div class="splide__track">
							<div class="splide__list">
								<?php
								if ( ! empty( $images ) ) : ?>
									<?php
									foreach ( $images as $idx => $image ) : ?>
										<img
											src="<?= $image; ?>"
											loading="lazy" alt="homepage-slider-<?= (int) ( $idx + 1 ); ?>"
											class="splide__slide overflow-hidden image rounded-l-24 md:rounded-24">
									<?php
									endforeach; ?>
								<?php
								else: ?>
									<div class="splide__slide">
										<img
											src="<?php
											echo $theme_uri . '/assets/img/home/homepage-slider-1.avif'; ?>"
											loading="lazy" alt="homepage-slider-1"
											class="overflow-hidden image rounded-l-24 md:rounded-24">
									</div>
									<div class="splide__slide">
										<img
											src="<?php
											echo $theme_uri . '/assets/img/home/homepage-slider-2.avif'; ?>"
											loading="lazy" alt="homepage-slider-2"
											class="overflow-hidden image rounded-l-24 md:rounded-24">
									</div>
									<div class="splide__slide">
										<img
											src="<?php
											echo $theme_uri . '/assets/img/home/homepage-slider-3.avif'; ?>"
											loading="lazy" alt="homepage-slider-3"
											class="overflow-hidden image rounded-l-24 md:rounded-24">
									</div>
									<div class="splide__slide">
										<img
											src="<?php
											echo $theme_uri . '/assets/img/home/homepage-slider-4.avif'; ?>"
											loading="lazy" alt="homepage-slider-4"
											class="overflow-hidden image rounded-l-24 md:rounded-24">
									</div>
									<div class="splide__slide">
										<img
											src="<?php
											echo $theme_uri . '/assets/img/home/homepage-slider-5.avif'; ?>"
											loading="lazy" alt="homepage-slider-5"
											class="overflow-hidden image rounded-l-24 md:rounded-24">
									</div>
									<div class="splide__slide">
										<img
											src="<?php
											echo $theme_uri . '/assets/img/home/homepage-slider-6.avif'; ?>"
											loading="lazy" alt="homepage-slider-6"
											class="overflow-hidden image rounded-l-24 md:rounded-24">
									</div>
									<div class="splide__slide">
										<img
											src="<?php
											echo $theme_uri . '/assets/img/home/homepage-slider-7.avif'; ?>"
											loading="lazy" alt="homepage-slider-7"
											class="overflow-hidden image rounded-l-24 md:rounded-24">
									</div>
								<?php
								endif; ?>
							</div>
						</div>
					</div>
					<script>
						document.addEventListener("DOMContentLoaded", function () {
							function slider1() {
								let splideTarget = "[slider-1]";
								let splideTargetEl = document.querySelector(`${splideTarget}`);
								if (!splideTargetEl) return;
								var options = {
									/*suggested options*/
									type: "fade", //'fade', //"slide", //"loop",
									arrows: false,
									pagination: false,
									/*custom options*/
									rewind: true,
									fixedWidth: "100%",
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
											autoplay: true
										},
										outView: {
											autoplay: false
										}
									},
									breakpoints: {
										991: {
											fixedWidth: "100%"
										},
										479: {
											autoHeight: true,
											fixedHeight: "auto"
										}
									}
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
		<?php
		return ob_get_clean();
	}
}

// Register shortcode
add_action( 'init', function () {
	add_shortcode( 'home_hero_slider', 'scn_hero_slider_shortcode' );
} );
