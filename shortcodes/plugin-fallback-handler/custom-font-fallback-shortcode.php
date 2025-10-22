<?php
/*
Plugin Name: Custom Font Shortcode Fallback
Description: Provides a fallback for [custom_font] shortcodes and removes leftover tags so pages render cleanly when the source plugin is inactive.
Author: Site Maintenance
Version: 1.0.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Fallback handler for [custom_font ...] ... [/custom_font]
 * - If inner content exists, return it.
 * - If used self-closing or without content, return empty string.
 */
function scn_fallback_custom_font_shortcode( $atts = array(), $content = null ) {
	return do_shortcode( (string) $content );
}

// Register the fallback if the shortcode isn't already provided by a plugin/theme.
add_action( 'init', function () {
	$tag = 'custom_font';
	if ( ! shortcode_exists( $tag ) ) {
		add_shortcode( $tag, 'scn_fallback_custom_font_shortcode' );
	}
}, 1 );

/**
 * Strip any remaining [custom_font ...] and [/custom_font] tags from post content,
 * preserving the inner content so no raw shortcode text appears.
 */
function scn_strip_unknown_custom_font_shortcodes( $content ) {
	if ( strpos( $content, '[custom_font' ) === false ) {
		return $content;
	}
	// Remove opening/self-closing tags like [custom_font ...]
	$content = preg_replace( '/\[custom_font([^\]]*)\]/i', '', $content );
	// Remove closing tags like [/custom_font]
	$content = preg_replace( '/\[(\/custom_font)\]/i', '', $content );

	return $content;
}

add_filter( 'the_content', 'scn_strip_unknown_custom_font_shortcodes', 99 );
