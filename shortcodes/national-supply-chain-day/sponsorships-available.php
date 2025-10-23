<?php

if ( ! function_exists( 'national_supply_chain_day_sponsorships_available_shortcode' ) ) {
	function national_supply_chain_day_sponsorships_available_shortcode( $atts, $content = null ) {
		$pageID  = get_the_ID();
		$section = get_field( 'Sponsorships_Available_Section', $pageID );

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
    <div class="grid grid-cols-2 gap-16 sm:grid-cols-1">
			<?php
			if ( ! empty( $section['Images'] ) ) :
				foreach ( $section['Images'] as $idx => $image ) :
					$image = esc_url( $image );
					?>
          <div class="card">
            <div class="flex items-center justify-center h-92">
              <img
                class="image w-auto! fit-contain"
                src="<?= $image; ?>"
                loading="lazy" alt="">
            </div>
          </div>
				<?php
				endforeach;
			else:
				?>
        <div class="card">
          <div class="flex items-center justify-center h-92">
            <img
              src="<?php
							echo get_stylesheet_directory_uri() . '/assets/img/national-supply-chain-day/charlie-pesti.svg'; ?>"
              loading="lazy" alt="">
          </div>
        </div>
        <div class="card">
          <div class="flex items-center justify-center h-92">
            <img
              src="<?php
							echo get_stylesheet_directory_uri() . '/assets/img/national-supply-chain-day/illinois.svg'; ?>"
              loading="lazy" alt="">
          </div>
        </div>
        <div class="card">
          <div class="flex items-center justify-center h-92">
            <img
              src="<?php
							echo get_stylesheet_directory_uri() . '/assets/img/national-supply-chain-day/california-state-university-long-beach.svg'; ?>"
              loading="lazy" alt="">
          </div>
        </div>
        <div class="card">
          <div class="flex items-center justify-center h-92">
            <img
              src="<?php
							echo get_stylesheet_directory_uri() . '/assets/img/national-supply-chain-day/university-of-arkansas.svg'; ?>"
              loading="lazy" alt="">
          </div>
        </div>
        <div class="card">
          <div class="flex items-center justify-center h-92">
            <img
              src="<?php
							echo get_stylesheet_directory_uri() . '/assets/img/national-supply-chain-day/the-university-of-texas-at-dallas.svg'; ?>"
              loading="lazy" alt="">
          </div>
        </div>
        <div class="card">
          <div class="flex items-center justify-center h-92">
            <img
              src="<?php
							echo get_stylesheet_directory_uri() . '/assets/img/national-supply-chain-day/vector-global-logistics.svg'; ?>"
              loading="lazy" alt="">
          </div>
        </div>
			<?php
			endif;
			?>
    </div>
		<?php
		return ob_get_clean();
	}
}

add_action( 'init', function () {
	add_shortcode( 'national_supply_chain_day_sponsorships_available',
		'national_supply_chain_day_sponsorships_available_shortcode' );
} );