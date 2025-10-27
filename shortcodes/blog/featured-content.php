<?php

if ( ! function_exists( 'blog_featured_content_shortcode' ) ) {
	function blog_featured_content_shortcode( $atts, $content = null ) {
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
			'q'           => [
				"tax_query" => [
					[
						"taxonomy" => "category",
						"field"    => "slug",
						"terms"    => [
							// 'blog-post',
							// 'guest-post',
							'white-paper',
							'ebook',
							'article',
							'weekly-summary',
							'news',
							'guide',
							'podcast-episode',
						],
						"operator" => "NOT IN",
					],
				],
			],
			'sectionName' => 'Blogs',
		] );

		return ob_get_clean();
	}
}

add_action( 'init', function () {
	add_shortcode( 'blog_featured_content', 'blog_featured_content_shortcode' );
} );