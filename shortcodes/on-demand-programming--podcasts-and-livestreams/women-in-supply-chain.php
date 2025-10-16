<?php

if ( ! function_exists( 'on_demand_podcasts_and_livestreams_women_in_supply_chain_shortcode' ) ) {
	function on_demand_podcasts_and_livestreams_women_in_supply_chain_shortcode() {
		$pageID  = get_the_ID();
		$section = get_field( 'Women_in_Supply_Chain_Section', $pageID );
		ob_start();
		?>
		<div slider-3="" class="splide">
			<div class="splide__track">
				<div class="splide__list">
					<?php
					if ( ! empty( $section['Women_in_Supply_Chain_Repeater'] ) ) :
						foreach ( $section['Women_in_Supply_Chain_Repeater'] as $idx => $item ) :
							$item = $item['Item'];
							echo get_template_part( 'components/ui/card-for-slider', null, [
								"item" => $item,
							] );
						endforeach;
						wp_reset_postdata();
					else:
						echo get_template_part( 'components/ui/card1', null, [
							'q'             => [
								"meta_query" => [
									[
										"relation" => "AND",
										[
											'key'     => '_wp_page_template',
											'value'   => [ 'episode-detail.php', 'livestream-detail.php', ],
											'compare' => 'IN',
											'type'    => 'CHAR',
										],
									],
								],
								'tax_query'  => [
									[
										'taxonomy' => 'tags',
										'field'    => 'slug',
										'terms'    => [ 'women-in-supply-chain' ],
									]
								],
							],
							'q_post'        => [
								"tax_query" => [
									'relationship' => "OR",
									[
										"taxonomy" => "category",
										"field"    => "name",
										"terms"    => [ "Podcast Episode", ],
										"operator" => "IN",
									],
									[
										'taxonomy' => 'tags',
										'field'    => 'slug',
										'terms'    => [ 'women-in-supply-chain' ],
									],
								],
							],
							'post_per_page' => 500,
							'card_size'     => 'small',
							'attributes'    => [],
							'classNames'    => 'splide__slide',
							'noItemsFound'  => '',
						] );
					endif;
					?>
				</div>
			</div>
			<?php
			get_template_part( 'components/splide-arrows' );
			?>
		</div>
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
	add_shortcode( 'on_demand_podcasts_and_livestreams_women_in_supply_chain',
		'on_demand_podcasts_and_livestreams_women_in_supply_chain_shortcode' );
} );