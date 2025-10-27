<?php

if ( ! function_exists( 'article_recent_articles_shortcode' ) ) {
	function article_recent_articles_shortcode( $atts, $content = null ) {
		$defaults = array(
			'class' => '',
			'id'    => '',
		);

		$raw_atts = is_array( $atts ) ? $atts : array();
		$atts     = shortcode_atts( $defaults, $raw_atts );

		$class = esc_attr( $atts['class'] );
		$id    = esc_attr( $atts['id'] );
		ob_start();

		scn_render_if_no_filters( 'components/section/resource-hub/recent-articles', [
			'posts_per_page'        => - 1,
			'sitePaddingClassnames' => 'pb-92',
		] );

		return ob_get_clean();
	}
}

add_action( 'init', function () {
	add_shortcode( 'article_recent_articles', 'article_recent_articles_shortcode' );
} );