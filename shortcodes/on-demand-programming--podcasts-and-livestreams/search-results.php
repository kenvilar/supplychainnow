<?php

if ( ! function_exists( 'on_demand_podcasts_and_livestreams_search_results_shortcode' ) ) {
	function on_demand_podcasts_and_livestreams_search_results_shortcode() {
		ob_start();
		get_template_part( 'components/ui/search_results', null, [
			'media_type' => 'podcasts-and-livestreams',
		] );

		return ob_get_clean();
	}
}

add_action( 'init', function () {
	add_shortcode( 'on_demand_podcasts_and_livestreams_search_results',
		'on_demand_podcasts_and_livestreams_search_results_shortcode' );
} );