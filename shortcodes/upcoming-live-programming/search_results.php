<?php
if ( ! function_exists( 'upcoming_live_programming_search_results_shortcode' ) ) {
	function upcoming_live_programming_search_results_shortcode() {
		ob_start();
		get_template_part( 'components/ui/search_results', null, [
			'media_type' => 'all-events',
		] );
		
		return ob_get_clean();
	}
}

add_action( 'init', function () {
	add_shortcode( 'upcoming_live_programming_search_results', 'upcoming_live_programming_search_results_shortcode' );
} );