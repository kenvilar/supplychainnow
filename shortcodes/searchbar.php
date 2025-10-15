<?php

if ( ! function_exists( 'scn_searchbar_shortcode' ) ) {
	function scn_searchbar_shortcode( $atts = [] ) {
		ob_start();
		get_template_part( 'components/ui/searchbar', null, [
			'site_padding' => 'pt-60 pb-52',
			'taxonomy'     => 'tags',
		] );

		return ob_get_clean();
	}
}

add_action( 'init', function () {
	add_shortcode( 'searchbar', 'scn_searchbar_shortcode' );
} );