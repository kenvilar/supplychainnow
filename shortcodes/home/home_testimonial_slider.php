<?php
/**
 * Shortcode: [home_testimonial_slider]
 *
 * Renders the testimonials Splide slider using ACF field
 * 'What_the_Supply_Chain_Community_Has_to_Say_Section'.
 * This shortcode does not accept any attributes.
 */

if ( ! function_exists( 'scn_home_testimonial_slider_shortcode' ) ) {
	function scn_home_testimonial_slider_shortcode( $atts = [] ) {
		$postID  = get_the_ID();
		$section = get_field( 'What_the_Supply_Chain_Community_Has_to_Say_Section', $postID );

		ob_start();
		?>
		<div slider-4 class="splide">
			<div class="splide__track pb-20">
				<div class="splide__list">
					<?php
					if ( ! empty( $section['Testimonials'] ) ) :
						foreach ( $section['Testimonials'] as $idx => $testimonial ) :
							$testimonial = $testimonial['Item'];
							?>
							<div class="splide__slide">
								<div class="card v2">
									<div class="w-full flex flex-col justify-between gap-52 p-32">
										<div>
											<div class="mb-20">
												<div class="size-40 overflow-hidden rounded-full">
													<img src="<?php
													echo esc_url( get_the_post_thumbnail_url( $testimonial->ID, 'full' ) ); ?>" loading="lazy"
													     alt="" class="image">
												</div>
											</div>
											<div class="text-xs tracking-[1.35px] w-richtext">
												<?php
												echo esc_html( get_post_meta( $testimonial->ID, 'qode_testimonial-text', true ) ); ?>
											</div>
										</div>
										<div>
											<div class="mb-8">
												<div class="font-family-secondary text-sm tracking-[1.52px]">
													<?php
													echo esc_html( get_post_meta( $testimonial->ID, 'qode_testimonial-author', true ) ); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php
						endforeach; ?>
					<?php
					else :
						$q = new WP_Query( [
							'post_type'      => 'testimonials',
							'post_status'    => 'publish',
							'posts_per_page' => - 1,
							'offset'         => 0,
							'orderby'        => [ 'menu_order' => 'ASC', 'date' => 'DESC' ],
						] );

						if ( $q->have_posts() ) :
							while ( $q->have_posts() ) : $q->the_post(); ?>
								<div class="splide__slide">
									<div class="card v2">
										<div class="w-full flex flex-col justify-between gap-52 p-32">
											<div>
												<div class="mb-20">
													<div class="size-40 overflow-hidden rounded-full">
														<img src="<?php
														the_post_thumbnail_url(); ?>" loading="lazy" alt="" class="image">
													</div>
												</div>
												<div class="text-xs tracking-[1.35px] w-richtext">
													<?php
													echo esc_html( get_post_meta( get_the_ID(), 'qode_testimonial-text', true ) ); ?>
												</div>
											</div>
											<div>
												<div class="mb-8">
													<div class="font-family-secondary text-sm tracking-[1.52px]">
														<?php
														echo esc_html( get_post_meta( get_the_ID(), 'qode_testimonial-author', true ) ); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php
							endwhile;
							wp_reset_postdata(); ?>
						<?php
						endif; ?>
					<?php
					endif; ?>
				</div>
			</div>
			<?php
			get_template_part( 'components/splide-arrows' ); ?>
			<div class="display-none w-embed">
				<style>
					[slider-4] .splide__list {
						align-items: center;
					}
					[slider-4] .splide__slide.is-active {
						transform: scale(1.2);
						margin: 7vh 0;
						transition: transform 800ms ease-in-out;
					}
					[slider-4] .splide__slide.is-active .card {
						box-shadow: 0px 5px 25px 0px rgba(49, 63, 74, 0.25);
					}
					[slider-4] .splide__slide {
						width: 315px;
					}
					@media screen and (max-width: 767px) {
						[slider-4] .splide__slide.is-active {
							transform: scale(1);
							margin: 0;
							transition: transform 800ms ease-in-out;
						}
						[slider-4] .splide__slide {
							width: 100%;
						}
						[slider-4] .splide__slide.is-active .card {
							box-shadow: 0 0 0 0 transparent;
						}
					}
				</style>
			</div>
			<div class="display-none w-embed w-script">
				<script>
					document.addEventListener("DOMContentLoaded", function () {
						function slider4() {
							let splideTarget = "[slider-4]";
							let splideTargetEl = document.querySelector(`${splideTarget}`);
							if (!splideTargetEl) return;
							var options = {
								/*suggested options*/
								type: "loop", //'fade', //"slide", //"loop",
								arrows: true,
								pagination: false,
								/*custom options*/
								rewind: true,
								perPage: 3,
								autoplay: false,
								pauseOnHover: true,
								focus: "center",
								updateOnMove: true,
								trimSpace: true,
								autoWidth: true,
								gap: "5%",
								start: 1,
								intersection: {inView: {autoplay: false}, outView: {autoplay: false}},
								breakpoints: {
									767: {
										type: "slide",
										perPage: 1,
										perMove: 1,
										start: 0,
										gap: 50,
										padding: {left: 42, right: 42},
										fixedWidth: "100%"
									}
								}
							};
							var splide = new Splide(`${splideTarget}`, options);
							splide.mount();
						}

						setTimeout(function () {
							slider4();
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
	add_shortcode( 'home_testimonial_slider', 'scn_home_testimonial_slider_shortcode' );
} );