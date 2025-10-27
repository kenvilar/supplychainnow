<?php

if ( ! function_exists( 'resource_hub_search_results_shortcode' ) ) {
	function resource_hub_search_results_shortcode( $atts, $content = null ) {
		$defaults = array(
			'class' => '',
			'id'    => '',
		);

		$raw_atts = is_array( $atts ) ? $atts : array();
		$atts     = shortcode_atts( $defaults, $raw_atts );

		$class = esc_attr( $atts['class'] );
		$id    = esc_attr( $atts['id'] );
		ob_start();

		get_template_part( 'components/ui/search_results', null, [
			'post_type'    => 'post',
			'resource_hub' => true,
		] );

		return ob_get_clean();
	}
}

add_action( 'init', function () {
	add_shortcode( 'resource_hub_search_results', 'resource_hub_search_results_shortcode' );
} );