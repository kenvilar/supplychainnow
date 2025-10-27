<?php

if ( ! function_exists( 'resource_hub_featured_content_shortcode' ) ) {
	function resource_hub_featured_content_shortcode( $atts, $content = null ) {
		$postId        = get_the_ID();
		$override_args = $args["q"] ?? [];
		$taxQueryTerms = $args["taxQueryTerms"] ?? [];

		$featured_items = get_field( 'featured_items', $postId );

		$post_ids = [];
		if ( $featured_items ) {
			foreach ( $featured_items as $item ) {
				$post_ids[] = $item['featured_items']->ID;
			}
		}
		$defaults_args = [
			'posts_per_page' => 2,
			'post__in'       => $post_ids,
			"tax_query"      => [
				[
					"taxonomy" => "category",
					"field"    => "slug",
					"terms"    => [ "podcast-episode" ],
					"operator" => "NOT IN",
				],
			],
		];

		$defaults = array(
			'class' => '',
			'id'    => '',
		);

		$raw_atts = is_array( $atts ) ? $atts : array();
		$atts     = shortcode_atts( $defaults, $raw_atts );

		$class = esc_attr( $atts['class'] );
		$id    = esc_attr( $atts['id'] );
		ob_start();

		if ( $featured_items ) {
			$query_args = array_merge( $defaults_args, $override_args );
			echo get_template_part( 'components/ui/card1-post', null, [
				'q'             => $query_args,
				'attributes'    => [],
				'classNames'    => '',
				'noItemsFound'  => '',
				'taxQueryTerms' => $taxQueryTerms,
			] );
		}

		return ob_get_clean();
	}
}

add_action( 'init', function () {
	add_shortcode( 'resource_hub_featured_content', 'resource_hub_featured_content_shortcode' );
} );