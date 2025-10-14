<?php
/**
 * Shortcode: [social_media_icon_with_link href="..." image="..." alt="..."]
 * - href  (required): anchor destination
 * - image (required): image src URL
 * - alt   (required): image alt text
 */
add_shortcode( 'social_media_icon_with_link', function ( $atts, $content = null, $tag = '' ) {
	$atts = shortcode_atts(
		[
			'href'  => '',
			'image' => '',
			'alt'   => '',
		],
		$atts,
		$tag
	);

	$href  = trim( (string) $atts['href'] );
	$image = trim( (string) $atts['image'] );
	$alt   = trim( (string) $atts['alt'] );

	// All attributes are required
	if ( $href === '' || $image === '' || $alt === '' ) {
		return '';
	}

	$href_esc  = esc_url( $href );
	$image_esc = esc_url( $image );
	$alt_esc   = esc_attr( $alt );

	$link_classes = 'text-white hover:text-primary w-inline-block';

	return
		'<a href="' . $href_esc . '" class="' . esc_attr( $link_classes ) . '">' .
		'<div class="flex items-center justify-center w-embed">' .
		'<img src="' . $image_esc . '" alt="' . $alt_esc . '" />' .
		'</div>' .
		'</a>';
} );
