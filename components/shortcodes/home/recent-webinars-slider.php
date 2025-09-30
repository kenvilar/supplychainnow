<?php
/**
 * Shortcode: [home_recent_webinars_slider]
 *
 * Outputs a Splide slider of recent livestreams/webinars using components/ui/card1.
 * This shortcode does not accept any attributes.
 */

if ( ! function_exists( 'scn_home_recent_webinars_slider_shortcode' ) ) {
	function scn_home_recent_webinars_slider_shortcode( $atts = [] ) {
		ob_start();
		?>
		<div slider-3 class="splide">
			<div class="splide__track">
				<div class="splide__list">
					<?php
					echo get_template_part( 'components/ui/card1', null, [
						'q'             => [
							'no_found_rows'          => true,  // set true if not paginating
							'update_post_meta_cache' => false, // set false if not reading lots of meta
							'update_post_term_cache' => false,
							"meta_query"             => [
								[
									"relation" => "AND",
									[
										'key'     => '_wp_page_template',
										'value'   => [ 'livestream-detail.php', 'webinar-detail.php' ],
										'compare' => 'IN',
										'type'    => 'CHAR',
									],
								],
							],
						],
						'card_size'     => 'small',
						"post_per_page" => 8,
						'post_type'     => [ 'page' ],
						'attributes'    => [],
						'classNames'    => 'splide__slide',
					] );
					?>
				</div>
			</div>
			<?php
			get_template_part( 'components/splide-arrows' ); ?>
			<div class="display-none w-embed">
				<style>
					[slider-3] .splide__arrow {
						background: transparent;
					}
				</style>
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
										perPage: 2,
										padding: {left: 42, right: 42}
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
							slider3();
						}, 500);
					});
				</script>
			</div>
		</div>
		<?php
		return ob_get_clean();
	}
}

// Register the shortcode on init
add_action( 'init', function () {
	add_shortcode( 'home_recent_webinars_slider', 'scn_home_recent_webinars_slider_shortcode' );
} );