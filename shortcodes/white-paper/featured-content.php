<?php

if ( ! function_exists( 'white_paper_featured_content_shortcode' ) ) {
	function white_paper_featured_content_shortcode( $atts, $content = null ) {
		$defaults = array(
			'class' => '',
			'id'    => '',
		);

		$raw_atts = is_array( $atts ) ? $atts : array();
		$atts     = shortcode_atts( $defaults, $raw_atts );

		$class = esc_attr( $atts['class'] );
		$id    = esc_attr( $atts['id'] );
		ob_start();

		scn_render_if_no_filters( 'components/section/resource-hub/featured-content', [
			'q'             => [
				"tax_query" => [
					[
						"taxonomy" => "category",
						"field"    => "slug",
						"terms"    => [ "podcast-episode" ],
						"operator" => "NOT IN",
					],
				],
			],
			'sectionName'   => 'White Papers',
			'taxQueryTerms' => [ 'white-paper' ],
		] );

		return ob_get_clean();
	}
}

add_action( 'init', function () {
	add_shortcode( 'white_paper_featured_content', 'white_paper_featured_content_shortcode' );
} );