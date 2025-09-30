<?php
/**
 * Shortcode: [home_network_partners_cards]
 *
 * Renders the Network Partners cards from the current post's ACF field
 * 'Network_Partners_Section' → 'Cards'. This shortcode does not accept attributes.
 */

if ( ! function_exists( 'scn_home_network_partners_cards_shortcode' ) ) {
	function scn_home_network_partners_cards_shortcode( $atts = [] ) {
		$postID   = get_the_ID();
		$section  = get_field( 'Network_Partners_Section', $postID );

		ob_start();
		if ( ! empty( $section['Cards'] ) ) :
			foreach ( $section['Cards'] as $index => $item ) :
				$image = isset( $item['Card_Image'] ) ? esc_url( $item['Card_Image'] ) : '';
				$link = isset( $item['Card_Link'] ) ? esc_url( $item['Card_Link'] ) : '#';
				?>
				<a href="<?= $link; ?>" class="relative w-full overflow-hidden group w-inline-block">
					<div
						class="rounded-12 border border-cargogrey/25 bg-white flex justify-center items-center py-28 px-12 h-full group-hover-shadow1">
						<img src="<?= $image; ?>" loading="lazy" alt="network-partner logo"
						     class="grayscale-0 opacity-100 group-hover:grayscale group-hover:opacity-20 transition-all"/>
					</div>
					<div
						class="absolute absolute--full w-full h-full flex items-center justify-center translate-y-[100%] group-hover:translate-y-0 transition-all duration-500">
						<div class="btn primary">Click for more</div>
					</div>
				</a>
			<?php
			endforeach;
		else :
			?>
			<a href="/easypost" class="relative w-full overflow-hidden group w-inline-block">
				<div
					class="rounded-12 border border-cargogrey/25 bg-white flex justify-center items-center py-28 px-12 h-full group-hover-shadow1">
					<img src="<?php
					echo esc_url( get_stylesheet_directory_uri() . '/assets/img/home/easypost.svg' ); ?>" loading="lazy"
					     alt="easypost logo"
					     class="grayscale-0 opacity-100 group-hover:grayscale group-hover:opacity-20 transition-all"/>
				</div>
				<div
					class="absolute absolute--full w-full h-full flex items-center justify-center translate-y-[100%] group-hover:translate-y-0 transition-all duration-500">
					<div class="btn primary">Click for more</div>
				</div>
			</a>
			<a href="/us-bank" class="relative w-full overflow-hidden group w-inline-block">
				<div
					class="rounded-12 border border-cargogrey/25 bg-white flex justify-center items-center py-28 px-12 h-full group-hover-shadow1">
					<img src="<?php
					echo esc_url( get_stylesheet_directory_uri() . '/assets/img/home/us-bank.svg' ); ?>" loading="lazy"
					     alt="us-bank logo"
					     class="grayscale-0 opacity-100 group-hover:grayscale group-hover:opacity-20 transition-all">
				</div>
				<div
					class="absolute absolute--full w-full h-full flex items-center justify-center translate-y-[100%] group-hover:translate-y-0 transition-all duration-500">
					<div class="btn primary">Click for more</div>
				</div>
			</a>
			<a href="/enable" class="relative w-full overflow-hidden group w-inline-block">
				<div
					class="rounded-12 border border-cargogrey/25 bg-white flex justify-center items-center py-28 px-12 h-full group-hover-shadow1">
					<img src="<?php
					echo esc_url( get_stylesheet_directory_uri() . '/assets/img/home/enable.svg' ); ?>" loading="lazy"
					     alt="enable logo"
					     class="grayscale-0 opacity-100 group-hover:grayscale group-hover:opacity-20 transition-all">
				</div>
				<div
					class="absolute absolute--full w-full h-full flex items-center justify-center translate-y-[100%] group-hover:translate-y-0 transition-all duration-500">
					<div class="btn primary">Click for more</div>
				</div>
			</a>
		<?php
		endif;

		return ob_get_clean();
	}
}

// Register the shortcode on init
add_action( 'init', function () {
	add_shortcode( 'home_network_partners_cards', 'scn_home_network_partners_cards_shortcode' );
} );