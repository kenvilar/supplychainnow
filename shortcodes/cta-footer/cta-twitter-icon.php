<?php
/**
 * Create a simple shortcode and name it as [cta_twitter_icon]
 * - attributes are:
 * - - href (required) - this is the href of a tag
 */
add_shortcode( 'cta_twitter_icon', function ( $atts ) {
	$atts = shortcode_atts(
		[
			'href' => 'https://x.com/_supplychainnow',
		],
		$atts,
		'cta_twitter_icon'
	);

	$href = trim( (string) $atts['href'] );
	if ( $href === '' ) {
		return '';
	}

	$href_esc     = esc_url( $href );
	$link_classes = 'text-white hover:text-primary w-inline-block';

	return
		'<a href="' . $href_esc . '" class="' . esc_attr( $link_classes ) . '">' .
		'<div class="flex items-center justify-center w-embed">' .
		'<svg xmlns="http://www.w3.org/2000/svg" width="37" height="36" viewBox="0 0 37 36" fill="none">' .
		'<path d="M23.0045 25.8835H25.4435L14.2165 10.1697H11.7775L23.0045 25.8835Z" fill="currentColor"></path>' .
		'<path fill-rule="evenodd" clip-rule="evenodd" d="M18.6173 36C8.67619 36 0.61731 27.9411 0.61731 18C0.61731 8.05888 8.67619 0 18.6173 0C28.5584 0 36.6173 8.05888 36.6173 18C36.6173 27.9411 28.5584 36 18.6173 36ZM27.0307 9L20.3294 16.6218L27.6173 27H22.2574L17.3497 20.0113L11.2053 27H9.61731L16.6447 19.0074L9.61731 9H14.9772L19.6244 15.6179L25.4428 9H27.0307Z" fill="currentColor"></path>' .
		'</svg>' .
		'</div>' .
		'</a>';
} );