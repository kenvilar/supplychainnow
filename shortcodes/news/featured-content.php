<?php

if ( ! function_exists( 'news_featured_content_shortcode' ) ) {
	function news_featured_content_shortcode( $atts, $content = null ) {
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
			'sectionName'   => 'News',
			'taxQueryTerms' => [ 'news' ],
		] );

		return ob_get_clean();
	}
}

add_action( 'init', function () {
	add_shortcode( 'news_featured_content', 'news_featured_content_shortcode' );
} );