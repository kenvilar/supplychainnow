<?php
/**
 * Shortcode: [home_hero_slider]
 *
 * Renders the home hero image slider using ACF field 'Hero_Section' → 'Hero_Image_Slider'.
 * This shortcode does not accept any attributes.
 */

if ( ! function_exists( 'scn_home_hero_slider_shortcode' ) ) {
	function scn_home_hero_slider_shortcode( $atts = [] ) {
		$postID  = get_the_ID();
		$section = get_field( 'Hero_Section', $postID );
		$images  = is_array( $section ) && ! empty( $section['Hero_Image_Slider'] ) ? (array) $section['Hero_Image_Slider'] : [];

		ob_start();
		?>
		<div slider-1 class="splide">
			<div class="splide__track">
				<div class="splide__list">
					<?php
					if ( ! empty( $images ) ) : ?>
						<?php
						foreach ( $images as $idx => $image_url ) : $image_url = esc_url( $image_url ); ?>
							<img
								src="<?= $image_url; ?>"
								loading="lazy" alt="homepage-slider-<?= (int) $idx + 1; ?>"
								class="splide__slide overflow-hidden image rounded-l-24 md:rounded-24">
						<?php
						endforeach; ?>
					<?php
					else : ?>
						<div class="splide__slide">
							<img src="<?php
							echo esc_url( get_stylesheet_directory_uri() . '/assets/img/home/homepage-slider-1.avif' ); ?>"
							     loading="lazy" alt="homepage-slider-1" class="overflow-hidden image rounded-l-24 md:rounded-24">
						</div>
						<div class="splide__slide">
							<img src="<?php
							echo esc_url( get_stylesheet_directory_uri() . '/assets/img/home/homepage-slider-2.avif' ); ?>"
							     loading="lazy" alt="homepage-slider-2" class="overflow-hidden image rounded-l-24 md:rounded-24">
						</div>
						<div class="splide__slide">
							<img src="<?php
							echo esc_url( get_stylesheet_directory_uri() . '/assets/img/home/homepage-slider-3.avif' ); ?>"
							     loading="lazy" alt="homepage-slider-3" class="overflow-hidden image rounded-l-24 md:rounded-24">
						</div>
						<div class="splide__slide">
							<img src="<?php
							echo esc_url( get_stylesheet_directory_uri() . '/assets/img/home/homepage-slider-4.avif' ); ?>"
							     loading="lazy" alt="homepage-slider-4" class="overflow-hidden image rounded-l-24 md:rounded-24">
						</div>
						<div class="splide__slide">
							<img src="<?php
							echo esc_url( get_stylesheet_directory_uri() . '/assets/img/home/homepage-slider-5.avif' ); ?>"
							     loading="lazy" alt="homepage-slider-5" class="overflow-hidden image rounded-l-24 md:rounded-24">
						</div>
						<div class="splide__slide">
							<img src="<?php
							echo esc_url( get_stylesheet_directory_uri() . '/assets/img/home/homepage-slider-6.avif' ); ?>"
							     loading="lazy" alt="homepage-slider-6" class="overflow-hidden image rounded-l-24 md:rounded-24">
						</div>
						<div class="splide__slide">
							<img src="<?php
							echo esc_url( get_stylesheet_directory_uri() . '/assets/img/home/homepage-slider-7.avif' ); ?>"
							     loading="lazy" alt="homepage-slider-7" class="overflow-hidden image rounded-l-24 md:rounded-24">
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
						/*autoScroll: { speed: 1 },*/
						intersection: {
							inView: {autoplay: true},
							outView: {autoplay: false}
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
		<?php
		return ob_get_clean();
	}
}

// Register the shortcode on init
add_action( 'init', function () {
	add_shortcode( 'home_hero_slider', 'scn_home_hero_slider_shortcode' );
} );